@extends('layouts.app')

@section('style')
<style>
    /* Media query if print */
    @media print {
        nav {
            display: none !important;
        }

        .print {
            display: block !important;
        }
        .no_print {
            display: none !important;
        }
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card print">
                <div class="card-header bg-secondary ">
                    <div class="row">
                        <div class="col d-flex justify-content-start no_print">
                            <a href="{{ route('home') }}" class="btn btn-info">Kembali</a>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <h4>Detail Pendaftaran</h4>
                        </div>
                        <div class="col d-flex justify-content-end no_print">
                            <button onclick="window.print()" class="btn btn-success">Export/Print</button>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm table-striped">
                            <tr>
                                <th>Waktu Registrasi</th>
                                <td>{{ $form->created_at }}</td>
                            </tr>
                            <tr>
                                <th>Info Dari</th>
                                <td>{{ $form->info_dari }}</td>
                            </tr>
                            <tr>
                                <th>Referensi</th>
                                <td>{{ $form->referensi }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Pendaftaran</th>
                                <td>{{ $form->jenis_pendaftaran }}</td>
                            </tr>
                            <tr>
                                <th>Tahun Pelajaran</th>
                                <td>{{ $form->tahun_pelajaran }}</td>
                            </tr>
                            <tr>
                                <th>Jenjang Tujuan</th>
                                <td>{{ $form->jenjang_tujuan }}</td>
                            </tr>
                            <tr>
                                <th>Nama Lengkap</th>
                                <td>{{ $form->nama_lengkap }}</td>
                            </tr>
                            <tr>
                                <th>Nama Panggilan</th>
                                <td>{{ $form->nama_panggilan }}</td>
                            </tr>
                            <tr>
                                <th>Nomor Kartu Keluarga</th>
                                <td>{{ $form->no_kk }}</td>
                            </tr>
                            <tr>
                                <th>NIK</th>
                                <td>{{ $form->nik }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>{{ $form->jenis_kelamin }}</td>
                            </tr>
                            <tr>
                                <th>Tempat Lahir</th>
                                <td>{{ $form->tempat_lahir }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <td>{{ $form->tanggal_lahir }}</td>
                            </tr>
                            <tr>
                                <th>Anak Ke</th>
                                <td>{{ $form->anak_ke }}</td>
                            </tr>
                            <tr>
                                <th>Alamat 1</th>
                                <td>{{ $form->alamat_1 }}</td>
                            </tr>
                            <tr>
                                <th>Kota</th>
                                <td>{{ $form->kota }}</td>
                            </tr>
                            <tr>
                                <th>Provinsi</th>
                                <td>{{ $form->provinsi }}</td>
                            </tr>
                            <tr>
                                <th>Kode Pos</th>
                                <td>{{ $form->kode_pos }}</td>
                            </tr>
                            <tr>
                                <th>Agama</th>
                                <td>{{ $form->agama }}</td>
                            </tr>
                            <tr>
                                <th>Golongan Darah</th>
                                <td>{{ $form->golongan_darah }}</td>
                            </tr>
                            <tr>
                                <th>Penyakit</th>
                                <td>{{ $form->penyakit }}</td>
                            </tr>
                            <tr>
                                <th>Kelainan</th>
                                <td>{{ $form->kelainan }}</td>
                            </tr>
                            <tr>
                                <th>Tinggi Badan</th>
                                <td>{{ $form->tinggi_badan }}</td>
                            </tr>
                            <tr>
                                <th>Berat Badan</th>
                                <td>{{ $form->berat_badan }}</td>
                            </tr>
                            <tr>
                                <th>Nomor Induk Siswa Nasional</th>
                                <td>{{ $form->nisn }}</td>
                            </tr>
                            <tr>
                                <th>Sekolah Asal</th>
                                <td>{{ $form->sekolah_asal }}</td>
                            </tr>
                            <tr>
                                <th>Alamat Sekolah 1</th>
                                <td>{{ $form->alamat_sekolah_1 }}</td>
                            </tr>
                            <tr>
                                <th>Alamat Sekolah 2</th>
                                <td>{{ $form->alamat_sekolah_2 }}</td>
                            </tr>
                            <tr>
                                <th>Kota Sekolah</th>
                                <td>{{ $form->kota_sekolah }}</td>
                            </tr>
                            <tr>
                                <th>Provinsi Sekolah</th>
                                <td>{{ $form->provinsi_sekolah }}</td>
                            </tr>
                            <tr>
                                <th>Kode Pos Sekolah</th>
                                <td>{{ $form->kode_pos_sekolah }}</td>
                            </tr>
                            <tr>
                                <th>Nomor Telepon Sekolah</th>
                                <td>{{ $form->no_telp_sekolah }}</td>
                            </tr>
                            <tr>
                                <th>Nomor Whatsapp Kepala Sekolah</th>
                                <td>{{ $form->no_wa_kepala_sekolah }}</td>
                            </tr>
                            <tr>
                                <th>Nomor Whatsapp Wali Kelas Sekolah</th>
                                <td>{{ $form->no_wa_walas_sekolah }}</td>
                            </tr>
                            <tr>
                                <th>Nilai UASBN</th>
                                <td>{{ $form->nilai_uasbn }}</td>
                            </tr>
                            <tr>
                                <th>Matematika</th>
                                <td>{{ $form->matematika }}</td>
                            </tr>
                            <tr>
                                <th>Bahasa Indonesia</th>
                                <td>{{ $form->bahasa_indonesia }}</td>
                            </tr>
                            <tr>
                                <th>IPA</th>
                                <td>{{ $form->ipa }}</td>
                            </tr>
                            <tr>
                                <th>No STTB</th>
                                <td>{{ $form->no_sttb }}</td>
                            </tr>
                            <tr>
                                <th>Prestasi</th>
                                <td>{{ $form->prestasi }}</td>
                            </tr>
                            <tr>
                                <th>Nama Lengkap Ayah</th>
                                <td>{{ $form->nama_lengkap_ayah }}</td>
                            </tr>
                            <tr>
                                <th>Tempat Lahir Ayah</th>
                                <td>{{ $form->tempat_lahir_ayah }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir Ayah</th>
                                <td>{{ $form->tanggal_lahir_ayah }}</td>
                            </tr>
                            <tr>
                                <th>Agama Ayah</th>
                                <td>{{ $form->agama_ayah }}</td>
                            </tr>
                            <tr>
                                <th>Kewarganegaraan Ayah</th>
                                <td>{{ $form->kewarganegaraan_ayah }}</td>
                            </tr>
                            <tr>
                                <th>Nomor HP Ayah</th>
                                <td>{{ $form->no_hp_ayah }}</td>
                            </tr>
                            <tr>
                                <th>Email Ayah</th>
                                <td>{{ $form->email_ayah }}</td>
                            </tr>
                            <tr>
                                <th>Masih Hidup Ayah</th>
                                <td>{{ $form->masih_hidup_ayah }}</td>
                            </tr>
                            <tr>
                                <th>Nama Lengkap Ibu</th>
                                <td>{{ $form->nama_lengkap_ibu }}</td>
                            </tr>
                            <tr>
                                <th>Tempat Lahir Ibu</th>
                                <td>{{ $form->tempat_lahir_ibu }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir Ibu</th>
                                <td>{{ $form->tanggal_lahir_ibu }}</td>
                            </tr>
                            <tr>
                                <th>Agama Ibu</th>
                                <td>{{ $form->agama_ibu }}</td>
                            </tr>
                            <tr>
                                <th>Kewarganegaraan Ibu</th>
                                <td>{{ $form->kewarganegaraan_ibu }}</td>
                            </tr>
                            <tr>
                                <th>Nomor HP Ibu</th>
                                <td>{{ $form->no_hp_ibu }}</td>
                            </tr>
                            <tr>
                                <th>Email Ibu</th>
                                <td>{{ $form->alamat_email_ibu }}</td>
                            </tr>
                            <tr>
                                <th>Masih Hidup Ibu</th>
                                <td>{{ $form->masih_hidup_ibu }}</td>
                            </tr>
                            <tr>
                                <th>Nama Lengkap Wali</th>
                                <td>{{ $form->nama_lengkap_wali }}</td>
                            </tr>
                            <tr>
                                <th>Tempat Lahir Wali</th>
                                <td>{{ $form->tempat_lahir_wali }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir Wali</th>
                                <td>{{ $form->tanggal_lahir_wali }}</td>
                            </tr>
                            <tr>
                                <th>Agama Wali</th>
                                <td>{{ $form->agama_wali }}</td>
                            </tr>
                            <tr>
                                <th>Kewarganegaraan Wali</th>
                                <td>{{ $form->kewarganegaraan_wali }}</td>
                            </tr>
                            <tr>
                                <th>Pendidikan Terakhir Wali</th>
                                <td>{{ $form->pendidikan_terakhir_wali }}</td>
                            </tr>
                            <tr>
                                <th>No HP Wali</th>
                                <td>{{ $form->no_hp_wali }}</td>
                            </tr>
                            <tr>
                                <th>Email Wali</th>
                                <td>{{ $form->email_wali }}</td>
                            </tr>
                            <tr>
                                <th>Pekerjaan Wali</th>
                                <td>{{ $form->pekerjaan_wali }}</td>
                            </tr>
                            <tr>
                                <th>Hubungan Wali</th>
                                <td>{{ $form->hubungan_wali }}</td>
                            </tr>
                            <tr>
                                <th>No Telp Darurat</th>
                                <td>{{ $form->no_telp_darurat }}</td>
                            </tr>
                            <tr>
                                <th>Nama Darurat</th>
                                <td>{{ $form->nama_darurat }}</td>
                            </tr>
                            <tr>
                                <th>Hubungan Darurat</th>
                                <td>{{ $form->hubungan_darurat }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{ $form->status }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection