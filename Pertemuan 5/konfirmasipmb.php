<!DOCTYPE html>
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

    <title>Konfirmasi Pendaftaran</title>
  </head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
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
    	<p class="fs-3 fw-bold" style="margin-top: 15px;">Konfirmasi Pendaftaran</p>
            <hr>
    	<?php 
    $jalurPenerimaanMahasiswa = $_POST["jalurPenerimaanMahasiswa"];
    $namaLengkap = $_POST["namalengkap"];
    $nik = $_POST["nik"];
    $alamat = $_POST["alamat"];
    $ttl = $_POST["ttl"];
    $kodepos = $_POST["kodepos"];
    $noHp = $_POST["noHp"];
    $email = $_POST["email"];
    $asalSekolah = $_POST["asalSekolah"];
    $kotaSekolah = $_POST["kotaSekolah"];
    $provinsiSekolah = $_POST["provinsiSekolah"];
    $jurusanSekolah = $_POST["jurusanSekolah"];
    $tahunLulus = $_POST["tahunLulus"];
    $biayaKuliah = $_POST["biayaKuliah"];
    $pendidikanTerakhirAyah = $_POST["pendidikanTerakhirAyah"];
    $pendidikanTerakhirIbu = $_POST["pendidikanTerakhirIbu"];
    $statusAyah = $_POST["statusAyah"];
    $statusIbu = $_POST["statusIbu"];
    $pekerjaanAyah = $_POST["pekerjaanAyah"];
    $pekerjaanIbu = $_POST["pekerjaanIbu"];
    $penghasilanAyah = $_POST["penghasilanAyah"];
    $penghasilanIbu = $_POST["penghasilanIbu"];
    $pilihanProgramStudi = $_POST["pilihanProgramStudi"];
  	$namaPerekomendasi = $_POST["namaPerekomendasi"];
    
    


    echo "Jalur Penerimaan Mahasiswa : " .$jalurPenerimaanMahasiswa."<br>";
    echo "nama lengkap : ".$namaLengkap."<br>";
    echo "tanggal lahir : ".$ttl."<br>";
    echo "nik : ".$nik."<br>";
    echo "alamat : ".$alamat."<br>";
    echo "Kode Pos : ".$kodepos."<br>";
    echo "No Handphone : ".$noHp."<br>";
    echo "email : ".$email."<br><br>";

    echo "<h2>DATA SEKOLAH ASAL CALON MAHASISWA</h2>";
    echo "asal Sekolah : ".$asalSekolah."<br>";
    echo "Kota Asal Sekolah : ".$kotaSekolah."<br>";
    echo "Provinsi Sekolah : ".$provinsiSekolah."<br>";
    echo "Jurusan Sekolah : ".$jurusanSekolah."<br>";
    echo "tahun Lulus : ".$tahunLulus."<br>";
    echo "biayaKuliah : ".$biayaKuliah."<br>";

    echo "<h2>DATA ORANG TUA CALON MAHASISWA</h2>";
    echo "Pendidikan Terakhir Ayah : ".$pendidikanTerakhirAyah."<br>";
    echo "Pendidikan Terakhir Ibu : ".$pendidikanTerakhirIbu."<br>";
    echo "Status Ayah : ".$statusAyah."<br>";
    echo "Status Ibu : ".$statusIbu."<br>";
    echo "Pekerjaan Ayah : ".$pekerjaanAyah."<br>";
    echo "pekerjaan Ibu : ".$pekerjaanIbu."<br>";
    echo "penghasilan Ayah : ".$penghasilanAyah."<br>";
    echo "penghasilan Ibu : ".$penghasilanIbu."<br>";
    echo "Pilihan Program Studi : ".$pilihanProgramStudi."<br>";
    echo "Nama Perekomendasi : ".$namaPerekomendasi."<br><br><br><br><br>";

    ?>
    </div>

</body>



</html>
