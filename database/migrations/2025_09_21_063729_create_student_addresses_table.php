<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('student_addresses', function (Blueprint $table) {
            $table->id();
            $table->char('nisn', 10);
            $table->string('street', 200);
            $table->string('number', 20)->nullable(); 
            $table->string('rt', 5)->nullable();
            $table->string('rw', 5)->nullable();
            $table->char('postal_code', 5);
            $table->timestamps();
            $table->foreign('nisn')
                ->references('nisn')->on('students')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('postal_code')
                ->references('postal_code')->on('master_addresses') 
                ->cascadeOnUpdate()->restrictOnDelete();

            // 1 siswa = 1 alamat aktif
            $table->unique('nisn');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('student_addresses');
    }
};
