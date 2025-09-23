<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
       Schema::create('students', function (Blueprint $table) {
            $table->id(); // primary key default laravel
            $table->string('nisn')->unique();    // nisn tetap unik
            $table->string('name');
            $table->enum('gender', ['L', 'P']);  // jenis kelamin
            $table->string('password');          // password siswa (bcrypt)

            // relasi ke kelas
            $table->unsignedBigInteger('school_classes_id')->nullable();
            $table->foreign('school_classes_id')->references('id')->on('school_classes')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
