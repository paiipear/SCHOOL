<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
       Schema::create('students', function (Blueprint $table) {
            $table->id(); 
            $table->string('nisn')->unique(); 
            $table->string('name');
            $table->enum('gender', ['L', 'P']); 
            $table->string('password');          

            $table->unsignedBigInteger('school_classes_id')->nullable();
            $table->foreign('school_classes_id')->references('id')->on('school_classes')->onDelete('set null');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
