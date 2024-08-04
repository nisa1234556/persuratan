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
        Schema::create('nama_tandatgn', function (Blueprint $table) {
            $table->id(); // Ini membuat kolom id sebagai primary key
            $table->string('nama_tandatangan', 100);
            $table->string('jabatan', 200);
            $table->string('nip', 25)->unique(); // Kolom nip dengan unique constraint
            $table->timestamps();
        });
    }

    /**
     * Balikkan migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('nama_tandatgn');
    }
};
