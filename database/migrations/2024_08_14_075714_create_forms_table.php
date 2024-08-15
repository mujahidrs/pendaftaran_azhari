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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('info_dari');
            $table->string('referensi')->nullable();
            $table->string('tahun_pelajaran');
            $table->string('jenjang_tujuan');
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('no_kk');
            $table->string('nik');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('anak_ke');
            $table->string('alamat_1');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('kode_pos');
            $table->string('agama');
            $table->string('golongan_darah');
            $table->string('penyakit')->nullable();
            $table->string('kelainan')->nullable();
            $table->string('tinggi_badan');
            $table->string('berat_badan');
            $table->string('nisn')->nullable();
            $table->string('sekolah_asal');
            $table->string('alamat_sekolah_1');
            $table->string('alamat_sekolah_2');
            $table->string('kota_sekolah');
            $table->string('provinsi_sekolah');
            $table->string('kode_pos_sekolah');
            $table->string('no_telp_sekolah');
            $table->string('nilai_uasbn')->nullable();
            $table->string('matematika')->nullable();
            $table->string('bahasa_indonesia')->nullable();
            $table->string('ipa')->nullable();
            $table->string('no_sttb')->nullable();
            $table->string('prestasi')->nullable();
            $table->string('nama_lengkap_ayah');
            $table->string('tempat_lahir_ayah');
            $table->string('tanggal_lahir_ayah');
            $table->string('agama_ayah');
            $table->string('kewarganegaraan_ayah');
            $table->string('no_hp_ayah');
            $table->string('email_ayah');
            $table->string('masih_hidup_ayah');
            $table->string('nama_lengkap_ibu');
            $table->string('tempat_lahir_ibu');
            $table->string('tanggal_lahir_ibu');
            $table->string('agama_ibu');
            $table->string('kewarganegaraan_ibu');
            $table->string('no_hp_ibu');
            $table->string('alamat_email_ibu');
            $table->string('masih_hidup_ibu');
            $table->string('tempat_lahir_wali')->nullable();
            $table->string('tanggal_lahir_wali')->nullable();
            $table->string('agama_wali')->nullable();
            $table->string('kewarganegaraan_wali')->nullable();
            $table->string('pendidikan_terakhir_wali')->nullable();
            $table->string('no_hp_wali')->nullable();
            $table->string('email_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('hubungan_wali')->nullable();
            $table->string('no_telp_darurat');
            $table->string('nama_darurat');
            $table->string('hubungan_darurat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
