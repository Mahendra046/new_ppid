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
        Schema::create('permohonan_keberatan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_permohonan')->constrained('permohonan_informasi')->onDelete('cascade');
            $table->string('nama_pemohon');
            $table->string('alamat_pemohon');
            $table->string('no_telepon', 20);
            $table->string('email_pemohon');
            $table->text('alasan_keberatan');
            $table->date('tanggal_keberatan');
            $table->enum('status_keberatan', ['Diajukan', 'Diproses', 'Ditolak', 'Diterima'])->default('Diajukan');
            $table->text('tanggapan_ppid')->nullable();
            $table->string('lampiran')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permohonan_keberatan');
    }
};
