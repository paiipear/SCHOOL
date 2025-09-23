<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // id primary
            $table->string('username')->unique(); // contoh: admin_hana / guru_budi
            $table->string('name');               // nama lengkap admin/guru
            $table->string('password');           // password (bcrypt)
            
            // role → admin atau guru
            $table->enum('role', ['admin', 'guru'])->default('guru');
            
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
