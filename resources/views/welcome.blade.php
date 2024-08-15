@extends('layouts.app')

@section('content')
      {{-- {{ var_dump($form_1 ? $form_1 : '') }}
      {{ var_dump($form_2 ? $form_2 : '') }}
      {{ var_dump($form_3 ? $form_3 : '') }}
      {{ var_dump($form_4 ? $form_4 : '') }}
      {{ var_dump($form_5 ? $form_5 : '') }}
      {{ var_dump(isset($page) ? $page : '') }} --}}

      <div class="container py-3">
        {{-- Alert Success yang dikirim dari controller --}}
        @if(session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3>Form Pendaftaran Murid Baru</h3>
                <span>Isi Form Online dengan sebenar-benarnya</span>
                <div class="progress my-3" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: {{ isset($page) ? $page * 20 . '%' : '' }}">{{ isset($page) ? $page * 20 . '%' : '' }}</div>
                </div>
            </div>
            <form method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="page" value="{{ isset($page) ? $page : 1 }}">
                <div class="card-body {{ isset($page) ? $page != 1 ? 'd-none' : '' : ''}}">
                    <h4>Pendaftaran Murid Baru 2024/2025</h4>
                    <small class="form-text text-muted">Form ini merupakan Form Pendaftaran untuk Murid kelas 7 SMP yang akan memulai Tahun Pelajaran pada Bulan Juli Tahun 2024</small>
                    <hr>
                    <div class="mb3">
                        <label>Darimanakah Bapak/Ibu Mengetahui Sekolah Azhari Islamic School Lebak Bulus Jakarta? *</label>
                        <select name="info_dari" id="" class="form-select" >
                            <option value="">-- Pilih Opsi --</option>
                            <option {{ $form_1 ? $form_1['info_dari'] == 'Keluarga' ? 'selected' : '' : '' }}>Keluarga</option>
                            <option {{ $form_1 ? $form_1['info_dari'] == 'Teman/Kenalan' ? 'selected' : '' : '' }}>Teman/Kenalan</option>
                            <option {{ $form_1 ? $form_1['info_dari'] == 'Website' ? 'selected' : '' : '' }}>Website</option>
                            <option {{ $form_1 ? $form_1['info_dari'] == 'IG' ? 'selected' : '' : '' }}>IG</option>
                            <option {{ $form_1 ? $form_1['info_dari'] == 'FB' ? 'selected' : '' : '' }}>FB</option>
                            <option {{ $form_1 ? $form_1['info_dari'] == 'Spanduk/Baliho' ? 'selected' : '' : '' }}>Spanduk/Baliho</option>
                            <option {{ $form_1 ? $form_1['info_dari'] == 'Brosur Cetak' ? 'selected' : '' : '' }}>Brosur Cetak</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>
                            Sebutkan nama Bapak/Ibu yang memberikan rekomendasi kepada Saudara sehingga Saudara mendaftar di Azhari Lebak Bulus Jakarta
                        </label>
                        <input type="text" name="referensi" class="form-control" value="{{ $form_1 ? $form_1['referensi'] : '' }}">
                    </div>
                    <div class="mb-3">
                        <label>Tahun Pelajaran *</label>
                        <input type="text" name="tahun_pelajaran" class="form-control"  maxlength="10" value="{{ $form_1 ? $form_1['tahun_pelajaran'] : '' }}">
                        <small class="form-text text-muted">Contoh: 2024/2025</small>
                    </div>
                    <div class="mb-3">
                        <label>Jenjang Yang Diminati *</label>
                        <select name="jenjang_tujuan" id="" class="form-select">
                            <option value="">-- Pilih Opsi --</option>
                            <option {{ $form_1 ? $form_1['jenjang_tujuan'] == 'SD' ? 'selected' : '' : '' }}>SD</option>
                            <option {{ $form_1 ? $form_1['jenjang_tujuan'] == 'SMP' ? 'selected' : '' : '' }}>SMP</option>
                            <option {{ $form_1 ? $form_1['jenjang_tujuan'] == 'SMA' ? 'selected' : '' : '' }}>SMA</option>
                        </select>
                    </div>
                </div>
                <div class="card-body {{ isset($page) ? $page != 2 ? 'd-none' : '' : ''}}">
                    <h4>Data Calon Murid</h4>
                    <hr>
                    <div class="mb-3">
                        <label>Nama Lengkap *</label>
                        <input name="nama_lengkap" type="text" class="form-control" placeholder="Nama Lengkap"  value="{{ $form_2 ? $form_2['nama_lengkap'] : '' }}">
                        <small class="form-text text-muted">Masukkan Nama Lengkap Murid / Peserta PMB</small>
                    </div>
                    <div class="mb-3">
                        <label>Nama Panggilan *</label>
                        <input name="nama_panggilan" type="text" class="form-control" placeholder="Nama Panggilan"  value="{{ $form_2 ? $form_2['nama_panggilan'] : '' }}">
                        <small class="form-text text-muted">Masukkan Nama Panggilan Siswa / Peserta PMB</small>
                    </div>
                    <div class="mb-3">
                        <label>Nomor Kartu Keluarga *</label>
                        <input name="no_kk" type="text" class="form-control"  value="{{ $form_2 ? $form_2['no_kk'] : '' }}">
                        <small class="form-text text-muted">Masukkan Nomor Kartu Keluarga (KK) terdapat di bagian atas Kartu Keluarga (KK)</small>
                    </div>
                    <div class="mb-3">
                        <label>NIK *</label>
                        <input name="nik" type="text" class="form-control"  value="{{ $form_2 ? $form_2['nik'] : '' }}">
                        <small class="form-text text-muted">Masukkan Nomor Induk Kependudukan Calon Siswa</small>
                    </div>
                    <div class="mb-3">
                        <label>Jenis Kelamin *</label>
                        <select name="jenis_kelamin" id="" class="form-select" >
                            <option value="">-- Pilih Opsi --</option>
                            <option {{ $form_2 ? $form_2['jenis_kelamin'] == 'Laki-laki' ? 'selected' : '' : '' }}>Laki-laki</option>
                            <option {{ $form_2 ? $form_2['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' : '' }}>Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Tempat Lahir *</label>
                        <input name="tempat_lahir" type="text" class="form-control"  value="{{ $form_2 ? $form_2['tempat_lahir'] : '' }}">
                        <small class="form-text text-muted">Masukkan Tempat Lahir Siswa/Peserta PSB</small>
                    </div>
                    <div class="mb-3">
                        <label>Tanggal Lahir *</label>
                        <input name="tanggal_lahir" type="date" id="" class="form-control"  value="{{ $form_2 ? $form_2['tanggal_lahir'] : '' }}">
                        <small class="form-text text-muted">Masukkan Tanggal Lahir Siswa/Peserta PSB</small>
                    </div>
                    <div class="mb-3">
                        <label>Anak ke *</label>
                        <input name="anak_ke" type="text" class="form-control" maxlength="20"  value="{{ $form_2 ? $form_2['anak_ke'] : '' }}">
                        <small class="form-text text-muted">Contoh: 1 dari 2 bersaudara</small>
                    </div>
                    <div class="mb-3">
                        <label>Alamat Lengkap *</label>
                        <div class="row mb-3">
                            <div class="col">
                                <input name="alamat_1" type="text" class="form-control" placeholder="Alamat 1"  value="{{ $form_2 ? $form_2['alamat_1'] : '' }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input name="kota" type="text" class="form-control" placeholder="Kota"  value="{{ $form_2 ? $form_2['kota'] : '' }}">
                            </div>
                            <div class="col">
                                <input name="provinsi" type="text" class="form-control" placeholder="Daerah / Provinsi"  value="{{ $form_2 ? $form_2['provinsi'] : '' }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input name="kode_pos" type="text" class="form-control" placeholder="Kode Pos"  value="{{ $form_2 ? $form_2['kode_pos'] : '' }}">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Agama *</label>
                        <input name="agama" type="text" class="form-control"  value="{{ $form_2 ? $form_2['agama'] : '' }}">
                        <small class="form-text text-muted">Contoh: Islam/Protestan/Katolik/dsb</small>
                    </div>
                    <div class="mb-3">
                        <label>Golongan Darah *</label>
                        <select name="golongan_darah" id="" class="form-select" >
                            <option value="">-- Pilih Opsi --</option>
                            <option {{ $form_2 ? $form_2['golongan_darah'] == 'A' ? 'selected' : '' : '' }}>A</option>
                            <option {{ $form_2 ? $form_2['golongan_darah'] == 'B' ? 'selected' : '' : '' }}>B</option>
                            <option {{ $form_2 ? $form_2['golongan_darah'] == 'O' ? 'selected' : '' : '' }}>O</option>
                            <option {{ $form_2 ? $form_2['golongan_darah'] == 'AB' ? 'selected' : '' : '' }}>AB</option>
                            <option {{ $form_2 ? $form_2['golongan_darah'] == 'Tidak tahu' ? 'selected' : '' : '' }}>Tidak tahu</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Penyakit yang Pernah Diderita</label>
                        <textarea name="penyakit" id="" class="form-control">{{ $form_2 ? $form_2['penyakit'] : '' }}</textarea>
                        <small class="form-text text-muted">Contoh: 1. Asma / Tahun 2015 / Sudah Sembuh</small>
                    </div>
                    <div class="mb-3">
                        <label>Kelainan Jasmani</label>
                        <input name="kelainan" type="text" class="form-control" value="{{ $form_2 ? $form_2['kelainan'] : '' }}">
                        <small class="form-text text-muted">Contoh: Membutuhkan kursi roda, dsb</small>
                    </div>
                    <div class="mb-3">
                        <label>Tinggi Badan *</label>
                        <input name="tinggi_badan" type="text" class="form-control"  value="{{ $form_2 ? $form_2['tinggi_badan'] : '' }}">
                        <small class="form-text text-muted">Contoh: 140 cm</small>
                    </div>
                    <div class="mb-3">
                        <label>Berat Badan *</label>
                        <input name="berat_badan" type="text" class="form-control"  value="{{ $form_2 ? $form_2['berat_badan'] : '' }}">
                        <small class="form-text text-muted">Contoh: 40 kg</small>
                    </div>
                </div>
                <div class="card-body {{ isset($page) ? $page != 3 ? 'd-none' : '' : ''}}">
                    <h4>Keterangan Pendidikan</h4>
                    <hr>
                    <div class="mb-3">
                        <label>NISN</label>
                        <input value="{{ $form_3 ? $form_3['nisn'] : '' }}" name="nisn" type="text" class="form-control">
                        <small class="form-text text-muted">Masukkan Nomor Induk Siswa Nasional (NISN) - Silakan dilewati apabila anda tidak mengetahui.</small>
                    </div>
                    <div class="mb-3">
                        <label>Sekolah Asal *</label>
                        <input value="{{ $form_3 ? $form_3['sekolah_asal'] : '' }}" name="sekolah_asal" type="text" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label>Alamat Lengkap *</label>
                        <div class="row mb-3">
                            <div class="col">
                                <input value="{{ $form_3 ? $form_3['alamat_sekolah_1'] : '' }}" name="alamat_sekolah_1" type="text" class="form-control" placeholder="Alamat 1" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input value="{{ $form_3 ? $form_3['alamat_sekolah_2'] : '' }}" name="alamat_sekolah_2" type="text" class="form-control" placeholder="Alamat 2" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input value="{{ $form_3 ? $form_3['kota_sekolah'] : '' }}" name="kota_sekolah" type="text" class="form-control" placeholder="Kota" >
                            </div>
                            <div class="col">
                                <input value="{{ $form_3 ? $form_3['provinsi_sekolah'] : '' }}" name="provinsi_sekolah" type="text" class="form-control" placeholder="Daerah / Provinsi" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input value="{{ $form_3 ? $form_3['kode_pos_sekolah'] : '' }}" name="kode_pos_sekolah" type="text" class="form-control" placeholder="Kode Pos" >
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>No. Telepon Sekolah Asal *</label>
                            <input value="{{ $form_3 ? $form_3['no_telp_sekolah'] : '' }}" name="no_telp_sekolah" type="text" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label>Nilai UASBN</label>
                            <input value="{{ $form_3 ? $form_3['nilai_uasbn'] : '' }}" name="nilai_uasbn" type="text" class="form-control">
                            <small class="form-text text-muted">Jika Belum ada ketik "belum ada"</small>
                        </div>
                        <div class="mb-3">
                            <label>Matematika</label>
                            <input value="{{ $form_3 ? $form_3['matematika'] : '' }}" name="matematika" type="text" class="form-control">
                            <small class="form-text text-muted">Jika Belum ada ketik "belum ada"</small>
                        </div>
                        <div class="mb-3">
                            <label>Bahasa Indonesia</label>
                            <input value="{{ $form_3 ? $form_3['bahasa_indonesia'] : '' }}" name="bahasa_indonesia" type="text" class="form-control">
                            <small class="form-text text-muted">Jika Belum ada ketik "belum ada"</small>
                        </div>
                        <div class="mb-3">
                            <label>IPA</label>
                            <input value="{{ $form_3 ? $form_3['ipa'] : '' }}" name="ipa" type="text" class="form-control">
                            <small class="form-text text-muted">Jika Belum ada ketik "belum ada"</small>
                        </div>
                        <div class="mb-3">
                            <label>No. STTB (Ijazah)</label>
                            <input value="{{ $form_3 ? $form_3['no_sttb'] : '' }}" name="no_sttb" type="text" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label>Prestasi yang Pernah Diraih</label>
                            <textarea name="prestasi" id="" class="form-control">{{ $form_3 ? $form_3['prestasi'] : '' }}</textarea>
                            <small class="form-text text-muted">Contoh: Olimpiade Matematika Nasional / Tahun 2014 / Juara 1</small>
                        </div>
                    </div>
                </div>
                <div class="card-body {{ isset($page) ? $page != 4 ? 'd-none' : '' : ''}}">
                    <h4>Keterangan Ayah</h4>
                    <hr>
                    <div class="mb-3">
                        <label>Nama Lengkap Ayah *</label>
                        <input name="nama_lengkap_ayah" type="text" class="form-control" placeholder="Nama Lengkap"  value="{{ $form_4 ? $form_4['nama_lengkap_ayah'] : '' }}">
                    </div>
                    <div class="mb-3">
                        <label>Tempat Lahir Ayah *</label>
                        <input name="tempat_lahir_ayah" type="text" class="form-control"  value="{{ $form_4 ? $form_4['tempat_lahir_ayah'] : '' }}">
                    </div>
                    <div class="mb-3">
                        <label>Tanggal Lahir Ayah *</label>
                        <input name="tanggal_lahir_ayah" type="date" class="form-control"  value="{{ $form_4 ? $form_4['tanggal_lahir_ayah'] : '' }}">
                    </div>
                    <div class="mb-3">
                        <label>Agama Ayah *</label>
                        <input name="agama_ayah" type="text" class="form-control"  value="{{ $form_4 ? $form_4['agama_ayah'] : '' }}">
                    </div>
                    <div class="mb-3">
                        <label>Kewarganegaraan Ayah *</label>
                        <select name="kewarganegaraan_ayah" id="" class="form-select">
                            <option value="">-- Pilih Opsi --</option>
                            <option {{ $form_4 ? $form_4['kewarganegaraan_ayah'] == 'WNI' ? 'selected' : '' : '' }}>WNI</option>
                            <option {{ $form_4 ? $form_4['kewarganegaraan_ayah'] == 'WNA' ? 'selected' : '' : '' }}>WNA</option>
                            <option {{ $form_4 ? $form_4['kewarganegaraan_ayah'] == 'Lain-lain' ? 'selected' : '' : '' }}>Lain-lain</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>No HP Ayah *</label>
                        <input name="no_hp_ayah" type="number" class="form-control"  value="{{ $form_4 ? $form_4['no_hp_ayah'] : '' }}">
                    </div>
                    <div class="mb-3">
                        <label>Alamat Email Ayah *</label>
                        <input name="email_ayah" type="email" class="form-control"  value="{{ $form_4 ? $form_4['email_ayah'] : '' }}">
                    </div>
                    <div class="mb-3">
                        <label>Masih Hidup (Ayah) *</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="masih_hidup_ayah" value="Ya" {{ $form_4 ? $form_4['masih_hidup_ayah'] == 'Ya' ? 'checked' : '' : '' }}>
                            <label class="form-check-label">
                              Ya
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="masih_hidup_ayah" value="Meninggal" {{ $form_4 ? $form_4['masih_hidup_ayah'] == 'Meninggal' ? 'checked' : '' : '' }}>
                            <label class="form-check-label">
                              Meninggal
                            </label>
                          </div>
                    </div>

                    <h4>Keterangan Ibu</h4>
                    <hr>
                    <div class="mb-3">
                        <label>Nama Lengkap Ibu *</label>
                        <input name="nama_lengkap_ibu" type="text" class="form-control" placeholder="Nama Lengkap"  value="{{ $form_4 ? $form_4['nama_lengkap_ibu'] : '' }}">
                    </div>
                    <div class="mb-3">
                        <label>Tempat Lahir Ibu *</label>
                        <input name="tempat_lahir_ibu" type="text" class="form-control"  value="{{ $form_4 ? $form_4['tempat_lahir_ibu'] : '' }}">
                    </div>
                    <div class="mb-3">
                        <label>Tanggal Lahir Ibu *</label>
                        <input name="tanggal_lahir_ibu" type="date" class="form-control"  value="{{ $form_4 ? $form_4['tanggal_lahir_ibu'] : '' }}">
                    </div>
                    <div class="mb-3">
                        <label>Agama Ibu *</label>
                        <input name="agama_ibu" type="text" class="form-control"  value="{{ $form_4 ? $form_4['agama_ibu'] : '' }}">
                    </div>
                    <div class="mb-3">
                        <label>Kewarganegaraan Ibu *</label>
                        <select name="kewarganegaraan_ibu" id="" class="form-select">
                            <option value="">-- Pilih Opsi --</option>
                            <option {{ $form_4 ? $form_4['kewarganegaraan_ibu'] == 'WNI' ? 'selected' : '' : '' }}>WNI</option>
                            <option {{ $form_4 ? $form_4['kewarganegaraan_ibu'] == 'WNA' ? 'selected' : '' : '' }}>WNA</option>
                            <option {{ $form_4 ? $form_4['kewarganegaraan_ibu'] == 'Lain-lain' ? 'selected' : '' : '' }}>Lain-lain</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>No HP Ibu *</label>
                        <input name="no_hp_ibu" type="number" class="form-control"  value="{{ $form_4 ? $form_4['no_hp_ibu'] : '' }}">
                    </div>
                    <div class="mb-3">
                        <label>Alamat Email Ibu *</label>
                        <input name="alamat_email_ibu" type="email" class="form-control"  value="{{ $form_4 ? $form_4['alamat_email_ibu'] : '' }}">
                    </div>
                    <div class="mb-3">
                        <label>Masih Hidup (Ibu) *</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="masih_hidup_ibu" value="Ya" {{ $form_4 ? $form_4['masih_hidup_ibu'] == 'Ya' ? 'checked' : '' : '' }}>
                            <label class="form-check-label">
                              Ya
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="masih_hidup_ibu" value="Meninggal" {{ $form_4 ? $form_4['masih_hidup_ibu'] == 'Meninggal' ? 'checked' : '' : '' }}>
                            <label class="form-check-label">
                              Meninggal
                            </label>
                          </div>
                    </div>
                    
                    <h4>Keterangan Wali</h4>
                    <hr>
                    <div class="mb-3">
                        <label>Tempat Lahir Wali</label>
                        <input name="tempat_lahir_wali" type="text" class="form-control" value="{{ $form_4 ? $form_4['tempat_lahir_wali'] : '' }}">
                        <small class="form-text text-muted">isi Kolom ini apabila anda bukan orang tua Siswa. lewatkan kolom ini apabila anda adalah orang tua siswa.</small>
                    </div>
                    <div class="mb-3">
                        <label>Tanggal Lahir Wali</label>
                        <input name="tanggal_lahir_wali" type="date" class="form-control" value="{{ $form_4 ? $form_4['tanggal_lahir_wali'] : '' }}">
                    </div>
                    <div class="mb-3">
                        <label>Agama Wali</label>
                        <input name="agama_wali" type="text" class="form-control" value="{{ $form_4 ? $form_4['agama_wali'] : '' }}">
                    </div>
                    <div class="mb-3">
                        <label>Kewarganegaraan Wali</label>
                        <select name="kewarganegaraan_wali" id="" class="form-select" value="{{ $form_4 ? $form_4['kewarganegaraan_wali'] : '' }}">
                            <option value="">-- Pilih Opsi --</option>
                            <option {{ $form_4 ? $form_4['kewarganegaraan_wali'] == 'WNI' ? 'selected' : '' : '' }}>WNI</option>
                            <option {{ $form_4 ? $form_4['kewarganegaraan_wali'] == 'WNA' ? 'selected' : '' : '' }}>WNA</option>
                            <option {{ $form_4 ? $form_4['kewarganegaraan_wali'] == 'Lain-lain' ? 'selected' : '' : '' }}>Lain-lain</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Pendidikan Terakhir Wali</label>
                        <select name="pendidikan_terakhir_wali" id="" class="form-select" value="{{ $form_4 ? $form_4['pendidikan_terakhir_wali'] : '' }}">
                            <option value="">-- Pilih Opsi --</option>
                            <option {{ $form_4 ? $form_4['pendidikan_terakhir_wali'] == 'SD' ? 'selected' : '' : '' }}>SD</option>
                            <option {{ $form_4 ? $form_4['pendidikan_terakhir_wali'] == 'SMP' ? 'selected' : '' : '' }}>SMP</option>
                            <option {{ $form_4 ? $form_4['pendidikan_terakhir_wali'] == 'SMA' ? 'selected' : '' : '' }}>SMA</option>
                            <option {{ $form_4 ? $form_4['pendidikan_terakhir_wali'] == 'D I' ? 'selected' : '' : '' }}>D I</option>
                            <option {{ $form_4 ? $form_4['pendidikan_terakhir_wali'] == 'D II' ? 'selected' : '' : '' }}>D II</option>
                            <option {{ $form_4 ? $form_4['pendidikan_terakhir_wali'] == 'D III' ? 'selected' : '' : '' }}>D III</option>
                            <option {{ $form_4 ? $form_4['pendidikan_terakhir_wali'] == 'D IV / S - 1' ? 'selected' : '' : '' }}>D IV / S - 1</option>
                            <option {{ $form_4 ? $form_4['pendidikan_terakhir_wali'] == 'S - 2' ? 'selected' : '' : '' }}>S - 2</option>
                            <option {{ $form_4 ? $form_4['pendidikan_terakhir_wali'] == 'S - 3' ? 'selected' : '' : '' }}>S - 3</option>
                            <option {{ $form_4 ? $form_4['pendidikan_terakhir_wali'] == 'Lainnya' ? 'selected' : '' : '' }}>Lainnya</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>No HP Wali</label>
                        <input name="no_hp_wali" type="number" class="form-control" value="{{ $form_4 ? $form_4['no_hp_wali'] : '' }}">
                    </div>
                    <div class="mb-3">
                        <label>Alamat Email Wali</label>
                        <input name="email_wali" type="email" class="form-control" value="{{ $form_4 ? $form_4['email_wali'] : '' }}">
                    </div>
                    <div class="mb-3">
                        <label>Pekerjaan Wali</label>
                        <input name="pekerjaan_wali" type="text" class="form-control" value="{{ $form_4 ? $form_4['pekerjaan_wali'] : '' }}">
                        <small class="form-text text-muted">Contoh: Swasta / Azhari Islamic School / Staff Marketing (Kategori Pekerjaan / Instansi / Jabatan)</small>
                    </div>
                    <div class="mb-3">
                        <label>Hubungan calon siswa dengan Wali</label>
                        <select name="hubungan_wali" id="" class="form-select" value="{{ $form_4 ? $form_4['hubungan_wali'] : '' }}">
                            <option value="">-- Pilih Opsi --</option>
                            <option {{ $form_4 ? $form_4['hubungan_wali'] == 'Anak Tiri' ? 'selected' : '' : '' }}>Anak Tiri</option>
                            <option {{ $form_4 ? $form_4['hubungan_wali'] == 'Anak Angkat' ? 'selected' : '' : '' }}>Anak Angkat</option>
                            <option {{ $form_4 ? $form_4['hubungan_wali'] == 'Keponakan' ? 'selected' : '' : '' }}>Keponakan</option>
                            <option {{ $form_4 ? $form_4['hubungan_wali'] == 'Sepupu' ? 'selected' : '' : '' }}>Sepupu</option>
                            <option {{ $form_4 ? $form_4['hubungan_wali'] == 'Lainnya' ? 'selected' : '' : '' }}>Lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="card-body {{ isset($page) ? $page != 5 ? 'd-none' : '' : ''}}">
                    <h4>Keterangan Tambahan</h4>
                    <hr>
                    <div class="mb-3">
                        <label>Dalam Keadaan Darurat No. Telp yang dapat Dihubungi *</label>
                        <input name="no_telp_darurat" type="text" class="form-control" value="{{ $form_5 ? $form_5['no_telp_darurat'] : '' }}">
                    </div>
                    <div class="mb-3">
                        <label>Nama *</label>
                        <input name="nama_darurat" type="text" class="form-control" value="{{ $form_5 ? $form_5['nama_darurat'] : '' }}">
                    </div>
                    <div class="mb-3">
                        <label>Hubungan calon siswa dengan nama diatas *</label>
                        <input name="hubungan_darurat" type="text" class="form-control" value="{{ $form_5 ? $form_5['hubungan_darurat'] : '' }}">
                    </div>
                    <h4>Selesaikan Tahap pendaftaran Online dengan membayar formulir pendafaran online Melalui Bank Transfer.</h4>
                    <small class="form-text text-muted">Informasi biaya formulir online dan Rekening Tujuan Transfer akan kami kirim via email yang terdaftar dalam form isian dalam waktu paling lambat 1x24 Jam pada jam operasional 08.00-16.00 WIB.</small>
                </div>
                <div class="card-footer">
                    <div class="d-grid gap-2">
                        <div class="btn-group">
                            <a href="{{ route('goToPage', $page - 1) }}" class="btn btn-info {{ isset($page) ? $page < 2 ? 'd-none' : '' : '' }}">Previous</a>
                            <button formaction="{{ route('store') }}" type="submit" class="btn btn-primary {{ isset($page) ? $page >= 5 ? 'd-none' : '' : '' }}">Next</button>
                            <button formaction="{{ route('submitForm') }}" type="submit" class="btn btn-success {{ isset($page) ? $page < 5 ? 'd-none' : '' : '' }}">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
      </div>

@endsection