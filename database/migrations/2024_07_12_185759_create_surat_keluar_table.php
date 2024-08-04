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
        Schema::create('surat_keluar', function (Blueprint $table) {
            $table->id(); // Menjadikan id sebagai primary key
            $table->date('tanggal');
            $table->string('no_surat', 200);
            $table->string('perihal', 150);
            $table->string('tujuan', 50);
            $table->text('isi_surat');
            $table->foreignId('id_tandatangan')->nullable()->constrained('nama_tandatgn')->onDelete('set null');
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Balikkan migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_keluar');
    }
};
