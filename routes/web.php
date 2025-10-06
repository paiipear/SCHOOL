<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Http\Controllers\AuthController;
use App\Models\Student;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', fn() => view('home'))->name('home');
// // Guru
// Route::middleware('auth:web')->group(function () {
//     Route::get('/guru/dashboard', fn() => view('guru.dashboard'))->name('guru.dashboard');
// });

Route::middleware('auth:student')->group(function () {
    Route::get('/student/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');
    Route::post('/student/{nisn}/grade', [StudentController::class, 'updateGrade'])->name('student.updateGrade');
});


Route::get('/students/{nisn}', [StudentController::class, 'show'])->name('students.show');


Route::get('/qr/download/{id}', function ($id) {
    $student = Student::findOrFail($id);
    $qrCode = QrCode::format('png')->size(300)->generate($student->nisn);

    return response($qrCode)
        ->header('Content-Type', 'image/png')
        ->header('Content-Disposition', 'attachment; filename="qr-'.$student->nisn.'.png"');
})->name('download.qr');