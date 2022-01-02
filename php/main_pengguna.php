<?php
require 'sessionchecker_pengguna.php';
require 'conf/connection.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/mainstyles.css" rel="stylesheet" />
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
                        <ul class="navbar-nav flex-column w-100 justify-content-left">
                            <li class="nav-item">
                                <a class="nav-link active" href="#"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Beranda</a>
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
                <header class="masthead">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12 text-center">
                                <h1 style="color: black; margin-top: -200px; background-color: white; opacity: 0.7;" >Selamat Datang di Website Penyewaan Fasilitas Kampus
                                </h1>
                            
                            </div>
                        </div>
                    </div>
                </header>
                <div class="container py-3">

                <!-- TAMBAHAN BERANDA RENTS2.3 diedit 1-7-2021 jam 1 an -->
                    <article>
                        <div class="container-lg" style="padding-top: 50px;">
                            <h1 class="font-weight-light" style="text-align: center;">Nikmati Berbagai Fasilitas Kampus Yang Dapat Disewa</h1>
                            <p style="padding-top: 10px; text-align: justify;">Berbagai fasilitas kampus disediakan untuk mendukung mahasiswa untuk mendapatkan pengalaman belajar yang terbaik
                                selama menempuh studinya di Universitas. Didukung dengan Kampus Terpadu seluas lebih dari 500 hektar, kampus Universitas dirancang untuk menyatukan orang, tempat,
                                dan program yang mendukung tumbuhnya interaksi yang positif baik di dalam maupun di luar kelas. Universitas juga memiliki beberapa gedung kampus dan fasilitas
                                pendukung yang berlokasi di wilayah strategis di kota Yogyakarta. </p>
                            <p style="padding-top: 10px; text-align: justify;">Universitas memiliki puluhan fasilitas pendukung yang memastikan seluruh sivitas akademika, para pemangku kepentingan dan seluruh masyarakat dapat merasakan manfaat
                                dari Universitas. Fasilitas-fasilitas pendukung ini dapat diakses oleh mahasiswa, alumni, serta masyarakat umum di Yogyakarta.</p>
                            <p style="padding-top: 10px; text-align: justify;">Berikut ini merupakan informasi dari beberapa fasilitas yang dapat disewa dalam laman web ini. Kisaran harga yang tertera dapat dipengaruhi oleh durasi dan fasilitas apa yang disewa.</p>
                        </div>

                    </article>

                    <table class="table" style="padding-top: 55px; text-align: center;">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Fasilitas</th>
                                <th scope="col">Waktu Operasional</th>
                                <th scope="col">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Auditorium</td>
                                <td>Senin-Ahad
                                    <br>06.30-20.00 WIB
                                </td>
                                <td>Rp. 10.000.000
                                    <br>per hari
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Gedung Olahraga</td>
                                <td>Senin-Ahad
                                    <br>06.30-21.00 WIB
                                </td>
                                <td>Rp. 8.000.000
                                    <br>per hari
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Lapangan Sepak Bola</td>
                                <td>Senin-Ahad
                                    <br>06.30-19.00 WIB
                                </td>
                                <td>Rp. 8.000.000
                                    <br>per hari
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Rusunawa Kampus</td>
                                <td>Senin-Ahad
                                    <br>06.30-20.00 WIB
                                </td>
                                <td>Rp. 5.000.000
                                    <br>per hari
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="color: gray;">*kisaran harga yang tertera dapat berubah</p>
                    <p style="padding-top: 15px; text-align: justify;">Berbagai fasilitas kampus disediakan untuk mendukung mahasiswa untuk mendapatkan pengalaman belajar yang terbaik
                        selama menempuh studinya di Universitas. Didukung dengan Kampus Terpadu seluas lebih dari 35 hektar, kampus Universitas dirancang untuk menyatukan orang, tempat,
                        dan program yang mendukung tumbuhnya interaksi yang positif baik di dalam maupun di luar kelas. Universitas juga memiliki beberapa gedung kampus dan fasilitas
                        pendukung yang berlokasi di wilayah strategis di kota Yogyakarta. </p>
                </div>
                <!-- TAMBAHAN FOOTER UNTUK PEMANIS, OPSIONAL(DIHAPUS JG BOLEH) -->
                <footer class="text-center text-lg-start bg-light text-muted">
                    <!-- Section: Social media -->
                    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                        <!-- Left -->
                        <div class="me-5 d-none d-lg-block">
                           
                        </div>
                        <!-- Right -->
                    </section>
                    <!-- Section: Social media -->

                    <!-- Section: Links  -->
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
                                        Layanan sewa fasilitas kampus pionir, terbaik dan terjamin
                                    </p>
                                </div>
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
                                        Rents.ac.id
                                    </p>
                                    <p><i class="fas fa-phone me-3"></i>0813 9394 3333</p>
                                </div>
                                <!-- Grid column -->
                            </div>
                            <!-- Grid row -->
                        </div>
                    </section>
                    <!-- Section: Links  -->

                    <!-- Copyright -->
                    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                        © 2021 Copyright:
                        <a class="text-reset fw-bold" href="#">Rents.ac.id</a>
                    </div>
                    <!-- Copyright -->
                </footer>
                <!-- Footer -->
                <!-- AKHIR PENGEDITAN 1-7-2021 -->    
                
             </main>
            
          </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>