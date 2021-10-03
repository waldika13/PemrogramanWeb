<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 

    <title>Form Pendaftaran Online</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="logo.png" alt="" width="30" height="24" >
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#" style="margin-left: 15px">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Kerjasama</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Karir</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>
        </div>

    </nav>

<div class="container">
    <form action="konfirmasipmb.php" method="POST">
        <div class="form-group">
            <p class="fs-3 fw-bold" style="margin-top: 15px;">Pendaftaran Online</p>
            <hr>
            <label class="fw-bold lh-sm" name="jalurPenerimaanMahasiswa">Jalur Penerimaan Mahasiswa Baru *</label>

            <select class="custom-select mb-3" name="jalurPenerimaanMahasiswa" id="jalurPenerimaanMahasiswa">
                <option selected>-- Pilih Jalur Penerimaan --</option>
                <option value="Tahun akademik 2022/2023 Jalur Undangan">Tahun akademik 2022/2023 Jalur Undangan</option>
                <option value="Tahun akademik 2022/2023 Jalur Seleksi Rata-rata Rapor">Tahun akademik 2022/2023 Jalur Seleksi Rata-rata Rapor</option>
                <option value="Tahun akademik 2022/2023 Jalur Seleksi Peringkat Kelas">Tahun akademik 2022/2023 Jalur Seleksi Peringkat Kelas</option>
                <option value="Tahun akademik 2022/2023 Jalur Seleksi Ujian Saringan Masuk (USM)">Tahun akademik 2022/2023 Jalur Seleksi Ujian Saringan Masuk (USM)</option>
                <option value="Tahun akademik 2022/2023 Jalur Seleksi Beasiswa ASAK (Ayo Sekolah Ayo Kuliah) Khusus Yang Beragama Katholik dan Anggota ASAK">Tahun akademik 2022/2023 Jalur Seleksi Beasiswa ASAK (Ayo Sekolah Ayo Kuliah) Khusus Yang Beragama Katholik dan Anggota ASAK</option>
            </select>

            <labelclass="fw-bold lh-sm">Nama Calon Mahasiswa (Sesuai Akte Kelahiran) *</label>
            <input type="text" class="form-control mb-3" name="namalengkap" id="namalengkap" placeholder="Silahkan Masukan Nama Lengkap...">

            <div class="row">
                <div class="col">
                    <label class="fw-bold lh-sm">Tempat & Tanggal Lahir *</label>
                    <input type="text" class="form-control" name="ttl" id="ttl" placeholder="Silahkan Masukan tempat/bulan/tahun lahir...">
                </div>
                <div class="col">
                    <label name="nik" class="fw-bold lh-sm">NIK (Nomor Induk Kependudukan KTP / KK) *</label>
                    <input type="text" class="form-control mb-3" name="nik" id="nik" placeholder="Silahkan masukan Nomor Induk Kependudukan...">
                </div>
            </div>

            <label name="alamat" class="fw-bold lh-sm">Alamat *</label>
            <textarea class="form-control mb-3" name="alamat" id="alamat" placeholder="Silahkan Masukan Alamat Lengkap..."></textarea>

            <div class="row">
                <div class="col">
                    <label name="kodepos" class="fw-bold lh-sm">Kode Pos *</label>
                    <input type="text" name="kodepos"  class="form-control" id="kodepos" placeholder="Silahkan Masukan kodepos...">
                </div>
                <div class="col">
                    <label name="noHp" class="fw-bold lh-sm">No Handphone *</label>
                    <input type="text" name="noHp" class="form-control mb-3" id="noHp" placeholder="Silahkan masukan no. handphone...">
                </div>
                <div class="col">
                    <label name="email" class="fw-bold lh-sm">Email *</label>
                    <input type="text" name="email" class="form-control mb-5" id="email" placeholder="Silahkan masukan email...">
                </div>
            </div>

            <p class="fs-2 mb-3" style="margin-left: 10px;">DATA SEKOLAH ASAL CALON MAHASISWA</p> 
            <div class="row">
                <div class="col">
                    <label  class="fw-bold lh-sm">Asal Sekolah (SMA/SMK/MA) *</label>
                    <input type="text" name="asalSekolah" class="form-control" id="asalSekolah" placeholder="Silahkan Masukan asal sekolah...">
                </div>
                <div class="col">
                    <label  class="fw-bold lh-sm">Kota Sekolah *</label>
                    <input type="text" name="kotaSekolah" class="form-control mb-3" id="kotaSekolah" placeholder="Silahkan masukan kota asal sekolah...">
                </div>
                <div class="col">
                    <label class="fw-bold" >Provinsi Sekolah *</label>
                    <select class="custom-select" name="provinsiSekolah" id="provinsiSekolah">
                        <option selected>-- Pilih --</option>
                        <option value="Aceh">Aceh</option>
                        <option value="Bali">Bali</option>
                        <option value="Banten">Banten</option>
                        <option value="Bengkulu">Bengkulu</option>
                        <option value="Bogor">Bogor</option>
                        <option value="Depok">Depok</option>
                        <option value="DI Yogyakarta">DI Yogyakarta</option>
                        <option value="Jakarta Barat">Jakarta Barat</option>
                        <option value="Jakarta Pusat">Jakarta Pusat</option>
                        <option value="Jakarta Selatan">Jakarta Selatan</option>
                        <option value="Jakarta Timur">Jakarta Timur</option>
                        <option value="Jambi">Jambi</option>
                        <option value="Jawa Barat">Jawa Barat</option>
                        <option value="Jawa Tengah">Jawa Tengah</option>
                        <option value="Jawa Timur">Jawa Timur</option>
                        <option value="Kalimantan Barat">Kalimantan Barat</option>
                        <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                        <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                        <option value="Kalimantan Timur">Kalimantan Timur</option>
                        <option value="Kalimantan Utara">Kalimantan Utara</option>
                        <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                        <option value="Kepulauan Riau">Kepulauan Riau</option>
                        <option value="Lampung">Lampung</option>
                        <option value="Maluku">Maluku</option>
                        <option value="Maluku Utara">Maluku Utara</option>
                        <option value="Nusantara Tenggara Barat">Nusantara Tenggara Barat</option>
                        <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                        <option value="Papua">Papua</option>
                        <option value="Papua Barat">Papua Barat</option>
                        <option value="Riau">Riau</option>
                        <option value="Sulawesi Barat">Sulawesi Barat</option>
                        <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                        <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                        <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                        <option value="Sulawesi Utara">Sulawesi Utara</option>
                        <option value="Sumatera Barat">Sumatera Barat</option>
                        <option value="Sumatera Selatan">Sumatera Selatan</option>
                        <option value="Sumatera Utara">Sumatera Utara</option>
                        <option value="Tangerang">Tangerang</option>
                        <option value="Tangerang Selatan">Tangerang Selatan</option>
                        <option value="Bekasi">Bekasi</option>
                        <option value="Luar Negeri">Luar Negeri</option>
                    </select>
                </div>
            </div>


            <div class="row">
                <div class="col">
                    <label  class="fw-bold lh-sm">Jurusan Sekolah *</label>
                    <input type="text" name="jurusanSekolah" class="form-control" id="jurusanSekolah" placeholder="Silahkan masukan jurusan sekolah...">
                </div>
                <div class="col">
                    <label  class="fw-bold lh-sm">Tahun Lulus *</label>
                    <input type="text" name="tahunLulus" class="form-control mb-3" id="tahunLulus" placeholder="Silahkan masukan tahun lulus...">
                </div>
                <div class="col">
                    <label class="fw-bold" >Biaya kuliah dibiayai oleh *</label>
                    <select class="custom-select mb-5" name="biayaKuliah" id="biayaKuliah">
                        <option selected>-- Pilih --</option>
                        <option value="Beasiswa">Beasiswa</option>
                        <option value="Ikatan Dinas">Ikatan Dinas</option>
                        <option value="Orang Tua">Orang Tua</option>
                        <option value="Wali">Wali</option>
                        <option value="Sendiri">Sendiri</option>
                        <option value="Lain-lain">Lain-lain</option>
                    </select>
                </div>
            </div>

            <p class="fs-2 mb-3" style="margin-left: 10px;">DATA ORANG TUA CALON MAHASISWA</p>

            <div class="row">
                <div class="col">
                    <label  class="fw-bold lh-sm">Nama Ibu *</label>
                    <input type="text" name="namaIbu" class="form-control" id="namaIbu" placeholder="Silahkan masukan nama ibu...">
                </div>
                <div class="col">
                    <label  class="fw-bold lh-sm">Nama Ayah *</label>
                    <input type="text" name="namaAyah" class="form-control mb-3" id="namaAyah" placeholder="Silahkan masukan nama ayah...">
                </div>
            </div>

            <label  class="fw-bold lh-sm">Alamat *</label>
            <textarea class="form-control mb-3" name="alamatOrtu" id="alamatOrtu" placeholder="Silahkan masukan alamat lengkap..."></textarea>

            <div class="row">
                <div class="col">
                    <label  class="fw-bold lh-sm">Kode Pos *</label>
                    <input type="text" name="kodeposOrtu" class="form-control" id="kodeposOrtu" placeholder="Silahkan masukan kodepos...">
                </div>
                <div class="col">
                    <label  class="fw-bold lh-sm">No. Handphone *</label>
                    <input type="text" name="noHpOrtu" class="form-control mb-3" id="noHpOrtu" placeholder="Silahkan masukan no. handphone...">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label class="fw-bold" >Pendidikan Terakhir Ibu *</label>
                    <select class="custom-select mb-3" name="pendidikanTerakhirAyah" id="pendidikanTerakhirAyah">
                        <option selected>-- Pilih --</option>
                        <option value="A - Tidak Tamat SD">A - Tidak Tamat SD</option>
                        <option value="B - Tamat SD">B - Tamat SD</option>
                        <option value="C - Tamat SMP">C - Tamat SMP</option>
                        <option value="D - Tamat SMA">D - Tamat SMA</option>
                        <option value="E - Diploma (D1 - D2)">E - Diploma (D1 - D2)</option>
                        <option value="F - Sarjana (D3)">F - Sarjana (D3)</option>
                        <option value="G - Sarjana (D4 - S1)">G - Sarjana (D4 - S1)</option>
                        <option value="H - Pascasarjana (S2)">H - Pascasarjana (S2)</option>
                        <option value="I - Doktor (S3)">I - Doktor (S3)</option>
                    </select>
                </div>
                <div class="col">
                    <label class="fw-bold" >Pendidikan  Terakhir Ibu *</label>
                    <select class="custom-select mb-3" name="pendidikanTerakhirIbu" id="pendidikanTerakhirIbu">
                        <option selected>-- Pilih --</option>
                        <option value="A - Tidak Tamat SD">A - Tidak Tamat SD</option>
                        <option value="B - Tamat SD">B - Tamat SD</option>
                        <option value="C - Tamat SMP">C - Tamat SMP</option>
                        <option value="D - Tamat SMA">D - Tamat SMA</option>
                        <option value="E - Diploma (D1 - D2)">E - Diploma (D1 - D2)</option>
                        <option value="F - Sarjana (D3)">F - Sarjana (D3)</option>
                        <option value="G - Sarjana (D4 - S1)">G - Sarjana (D4 - S1)</option>
                        <option value="H - Pascasarjana (S2)">H - Pascasarjana (S2)</option>
                        <option value="I - Doktor (S3)">I - Doktor (S3)</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label class="fw-bold" >Status Ayah *</label>
                    <select class="custom-select mb-3" name="statusAyah" id="statusAyah">
                        <option selected>-- Pilih --</option>
                        <option value="Masih Hidup">Masih Hidup</option>
                        <option value="Sudah Meninggal">Sudah Meninggal</option>
                    </select>
                </div>
                <div class="col">
                    <label class="fw-bold" >Status Ibu *</label>
                    <select class="custom-select mb-3" name="statusIbu" id="statusIbu">
                        <option selected>-- Pilih --</option>
                        <option value="Masih Hidup">Masih Hidup</option>
                        <option value="Sudah Meninggal">Sudah Meninggal</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label class="fw-bold" >Pekerjaan Ayah *</label>
                    <select class="custom-select mb-3" name="pekerjaanAyah" id="pekerjaanAyah">
                        <option selected>-- Pilih --</option>
                        <option value="Pegawai Negri">Pegawai Negri</option>
                        <option value="TNI / POLRI">TNI / POLRI</option>
                        <option value="Pegawai Swasta">Pegawai Swasta</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                        <option value="Tidak Bekerja">Tidak Bekerja</option>
                        <option value="Pensiun">Pensiun</option>
                        <option value="Lain-lain">Lain-lain</option>
                    </select>
                </div>
                <div class="col">
                    <label class="fw-bold" >Pekerjaan Ibu *</label>
                    <select class="custom-select mb-3" name="pekerjaanIbu" id="pekerjaanIbu">
                         <option selected>-- Pilih --</option>
                        <option value="Pegawai Negri">Pegawai Negri</option>
                        <option value="TNI / POLRI">TNI / POLRI</option>
                        <option value="Pegawai Swasta">Pegawai Swasta</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                        <option value="Tidak Bekerja">Tidak Bekerja</option>
                        <option value="Pensiun">Pensiun</option>
                        <option value="Lain-lain">Lain-lain</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label class="fw-bold" >Penghasilan Ayah *</label>
                    <select class="custom-select mb-3" name="penghasilanAyah" id="penghasilanAyah">
                        <option selected>-- Pilih --</option>
                        <option value="< Rp.1.000.000">< Rp.1.000.000</option>
                        <option value="Rp.1.000.000 - Rp.5.000.000">Rp.1.000.000 - Rp.5.000.000</option>
                        <option value="Rp.5.000.000 - Rp.10.000.000">Rp.5.000.000 - Rp.10.000.000</option>
                        <option value="> Rp.10.000.000">> Rp.10.000.000</option>
                    </select>
                </div>
                <div class="col">
                    <label class="fw-bold" >Penghasilan Ibu *</label>
                    <select class="custom-select mb-5" name="penghasilanIbu" id="penghasilanIbu">
                        <option selected>-- Pilih --</option>
                        <option value="< Rp.1.000.000">< Rp.1.000.000</option>
                        <option value="Rp.1.000.000 - Rp.5.000.000">Rp.1.000.000 - Rp.5.000.000</option>
                        <option value="Rp.5.000.000 - Rp.10.000.000">Rp.5.000.000 - Rp.10.000.000</option>
                        <option value="> Rp.10.000.000">> Rp.10.000.000</option>
                    </select>
                </div>
            </div>

            <p class="fs-2 mb-3" style="margin-left: 10px;">PEMINATAN PROGRAM STUDI</p>

            <div class="row">
                <div class="col-6">
                    <label class="fw-bold" >Pilihan Program Studi *</label>
                    <select class="custom-select mb-5" name="pilihanProgramStudi" id="pilihanProgramStudi">
                        <option selected>-- Pilih --</option>
                        <option value="Akuntansi">Akuntansi</option>
                        <option value="Manajemen">Manajemen</option>
                        <option value="Psikologi">Psikologi</option>
                        <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                        <option value="Desain Produk">Desain Produk</option>
                        <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                        <option value="Informatika">Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Sipil">Teknik Sipil</option>
                        <option value="Arsitektur">Arsitektur</option>
                    </select>
                </div> 
            </div>

            <p class="fw-bold">Informasi UPJ diperoleh dari: *</p>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio"  id="inlineRadio1" value="option1">
              <label class="form-check-label" name="inlineRadio1">Website</label>
            </div>
            <div class="form-check form-check-inline" style="margin-left: 10%;">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option1">
              <label class="form-check-label" name="inlineRadio2">Sekolah</label>
            </div><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option1">
              <label class="form-check-label" name="inlineRadio3">Instagram</label>
            </div>
            <div class="form-check form-check-inline" style="margin-left: 8.7%;">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option1">
              <label class="form-check-label" name="inlineRadio4">Event Education Expo</label>
            </div><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option1">
              <label class="form-check-label" name="inlineRadio5">Facebook</label>
            </div>
            <div class="form-check form-check-inline" style="margin-left: 9%;">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio6" value="option1">
              <label class="form-check-label" name="inlineRadio6">Keluarga/Teman</label>
            </div><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio7" value="option1">
              <label class="form-check-label" name="inlineRadio7">Brosur dan Flyer UPJ</label>
            </div>
            <div class="form-check form-check-inline" style="margin-left: 2.1%;">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio8" value="option1">
              <label class="form-check-label" name="inlineRadio8">E-mail Blast</label>
            </div><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio9" value="option1">
              <label class="form-check-label" name="inlineRadio9">WA Blast</label>
            </div>
            <div class="form-check form-check-inline mb-4" style="margin-left: 9.3%;">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio10" value="option1">
              <label class="form-check-label" name="inlineRadio10">Lainnya</label>
            </div><br>

            <p class="fw-bold mb-1">Direkomendasikan oleh :</p>

            <p class="fw-bold">PRODI/UNIT</p>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="prodiradios" id="prodiradios1" value="option1">
              <label class="form-check-label" name="prodiradios1">Karyawan UPJ</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="prodiradios" id="prodiradios2" value="option1">
              <label class="form-check-label" name="prodiradios2">Mahasiswa UPJ</label>
            </div>
            <div class="form-check mb-4">
              <input class="form-check-input" type="radio" name="prodiradios" id="prodiradios3" value="option1">
              <label class="form-check-label" name="prodiradios3">Guru BK/Pihak Sekolah</label>
            </div>
            
            <div class="row">
                <div class="col-6">
                    <label  class="fw-bold lh-sm">Nama Perekomendasi & No. HP</label>
                    <input type="text" name="namaPerekomendasi" class="form-control mb-4" id="namaPerekomendasi" placeholder="Nama Perekomendasi & No. HP">
                </div>
            </div>

            <p class="fs-2 mb-1">Ujian Saringan Masuk</p>
            <p class="mb-5">USM (Ujian Saringan Masuk): Jadwal dan link akan diberikan kemudian setelah proses awal pendaftaran dinyatakan memenuhi persyaratan</p>

            <div class="col-auto mb-3">
                <button type="submit" class="btn btn-primary" value="submit">Submit</button>
                <input type="reset" class="btn btn-danger" style="margin-left: 10px;" value="Reset">
            </div>

            <div class="p-3 mb-2 bg-danger text-white" style="border-radius: 5px;">* harus diisi </div>

         </div>
    </form>
</div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
 
  </body>
</html>
