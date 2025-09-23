<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show($nisn)
    {
        $student = Student::where('nisn', $nisn)
            ->with(['schoolClass', 'grade'])
            ->firstOrFail();

        return view('student.biodata', compact('student'));
    }
}
