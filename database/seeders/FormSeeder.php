<?php

namespace Database\Seeders;

use App\Models\Form;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Form::create([
            'info_dari' => "Teman/Kenalan",
            'referensi' => "Hadi Kusumah",
            'jenis_pendaftaran' => "Murid Baru",
            'tahun_pelajaran' => "2025/2026",
            'jenjang_tujuan' => "TKA",
            'nama_lengkap' => "Shafiyyah Calya Salsabila",
            'nama_panggilan' => "Shafiyyah",
            'no_kk' => "32127287382382",
            'nik' => "3174021812960001",
            'jenis_kelamin' => "Perempuan",
            'tempat_lahir' => "Jakarta",
            'tanggal_lahir' => "2021-02-17",
            'anak_ke' => "1 dari 2 bersaudara",
            'alamat_1' => "Jl. Raya Kampung Sawah Gg. Ajim No. 131",
            'kota' => "Bekasi",
            'provinsi' => "Jawa Barat",
            'kode_pos' => "17415",
            'agama' => "Islam",
            'golongan_darah' => "Tidak tahu",
            'penyakit' => "-",
            'kelainan' => "-",
            'tinggi_badan' => "80",
            'berat_badan' => "20",
            'nisn' => "3232",
            'sekolah_asal' => "IBS Al-Ikhlas",
            'alamat_sekolah_1' => "Jl. Raya Kampung Sawah",
            'alamat_sekolah_2' => "Sekolah",
            'kota_sekolah' => "Bekasi",
            'provinsi_sekolah' => "Jawa Barat",
            'kode_pos_sekolah' => "17415",
            'no_telp_sekolah' => "237827828283",
            'no_wa_kepala_sekolah' => "0828738237",
            'no_wa_walas_sekolah' => "32828932",
            'nilai_uasbn' => "88",
            'matematika' => "77",
            'bahasa_indonesia' => "99",
            'ipa' => "88",
            'no_sttb' => "2837828",
            'prestasi' => "-",
            'nama_lengkap_ayah' => "Mujahid Robbani Sholahudin",
            'tempat_lahir_ayah' => "Jakarta",
            'tanggal_lahir_ayah' => "1996-12-18",
            'agama_ayah' => "Islam",
            'kewarganegaraan_ayah' => "WNI",
            'no_hp_ayah' => "089653132158",
            'email_ayah' => "mujahidrobbanisholahudin@gmail.com",
            'masih_hidup_ayah' => "Ya",
            'nama_lengkap_ibu' => "Syiva Muthi'ah Kamilah",
            'tempat_lahir_ibu' => "Jakarta",
            'tanggal_lahir_ibu' => "1996-04-02",
            'agama_ibu' => "Islam",
            'kewarganegaraan_ibu' => "WNI",
            'no_hp_ibu' => "085718400635",
            'alamat_email_ibu' => "syivamuthiahk@gmail.com",
            'masih_hidup_ibu' => "Ya",
            'nama_lengkap_wali' => "Meutia Rikonita",
            'tempat_lahir_wali' => "Jakarta",
            'tanggal_lahir_wali' => "1974-08-01",
            'agama_wali' => "Islam",
            'kewarganegaraan_wali' => "WNI",
            'pendidikan_terakhir_wali' => "D IV / S - 1",
            'no_hp_wali' => "0827837272",
            'email_wali' => "majnsa@gmail.com",
            'pekerjaan_wali' => "sjaijs",
            'hubungan_wali' => "Lainnya",
            'no_telp_darurat' => "3434738478",
            'nama_darurat' => "sjdsdw",
            'hubungan_darurat' => "hsdjhwdn",
        ]);
    }
}
