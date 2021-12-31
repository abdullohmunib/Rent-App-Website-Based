<?php
require 'sessionchecker_pengguna.php';
require 'conf/connection.php';
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
                    <button type="button" class="navbar-toggler border-0 order-1" data-mdb-toggle="collapse" data-mdb-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse prder-last" id="nav">
                        <ul class="navbar-nav flex-column w-100 justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link" href="main_pengguna.php"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pengajuansewa.php"><i class="fas fa-shopping-bag" aria-hidden="true"></i>&nbsp; Pengajuan Sewa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="riwayatpengajuan.php"><i class="fas fa-history" aria-hidden="true"></i>&nbsp; Riwayat Pengajuan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="informasisewa.php"><i class="fas fa-info-circle" aria-hidden="true"></i>&nbsp; Informasi Sewa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="bantuan.php"><i class="fas fa-question-circle" aria-hidden="true"></i>&nbsp; Bantuan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="keluar_pengguna.php"><i class="fas fa-sign-out-alt" aria-hidden="true"></i>&nbsp; Keluar</a>
                            </li>
                </nav>

            </aside>
            <main class="col px-0 flex-grow-1">
                <div class="container py-3">
                    <article>
                        <div class="container-lg" style="background-color: #e3f2fd;">
                           <!--  <h1 class="font-weight-light">Formulir Penyewaan Fasilitas Kampus </h1> -->
                        </div>
                    </article>
                     <h2> Ada kendala? Beritahu kami untuk membantu Anda mengatasi kendala tersebut</h2>
                        <br>
                        <!-- Berikut ini beberapa langkah dalam pengajuan sewa fasilitas melalui website RENTS.  -->
                       <!--  <p style="text-align: justify;">Dibawah ini merupakan tangkapan layar bagaimana cara penggunaan website aplikasi penyewaan fasilitas, dimulai dari pengajuan penyewaan sampai ke status pengajuan, apakah diterima atau tidak. Perlu diketahui bahwa ada beberapa keadaan yang dimana tidak memungkinkan Anda dalam menyewa fasilitas yang Anda inginkan.</p> -->


                      <section class="">
                        <div class="container text-center text-md-start mt-5">
                            <!-- Grid row -->
                            <div class="row mt-3">
                                <!-- Grid column -->
                                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                    <!-- Content -->
                                    <h6 class="text-uppercase fw-bold mb-4">
                                        <i class="fas fa-gem me-3"></i>Rent University
                                    </h6>
                                    <p>
                                        Layanan sewa fasilitas kampus pionir, terbaik dan terjamin.
                                    </p>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                    <!-- Links -->
                                    <h6 class="text-uppercase fw-bold mb-4">
                                        Fasilitas
                                    </h6>
                                    <p>
                                        <a href="#!" style="text-decoration: none;" class="text-reset">Auditorium</a>
                                    </p>
                                    <p>
                                        <a href="#!" style="text-decoration: none;" class="text-reset">Gedung Olahraga</a>
                                    </p>
                                    <p>
                                        <a href="#!" style="text-decoration: none;" class="text-reset">Lapangan Sepak Bola</a>
                                    </p>
                                    <p>
                                        <a href="#!" style="text-decoration: none;" class="text-reset">Rusunawa Kampus</a>
                                    </p>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                    <!-- Links -->
                                    <h6 class="text-uppercase fw-bold mb-4">
                                        Kontak
                                    </h6>
                                    <p><i class="fas fa-home me-3"></i> Sleman, 88851, Yogyakarta</p>
                                    <p>
                                        <i class="fas fa-envelope me-3"></i>
                                        Rents.co.id
                                    </p>
                                    <p><i class="fas fa-phone me-3"></i>0813 9394 3333</p>
                                </div>
                            </div>
                         </div>
                    </section>
                </footer>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>