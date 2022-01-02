<?php
require 'sessionchecker_admin.php';
require 'conf/connection.php';
require 'function/function.php';
require 'grafik_status.php';
require 'grafik_fasilitas.php';
require 'grafik_incomepengguna.php';
require 'grafik_frekuensipenyewa.php';
require 'grafik_pendapatan.php';

$db_sewa = query("SELECT nama_penyewa, count(status) as status FROM riwayat where status = 'Diterima' GROUP BY nama_penyewa Order by status Desc LIMIT 3");

$db = query("SELECT nama_penyewa, sum(total) as total FROM riwayat where status = 'Diterima' GROUP BY nama_penyewa order by total desc");

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
                                <a class="nav-link active" href="#"><i class="fas fa-chart-line" aria-hidden="true"></i>&nbsp; Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="admin_informasi.php"><i class="fas fa-info-circle" aria-hidden="true"></i>&nbsp; Informasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="admin_tanggapan.php"><i class="fas fa-table" aria-hidden="true"></i>&nbsp; Tanggapan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="admin_keuangan.php"><i class="fas fa-hand-holding-usd" aria-hidden="true"></i>&nbsp; Keuangan</a>
                            </li>
                            <!-- perubahan pada logout -->
                            <li class="nav-item align-items-left text-left">
                                <a href="keluar_admin.php" class="nav-link"><i class="fas fa-sign-out-alt"></i> Keluar</a>
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


                            </div>
                        </div>
                    </div>
                </header>
                <div class="container py-3">
                    <article>
                        <div class="container-lg" style="padding-top: 50px;">
                            <h1 class="font-weight-light" style="text-align: center;">Selamat Datang di Website Penyewaan Fasilitas Kampus </h1>
                        </div>
                    </article>

                    <!-- TAMBAHAN TAMPILAN DASHBOARD CHART DIEDIT 2-7-2021 -->

                    <div class="container-lg" style="padding-top: 50px;">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-table me-1"></i>
                                        Rekapitulasi Pendapatan per Fasilitas
                                    </div>
                                    <div>
                                        <table id="example" class="table table-striped" style="width:100%; margin-top:10px; text-align: center;">
                                            <thead>
                                                <tr>
                                                    <th>Auditorium</th>
                                                    <th>Gedung Olah Raga</th>
                                                    <th>lapangan Sepak Bola</th>
                                                    <th>Rusunawa Kampus</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>
                                                        <?php
                                                        $tot_audi = "SELECT sum(total) AS jumlah FROM riwayat WHERE nama_fasilitas='Auditorium' AND status = 'Diterima'";
                                                        $audi = mysqli_query($koneksi, $tot_audi);
                                                        $auditorium = mysqli_fetch_array($audi);
                                                        echo rupiah($auditorium['jumlah']);
                                                        ?>
                                                    </td>

                                                    <td>
                                                        <?php
                                                        $tot_gedung = "SELECT sum(total) AS jumlah FROM riwayat WHERE nama_fasilitas='Gedung Olahraga' AND status = 'Diterima'";
                                                        $ged = mysqli_query($koneksi, $tot_gedung);
                                                        $gedung = mysqli_fetch_array($ged);
                                                        echo rupiah($gedung['jumlah']);
                                                        ?>
                                                    </td>

                                                    <td>
                                                        <?php
                                                        $tot_lapangan = "SELECT sum(total) AS jumlah FROM riwayat WHERE nama_fasilitas='Lapangan Sepak Bola' AND status = 'Diterima'";
                                                        $lap = mysqli_query($koneksi, $tot_lapangan);
                                                        $lapangan = mysqli_fetch_array($lap);
                                                        echo rupiah($lapangan['jumlah']);
                                                        ?>
                                                    </td>

                                                    <td>
                                                        <?php
                                                        $tot_rusun = "SELECT sum(total) AS jumlah FROM riwayat WHERE nama_fasilitas='Rusunawa Kampus' AND status = 'Diterima'";
                                                        $ru = mysqli_query($koneksi, $tot_rusun);
                                                        $rusunawa = mysqli_fetch_array($ru);
                                                        echo rupiah($rusunawa['jumlah']);
                                                        ?>
                                                    </td>

                                                </tr>
                                                </tfoot>
                                        </table>
                                    </div>
                                    <div class="card-footer small text-muted">| Update Everytime</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-line me-1"></i>
                                        Grafik Pendapatan Setiap Hari
                                    </div>
                                    <div id="curve_chart" style="   font-weight: bold; font-size: 30px;  width: 100%; height: 250px;"></div>
                                    <div class="card-footer small text-muted">| Update Everytime</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-pie me-1"></i>
                                        Grafik Pengajuan Sewa
                                    </div>
                                    <div id="piechart" style="   font-weight: bold; font-size: 30px;  width: 100%; height: 250px;"></div>
                                    <div class="card-footer small text-muted">| Update Everytime</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-pie me-1"></i>
                                        Grafik Fasilitas Terpakai dalam Satuan Hari
                                    </div>
                                    <div id="piechart1" style="   font-weight: bold; font-size: 30px;  width: 100%; height: 250px;"></div>
                                    <div class="card-footer small text-muted">| Update Everytime</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-pie me-1"></i>
                                        Grafik Frekuensi Sewa dari Setiap Pengguna
                                    </div>
                                    <div id="piechart2" style="   font-weight: bold; font-size: 30px;  width: 100%; height: 250px;"></div>
                                    <div class="card-footer small text-muted">| Update Everytime</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-trophy me-1"></i>
                                        Ranking Tertinggi dari Total Transaksi
                                    </div>
                                    <div>
                                        <table id="example" class="table table-striped" style="width:100%; margin-top:60px; text-align: center;">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Penyewa</th>
                                                    <th>Banyak Transaksi Sewa</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <!-- mengambil setiap nilai array -->
                                                <?php foreach ($db_sewa as $row) : ?>
                                                    <tr>
                                                        <td><?php echo $i;  ?></td>
                                                        <td><?php echo $row['nama_penyewa']; ?></td>
                                                        <td><?php echo $row['status']; ?></td>
                                                    </tr>
                                                    <?php $i++; ?>
                                                <?php endforeach;  ?>
                                                </tfoot>
                                        </table>
                                    </div>
                                    <div class="card-footer small text-muted">| Update Everytime</div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-pie me-1"></i>
                                        Grafik Pendapatan dari Setiap Pengguna
                                    </div>
                                    <div id="piechart3" style="   font-weight: bold; font-size: 30px;  width: 100%; height: 250px;"></div>
                                    <div class="card-footer small text-muted">| Update Everytime</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-trophy me-1"></i>
                                        Ranking Tertinggi dati Total Biaya
                                    </div>
                                    <div>
                                        <table id="example" class="table table-striped" style="width:100%; margin-top:60px; text-align: center;">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Penyewa</th>
                                                    <th>Total Biaya Transaksi Sewa</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <!-- mengambil setiap nilai array -->
                                                <?php foreach ($db as $row) : ?>
                                                    <tr>
                                                        <td><?php echo $i;  ?></td>
                                                        <td><?php echo $row['nama_penyewa']; ?></td>
                                                        <td><?php echo rupiah($row['total']); ?></td>
                                                    </tr>
                                                    <?php $i++; ?>
                                                <?php endforeach;  ?>
                                                </tfoot>
                                        </table>
                                    </div>
                                    <div class="card-footer small text-muted">| Update Everytime</div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- AKHIR EDITAN, JAVASCRIPT UNTUK CHART DILAMPIRKAN DALAM FILE .JS TERPISAH, LIHAT LINK SOURCE NYA -->

                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwW AwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../js/main_admin.js"></script>
</body>

</html>