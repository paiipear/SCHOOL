<?php

namespace App\Imports;

use App\Models\Student;
use App\Models\Grade;
use App\Models\SchoolClass;
use App\Models\MasterAddress;
use App\Models\StudentAddress;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Validators\Failure;

class StudentsImport implements
    ToModel,
    WithHeadingRow,
    WithChunkReading,
    SkipsOnFailure
{
    use Importable;

    protected array $classCache = []; 
    protected array $addrCache  = []; 

    public function __construct()
    {
        foreach (SchoolClass::all() as $c) {
            $this->classCache[$c->class_name] = $c->id; 
        }
    }

    public function model(array $row)
    {
      
        $row = array_change_key_case($row, CASE_LOWER);

        $nisn = trim((string)($row['nisn'] ?? ''));
        if ($nisn === '') {
            return null;
        }

        $nama   = $row['nama_siswa'] ?? $row['name'] ?? null;
        $kelas  = $row['kelas'] ?? null;        
        $jur    = $row['jurusan'] ?? null;    
        $gender = $this->normalizeGender($row['gender'] ?? $row['jenis_kelamin'] ?? $row['jk'] ?? null) ?? 'L';
        $score  = $row['score'] ?? null;
        $pwdIn  = $row['password'] ?? null;

        
        $street      = $row['street']      ?? null;
        $number      = $row['number']      ?? null;
        $rt          = $row['rt']          ?? null;
        $rw          = $row['rw']          ?? null;
        $postal_code = $row['postal_code'] ?? null;
        $subdistrict = $row['subdistrict'] ?? null;
        $district    = $row['district']    ?? null;
        $city        = $row['city_regency']?? null;
        $province    = $row['province']    ?? null;

        DB::transaction(function () use (
            $nisn, $nama, $kelas, $jur, $gender, $score, $pwdIn,
            $street, $number, $rt, $rw, $postal_code, $subdistrict, $district, $city, $province
        ) {
           
            [$grade_level, $major, $rombel] = $this->parseKelasAndJurusan($kelas, $jur);

            $className = trim("$grade_level $major $rombel");
            if (!isset($this->classCache[$className])) {
                $class = SchoolClass::create([
                    'grade_level' => $grade_level,
                    'major'       => $major,
                    'rombel'      => $rombel,
                ]);
                $this->classCache[$class->class_name] = $class->id;
            }
            $classId = $this->classCache[$className];

           
            $existing = Student::where('nisn', $nisn)->first();
            $passwordHash = $pwdIn
                ? Hash::make($pwdIn)
                : ($existing?->password ?? Hash::make(Str::random(10)));

            $student = Student::updateOrCreate(
                ['nisn' => $nisn],
                [
                    'name'              => $nama,
                    'gender'            => $gender,
                    'school_classes_id' => $classId,
                    'password'          => $passwordHash,
                ]
            );

           
            if ($postal_code) {
                $addrKey = implode('|', [
                    trim((string)$postal_code),
                    (string)$subdistrict, (string)$district, (string)$city, (string)$province,
                ]);

                if (!isset($this->addrCache[$addrKey])) {
                   
                    $master = MasterAddress::firstOrCreate(
                        ['postal_code' => trim((string)$postal_code)],
                        [
                            'subdistrict'  => $subdistrict,
                            'district'     => $district,
                            'city_regency' => $city,
                            'province'     => $province,
                        ]
                    );
                   
                    $master->fill([
                        'subdistrict'  => $subdistrict ?? $master->subdistrict,
                        'district'     => $district ?? $master->district,
                        'city_regency' => $city ?? $master->city_regency,
                        'province'     => $province ?? $master->province,
                    ])->save();

                    $this->addrCache[$addrKey] = $master->postal_code;
                }

                StudentAddress::updateOrCreate(
                    ['nisn' => $student->nisn],
                    [
                        'street'      => $street,
                        'number'      => $number,
                        'rt'          => $rt,
                        'rw'          => $rw,
                        'postal_code' => $this->addrCache[$addrKey],
                    ]
                );
            }

            if ($score !== null && $score !== '') {
                Grade::updateOrCreate(
                    ['student_id' => $student->id],
                    ['score' => (float)$score]
                );
              
            }
        });

      
        return null;
    }

    public function chunkSize(): int { return 500; }

    public function onFailure(Failure ...$failures) { /* optional logging */ }

    private function normalizeGender(?string $raw): ?string
    {
        $v = strtoupper(trim((string) $raw));
        if (in_array($v, ['L','LAKI','LAKI-LAKI','LK','PRIA'])) return 'L';
        if (in_array($v, ['P','PEREMPUAN','PR','WANITA']))      return 'P';
        return null;
    }

    private function parseKelasAndJurusan(?string $kelasTxt, ?string $jurusanCol): array
    {
        $kelasTxt   = trim((string)$kelasTxt);
        $jurusanCol = trim((string)$jurusanCol);
        $grade = null; $major = null; $rombel = null;

        $normalized = preg_replace('/\s+/', ' ', str_replace(['-','/','.'], ' ', $kelasTxt));
        $tokens = array_values(array_filter(explode(' ', $normalized)));

        if (!empty($tokens)) {
            $t0 = strtoupper($tokens[0]);
            if (in_array($t0, ['X','XI','XII'])) { $grade = $t0; array_shift($tokens); }
        }

        for ($i = count($tokens)-1; $i >= 0; $i--) {
            if (preg_match('/^\d+$/', $tokens[$i])) { $rombel = ltrim($tokens[$i],'0') ?: '1'; unset($tokens[$i]); break; }
        }
        $tokens = array_values($tokens);

        $major = $jurusanCol !== '' ? $jurusanCol : (count($tokens) ? implode(' ', $tokens) : null);

        $map = [
            'RPL' => 'PPLG',
            'PPLG' => 'PPLG',
            'DKV' => 'DKV',
            'PH' => 'PH',
            'AKL' => 'AKL',
            'TBSM' => 'TBSM',
            'TKRO' => 'TKRO',
        ];

        if ($major) {
            $key = strtoupper(preg_replace('/\(.*/', '', preg_replace('/\s+/', ' ', $major)));
            $major = $map[$key] ?? $major;
        }

        return [
            $grade ?: 'X',
            $major ?: 'PPLG (Pengembangan Perangkat Lunak dan Gim)',
            $rombel ?: '1',
        ];
    }
}
