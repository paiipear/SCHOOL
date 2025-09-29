<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Siswa</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 " style="font-family: 'Poppins', sans-serif;" >

    <header class="bg-amber-600 text-white py-8 px-6 shadow">
        <div class="max-w-6xl mx-auto">
            <h1 class="text-3xl font-bold">Selamat Datang, {{ $student->name }}!</h1>
            <p class="text-sm text-amber-200">Dashboard Siswa</p>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-6 -mt-6 space-y-8">

        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-lg font-semibold text-gray-700 mb-3">Nilai Kelulusan</h2>
            <div class="flex items-center justify-between">
                <p class="text-5xl font-bold 
                    @if($score < 70) text-red-600 
                    @elseif($score >= 70 && $score < 80) text-amber-500 
                    @else text-green-600 
                    @endif">
                    {{ $score ?? '-' }}
                </p>

                <div>
                    @if($status === 'Lulus')
                        <span class="px-4 py-2 rounded-full bg-green-600 text-white text-sm font-medium">Lulus</span>
                    @else
                        <span class="px-4 py-2 rounded-full bg-red-600 text-white text-sm font-medium">Tidak Lulus</span>
                    @endif
                </div>
            </div>
        </div>
        {{-- biodata --}}
        <h2 class="text-xl font-bold text-amber-600">Biodata <span class="text-gray-500 text-base">siswa</span></h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
           
            <div class="bg-white rounded-lg shadow p-4  flex flex-col items-center">
                <div class="bg-gray-100 p-4 rounded-lg">
                    {!! QrCode::size(130)->generate($student->nisn); !!}
                </div>
                <p class="font-bold mt-3">{{ $student->name }}</p>
                <hr class="my-4 w-full border-t border-gray-300">
                <p class="text-gray-500">{{ $student->nisn }}</p>
                <hr class="my-4 w-full border-t border-gray-300">
            </div>

            {{-- Profile --}}
            <div class="md:col-span-2 bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold mb-4">Profile</h3>
                <div class="space-y-2 text-sm">
                    <div class="flex"><span class="w-40">NISN</span>: {{ $student->nisn }}</div>
                    <div class="flex"><span class="w-40">Nama Lengkap</span>: {{ $student->name }}</div>
                    <div class="flex"><span class="w-40">Jenis Kelamin</span>:{{ $student->gender === 'L' ? ' Laki-laki' : ' Perempuan' }}</div>
                    <div class="flex"><span class="w-40">Kelas</span>: {{ $student->schoolClass->grade_level ?? '-' }}</div>
                    <div class="flex"><span class="w-40">Jurusan</span>: {{ $student->schoolClass->major ?? '-' }}</div>
                    <div class="flex"><span class="w-40">Rombel</span>: {{ $student->schoolClass->rombel ?? '-' }}</div>
                    <div class="flex">
                        <span class="w-40">Alamat</span>: {{ $student->studentAddress->full_address ?? '-' }}
                    </div>

                </div>
            </div>
        </div>


    </main>

</body>
</html>
