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
        Schema::create('permohonan_informasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemohon');
            $table->string('alamat_pemohon');
            $table->string('no_telepon', 20);
            $table->string('email_pemohon');
            $table->text('informasi_diminta');
            $table->text('tujuan_permohonan');
            $table->date('tanggal_permohonan');
            $table->enum('status_permohonan', ['Diajukan', 'Diproses', 'Ditolak', 'Diterima'])->default('Diajukan');
            $table->string('lampiran')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permohonan_informasi');
    }
};
