<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Grade;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class StudentController extends Controller
{
    
    public function dashboard()
    {
        $student = Student::with(['schoolClass', 'grade'])
        ->where('id', auth()->guard('student')->id())
        ->firstOrFail();


        if (!$student) {
            abort(404, 'Data siswa tidak ditemukan');
        }

        $url = route('student.dashboard');
        $qrSvg = QrCode::size(200)->generate($url);

        $score = $student->grade->score ?? 0;
        $status = $score >= 75 ? 'Lulus' : 'Tidak Lulus';


        return view('student.dashboard', compact('student', 'qrSvg', 'status', 'score'));
    }

    public function updateGrade(Request $request, $nisn)
    {
        $request->validate([
            'score' => 'required|numeric|min:0|max:100',
        ]);

        $student = Student::where('nisn', $nisn)->firstOrFail();

        Grade::updateOrCreate(
            ['student_id' => $student->id],
            ['score' => $request->input('score')]
        );

        return redirect()->route('student.dashboard')
                         ->with('success', 'Nilai berhasil disimpan.');
    }
}
