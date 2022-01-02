<?php
require 'sessionchecker_pengguna.php';
?>

<doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/pengajuansewastyles.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    
    <title>RENTS | Sewa Fasilitas Kampus Online</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row min-vh-100 flex-column flex-md-row">
            <aside class="col-12 col-md-3 col-xl-2 p-0 bg-dark flex-shrink-1">
                <nav class="navbar navbar-expand-md navbar-dark bd-dark flex-md-column flex-row align-items-left py-2 text-left sticky-top" id="sidebar">
                    <div class="text-center p-3">
                        <img src="../img/logo.png" alt="profil" class="img-fluid rounded-circle my-4 p-1 d-none d-md-block shadow">
                        <a href="" class="navbar-brand mx-0 font-weight-bold text-nowrap"></a>
                    </div>
                    <button type="button" class="navbar-toggler border-0 order-1" data-mdb-toggle="collapse" data-mdb-target="#nav" aria-controls="n av" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse prder-last" id="nav">
                        <ul class="navbar-nav flex-column w-100 justify-content-left">
                            <li class="nav-item">
                                <a class="nav-link" href="main_pengguna.php"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#"><i class="fas fa-shopping-bag" aria-hidden="true"></i>&nbsp; Pengajuan Sewa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="riwayatpengajuan.php"><i class="fas fa-history" aria-hidden="true"></i>&nbsp; Riwayat Pengajuan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="informasisewa.php"><i class="fas fa-info-circle" aria-hidden="true"></i>&nbsp; Informasi Sewa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="bantuan.php"><i class="fas fa-question-circle" aria-hidden="true"></i>&nbsp; Bantuan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="keluar_pengguna.php"><i class="fas fa-sign-out-alt" aria-hidden="true"></i>&nbsp; Keluar</a>
                            </li>
                        </ul>
                    </div>

                </nav>

            </aside>
            <main class="col px-0 flex-grow-1">
                <div class="container py-3">
                    <article>
                        <div class="container-lg" style="background-color: #e3f2fd;">
                            <h1 class="font-weight-light" style="text-align: center;">Formulir Penyewaan Fasilitas Kampus </h1>
                        </div>
                    </article>
                    <div class="container" style="margin-top: 35px;">
  
                        <form action="tambah_sewa.php" method="post" class="needs-validation" novalidate>
                            <div class="form-group" style="margin-top: 15px;">
                                <label for="nama_fasilitas">Fasilitas:</label>
                                <select class="form-control" id="nama_fasilitas" placeholder="--- Pilih Fasilitas ---" name="nama_fasilitas" required>
                                    <option value="">--- Pilih Fasilitas ---</option>
                                    <option value="Gedung Olahraga">Gedung Olahraga</option>
                                    <option value="Auditorium">Auditorium</option>
                                    <option value="Lapangan Sepak Bola">Lapangan Sepak Bola</option>
                                    <option value="Rusunawa Kampus">Rusunawa Kampus</option>
                                </select>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group" style="margin-top: 15px;">
                                <label for="no_telp">Nomor Telepon:</label>
                                 <input id="no_telp" class="form-control" type="text" name="no_telp" placeholder="" onkeypress="return hanyaAngka(event)" required>
                                <!-- <div class="valid-feedback">Valid.</div> -->
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group" style="margin-top: 15px;">
                                <label for="nama_penyewa">Nama Lengkap:</label>
                                <input type="text" class="form-control" id="nama_penyewa" placeholder="" name="nama_penyewa" required>
                                <!-- <div class="valid-feedback">Valid.</div> -->
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>

                            <div class="form-group" style="margin-top: 15px;">
                            <label for="tanggal">tanggal:</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                            <div class="invalid-feedback">Please fill out this field.</div>
                           

                            <div class="form-group" style="margin-top: 15px">
                                <label for="hari">Durasi Sewa:</label>
                                <select class="form-control" id="hari" placeholder="--- Pilih Fasilitas ---" name="hari" required>
                                    <option value="">Lama Penyewaan</option>
                                    <option value="1">1 Hari</option>
                                    <option value="2">2 Hari</option>
                                    <option value="3">3 Hari</option>
                                    <option value="4">4 Hari</option>
                                    <option value="5">5 Hari</option>
                                </select>
                            </div>
                            <div class="form-group form-check" style="margin-top: 15px">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember" required> Dengan ini saya selaku pengguna/penyewa fasilitas, mengerti dan paham terkait setiap kebijakan penyewaan fasilitas yang berlaku dan mengaku siap untuk pertanggung jawaban.
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Check this checkbox to continue.</div>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary" style="margin-top: 15px">Submit</button>
                        </form>
                    </div>

                </div>
        </div>
        </main>
    </div>
    <script>
        function hanyaAngka(event) {
            var no_telp = (event.which) ? event.which : event.keyCode
            if (no_telp != 46 && no_telp > 31 && (no_telp < 48 || no_telp > 57))
                return false;
            return true;
        }
    </script>
    <script >
        // Disable form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Get the forms we want to add validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>