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
        Schema::create('surat_masuk', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kop')->nullable()->constrained('kepala_surat')->onDelete('set null');
            $table->date('tanggal')->notNull();
            $table->string('no_surat', 50)->notNull();
            $table->string('asal_surat', 150)->notNull();
            $table->string('perihal', 150)->notNull();
            $table->string('disp1', 70)->notNull();
            $table->string('disp2', 70)->notNull();
            $table->foreignId('id_tandatangan')->nullable()->constrained('nama_tandatgn')->onDelete('set null');
            $table->string('image')->notNull();
            $table->timestamps();
        });
    }

    /**
     * Balikkan migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_masuk');
    }
};
