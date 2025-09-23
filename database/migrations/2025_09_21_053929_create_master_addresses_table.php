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
        Schema::create('master_addresses', function (Blueprint $table) {
            $table->char('postal_code', 5)->unique();   // kodepos
            $table->string('subdistrict', 100);         // kelurahan
            $table->string('district', 100);            // kecamatan
            $table->string('city_regency', 100);        // kabupaten_kota
            $table->string('province', 100);            // provinsi
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_addresses');
    }
};
