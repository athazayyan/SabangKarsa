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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Primary key auto-increment
            $table->string('name');
            $table->string('email')->unique(); // Email unik
            $table->timestamp('email_verified_at')->nullable(); // Untuk verifikasi email
            $table->string('password');
            $table->enum('role', ['admin', 'user', 'penyedia'])->default('user'); // Role pengguna
            
            $table->rememberToken(); // Untuk fitur "remember me"
            $table->timestamps(); // Kolom created_at dan updated_at otomatis
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary(); // Email sebagai primary key, berelasi dengan users.email
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary(); // ID sesi
            $table->foreignId('user_id')->nullable()->index(); // Foreign key ke tabel users, bisa null jika sesi tamu
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload'); // Data sesi
            $table->integer('last_activity')->index(); // Waktu aktivitas terakhir
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};