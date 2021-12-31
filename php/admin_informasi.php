<?php
require 'sessionchecker_admin.php';
require 'conf/connection.php';
require 'function/function.php';
$db_sewa = query("SELECT * FROM informasi");
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
    <style type="">

    .submit-btn{

    cursor: pointer;
    width: 360px;
    height: 50px;
    margin-top: 45px;
    height: 50px;
    margin-left:100px;
    border-radius: 5px;
    font-size: 17px;
    color: #fff;
    background-color: #1abc9c;
    border: none;
    }
    a{
        text-decoration: none;
        color: #fff;
    }
    .submit-btn:hover{
    opacity: 0.8;
    }
    </style>
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
                                <a class="nav-link" href="main_admin.php"><i class="fas fa-chart-line" aria-hidden="true"></i>&nbsp; Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#"><i class="fas fa-info-circle" aria-hidden="true"></i>&nbsp; Informasi</a>
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
                <div class="container py-3">
                    <article>
                        <div class="container-lg" style="background-color: #e3f2fd;">
                            <h1 class="font-weight-light">Informasi</h1>
                        </div>
                    </article>
                    <form method="post" action="tambah_informasi.php">

                    <div class="container" style="margin-top: 35px;">
                        <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">Isi disini</span>
                              </div>
                              <textarea id="informasi" name="informasi" class="form-control" rows="5" aria-label="With textarea" required></textarea>
                              
                        </div>

                        <input type="submit" class="submit-btn" value="SUBMIT">
                        <button class="submit-btn"><a href="tampil_informasi.php">LIHAT INFORMASI</a></button>
                        
                    </div>

                    

                    </form>
                </div>
        </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>