<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        Schema::create('kepala_surat', function (Blueprint $table) {
            $table->id(); // Menggunakan id sebagai primary key
            $table->string('nama_kop', 200);
            $table->text('alamat_kop')->nullable();
            $table->string('nama_tujuan', 200)->nullable();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Balikkan migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('kepala_surat');
    }
};
