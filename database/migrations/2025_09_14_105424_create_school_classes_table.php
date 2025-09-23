<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       Schema::create('school_classes', function (Blueprint $table) {
            $table->id();
            $table->string('grade_level'); // e.g. "10", "11", "12"
            $table->string('major');       // jurusan
            $table->string('rombel');      // rombel
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_classes');
    }
};
