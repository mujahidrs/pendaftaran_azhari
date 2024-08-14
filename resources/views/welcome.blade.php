<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <div class="container py-3">
        <div class="card">
            <div class="card-header">
                <h3>Form Pendaftaran Murid Baru</h3>
                <span>Isi Form Online dengan sebenar-benarnya</span>
                <div class="progress my-3" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 20%">20%</div>
                </div>
            </div>
            <form action="">
                <div class="card-body">
                    <h4>Pendaftaran Murid Baru 2024/2025</h4>
                    <small>Form ini merupakan Form Pendaftaran untuk Murid kelas 7 SMP yang akan memulai Tahun Pelajaran pada Bulan Juli Tahun 2024</small>
                    <hr>
                    <div class="mb3">
                        <label for="">Darimanakah Bapak/Ibu Mengetahui Sekolah Azhari Islamic School Lebak Bulus Jakarta? *</label>
                        <select name="" id="" class="form-select" required>
                            <option value="">-- Pilih Opsi --</option>
                            <option>Keluarga</option>
                            <option>Teman/Kenalan</option>
                            <option>Website</option>
                            <option>IG</option>
                            <option>FB</option>
                            <option>Spanduk/Baliho</option>
                            <option>Brosur Cetak</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">
                            Sebutkan nama Bapak/Ibu yang memberikan rekomendasi kepada Saudara sehingga Saudara mendaftar di Azhari Lebak Bulus Jakarta
                        </label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Tahun Pelajaran *</label>
                        <input type="text" class="form-control" required maxlength="10">
                        <small id="tahunPelajaranHelp" class="form-text text-muted">Contoh: 2024/2025</small>
                    </div>
                    <div class="mb-3">
                        <label for="">Jenjang Yang Diminati *</label>
                        <select name="" id="" class="form-select">
                            <option value="">-- Pilih Opsi --</option>
                            <option value="">SD</option>
                            <option value="">SMP</option>
                            <option value="">SMA</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-warning">
                            Next
                        </button>
                    </div>
                </div>
            </form>
            <form action="">
                <div class="card-body">
                    <h4>Data Calon Murid</h4>
                    <hr>
                    <div class="mb-3">
                        <label for="">Nama Lengkap *</label>
                        <input type="text" class="form-control" placeholder="Nama Lengkap" required>
                        <small>Masukkan Nama Lengkap Murid / Peserta PMB</small>
                    </div>
                    <div class="mb-3">
                        <label for="">Nama Panggilan *</label>
                        <input type="text" class="form-control" placeholder="Nama Panggilan" required>
                        <small>Masukkan Nama Panggilan Siswa / Peserta PMB</small>
                    </div>
                    <div class="mb-3">
                        <label for="">Nomor Kartu Keluarga *</label>
                        <input type="text" class="form-control" required>
                        <small>Masukkan Nomor Kartu Keluarga (KK) terdapat di bagian atas Kartu Keluarga (KK)</small>
                    </div>
                    <div class="mb-3">
                        <label for="">NIK *</label>
                        <input type="text" class="form-control" required>
                        <small>Masukkan Nomor Induk Kependudukan Calon Siswa</small>
                    </div>
                    <div class="mb-3">
                        <label for="">Jenis Kelamin *</label>
                        <select name="" id="" class="form-select" required>
                            <option value="">-- Pilih Opsi --</option>
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Tempat Lahir *</label>
                        <input type="text" class="form-control" required>
                        <small>Masukkan Tempat Lahir Siswa/Peserta PSB</small>
                    </div>
                    <div class="mb-3">
                        <label for="">Tanggal Lahir *</label>
                        <input type="date" name="" id="" class="form-control" required>
                        <small>Masukkan Tanggal Lahir Siswa/Peserta PSB</small>
                    </div>
                    <div class="mb-3">
                        <label for="">Anak ke *</label>
                        <input type="text" class="form-control" maxlength="20" required>
                        <small>Contoh: 1 dari 2 bersaudara</small>
                    </div>
                    <div class="mb-3">
                        <label for="">Alamat Lengkap *</label>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Alamat 1" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Kota" required>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Daerah / Provinsi" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Kode Pos" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="">Agama *</label>
                        <input type="text" class="form-control" required>
                        <small>Contoh: Islam/Protestan/Katolik/dsb</small>
                    </div>
                    <div class="mb-3">
                        <label for="">Golongan Darah *</label>
                        <select name="" id="" class="form-select" required>
                            <option value="">-- Pilih Opsi --</option>
                            <option>A</option>
                            <option>B</option>
                            <option>O</option>
                            <option>AB</option>
                            <option>Tidak tahu</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Penyakit yang Pernah Diderita</label>
                        <textarea name="" id="" class="form-control"></textarea>
                        <small>Contoh: 1. Asma / Tahun 2015 / Sudah Sembuh</small>
                    </div>
                    <div class="mb-3">
                        <label for="">Kelainan Jasmani</label>
                        <input type="text" class="form-control">
                        <small>Contoh: Membutuhkan kursi roda, dsb</small>
                    </div>
                    <div class="mb-3">
                        <label for="">Tinggi Badan *</label>
                        <input type="text" class="form-control" required>
                        <small>Contoh: 140 cm</small>
                    </div>
                    <div class="mb-3">
                        <label for="">Berat Badan *</label>
                        <input type="text" class="form-control" required>
                        <small>Contoh: 40 kg</small>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-grid gap-2">
                        <div class="btn-group">
                            <button class="btn btn-info">Previous</button>
                            <button class="btn btn-warning">Next</button>
                        </div>
                    </div>
                </div>
            </form>
            <form action="">
                <div class="card-body">
                    <h4>Keterangan Pendidikan</h4>
                    <hr>
                    <div class="mb-3">
                        <label for="">NISN</label>
                        <input type="text" class="form-control">
                        <small>Masukkan Nomor Induk Siswa Nasional (NISN) - Silakan dilewati apabila anda tidak mengetahui.</small>
                    </div>
                    <div class="mb-3">
                        <label for="">Sekolah Asal *</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Alamat Lengkap *</label>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Alamat 1" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Alamat 2" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Kota" required>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Daerah / Provinsi" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Kode Pos" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="">No. Telepon Sekolah Asal *</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Nilai UASBN</label>
                            <input type="text" class="form-control">
                            <small>Jika Belum ada ketik "belum ada"</small>
                        </div>
                        <div class="mb-3">
                            <label for="">Matematika</label>
                            <input type="text" class="form-control">
                            <small>Jika Belum ada ketik "belum ada"</small>
                        </div>
                        <div class="mb-3">
                            <label for="">Bahasa Indonesia</label>
                            <input type="text" class="form-control">
                            <small>Jika Belum ada ketik "belum ada"</small>
                        </div>
                        <div class="mb-3">
                            <label for="">IPA</label>
                            <input type="text" class="form-control">
                            <small>Jika Belum ada ketik "belum ada"</small>
                        </div>
                        <div class="mb-3">
                            <label for="">No. STTB (Ijazah)</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Prestasi yang Pernah Diraih</label>
                            <textarea name="" id="" class="form-control"></textarea>
                            <small>Contoh: Olimpiade Matematika Nasional / Tahun 2014 / Juara 1</small>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-grid gap-2">
                        <div class="btn-group">
                            <button class="btn btn-info">Previous</button>
                            <button class="btn btn-warning">Next</button>
                        </div>
                    </div>
                </div>
            </form>
            <form action="">
                <div class="card-body">
                    <h4>Keterangan Ayah</h4>
                    <hr>
                    <div class="mb-3">
                        <label for="">Nama Lengkap Ayah *</label>
                        <input type="text" class="form-control" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Tempat Lahir Ayah *</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Tanggal Lahir Ayah *</label>
                        <input type="date" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Agama Ayah *</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Kewarganegaraan Ayah *</label>
                        <select name="" id="" class="form-select" required>
                            <option value="">-- Pilih Opsi --</option>
                            <option>WNI</option>
                            <option>WNA</option>
                            <option>Lain-lain</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">No HP Ayah *</label>
                        <input type="number" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Alamat Email Ayah *</label>
                        <input type="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Masih Hidup (Ayah) *</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio">
                            <label class="form-check-label">
                              Ya
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio">
                            <label class="form-check-label">
                              Meninggal
                            </label>
                          </div>
                    </div>

                    <h4>Keterangan Ibu</h4>
                    <hr>
                    <div class="mb-3">
                        <label for="">Nama Lengkap Ibu *</label>
                        <input type="text" class="form-control" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Tempat Lahir Ibu *</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Tanggal Lahir Ibu *</label>
                        <input type="date" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Agama Ibu *</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Kewarganegaraan Ibu *</label>
                        <select name="" id="" class="form-select" required>
                            <option value="">-- Pilih Opsi --</option>
                            <option>WNI</option>
                            <option>WNA</option>
                            <option>Lain-lain</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">No HP Ibu *</label>
                        <input type="number" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Alamat Email Ibu *</label>
                        <input type="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Masih Hidup (Ibu) *</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio">
                            <label class="form-check-label">
                              Ya
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio">
                            <label class="form-check-label">
                              Meninggal
                            </label>
                          </div>
                    </div>
                    
                    <h4>Keterangan Wali</h4>
                    <hr>
                    <div class="mb-3">
                        <label for="">Tempat Lahir Wali</label>
                        <input type="text" class="form-control">
                        <small>isi Kolom ini apabila anda bukan orang tua Siswa. lewatkan kolom ini apabila anda adalah orang tua siswa.</small>
                    </div>
                    <div class="mb-3">
                        <label for="">Tanggal Lahir Wali</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Agama Wali</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Kewarganegaraan Wali</label>
                        <select name="" id="" class="form-select">
                            <option value="">-- Pilih Opsi --</option>
                            <option>WNI</option>
                            <option>WNA</option>
                            <option>Lain-lain</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">No HP Wali</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Alamat Email Wali</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Pekerjaan Wali</label>
                        <input type="text" class="form-control">
                        <small>Contoh: Swasta / Azhari Islamic School / Staff Marketing (Kategori Pekerjaan / Instansi / Jabatan)</small>
                    </div>
                    <div class="mb-3">
                        <label for="">Masih Hidup (Wali)</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio">
                            <label class="form-check-label">
                              Ya
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio">
                            <label class="form-check-label">
                              Meninggal
                            </label>
                          </div>
                    </div>
                    <div class="mb-3">
                        <select name="" id="" class="form-select">
                            <option value="">-- Pilih Opsi --</option>
                            <option>Anak Tiri</option>
                            <option>Anak Angkat</option>
                            <option>Keponakan</option>
                            <option>Sepupu</option>
                            <option>Lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-grid gap-2">
                        <div class="btn-group">
                            <button class="btn btn-info">Previous</button>
                            <button class="btn btn-warning">Next</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>