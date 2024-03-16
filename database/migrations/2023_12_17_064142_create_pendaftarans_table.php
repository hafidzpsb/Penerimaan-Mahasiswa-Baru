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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('foto');
            $table->string('nama_lengkap');
            $table->string('alamat_ktp');
            $table->string('alamat');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->bigInteger('nomor_telepon');
            $table->bigInteger('nomor_hp');
            $table->string('email');
            $table->string('kewarganegaraan');
            $table->string('kewarganegaraan_luar_negeri')->nullable();
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('kabupaten_tempat_lahir')->nullable();
            $table->string('provinsi_tempat_lahir')->nullable();
            $table->string('tempat_lahir_luar_negeri')->nullable();
            $table->string('jenis_kelamin');
            $table->string('status_menikah');
            $table->string('agama');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
