<?php
require 'sessionchecker_admin.php';
require 'conf/connection.php';
require 'function/function.php';
require 'function/rupiah.php';

$db_sewa = query("SELECT * FROM riwayat");
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
    <style>
    .submit-btn{
    margin: 5px 0 5px 0;
    width: 70%;
    height: 30px;
    cursor: pointer;
    border-radius: 3px;
    font-size: 15px;
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
    .submit-btn1{
    margin: 5px 0 5px 0;
    width: 70%;
    height: 30px;
    cursor: pointer;
    border-radius: 3px;
    font-size: 15px;
    background-color: #000;
    border: none;
    }
    a{
        text-decoration: none;
        color: #fff;
    }
    .submit-btn1:hover{
    opacity: 0.8;
}
    .submit-btn2{
    margin: 30% 0 0 0;
    cursor: pointer;
    border-radius: 3px;
    font-size: 15px;
    background-color: #ff1c1c;
    border: none;
    width: 100%;
    height: 40px;
    }
    a{
        text-decoration: none;
        color: #fff;
    }
    .submit-btn1:hover{
    opacity: 0.8;


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
                                <a class="nav-link" href="admin_informasi.php"><i class="fas fa-info-circle" aria-hidden="true"></i>&nbsp; Informasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#"><i class="fas fa-table" aria-hidden="true"></i>&nbsp; Tanggapan</a>
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
                            <h1 class="font-weight-light" style="text-align: center;">Tanggapan Penyewaan Fasilitas Kampus </h1>
                        </div>
                    </article>
                   
                     <table id="example" class="table table-striped" style="width:100%; margin-top:60px; text-align: center;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nama Penyewa</th>
                                    <th>Nomor Telepon</th>
                                    <th>Nama Fasilitas</th>
                                    <th>Hari</th>
                                    <th>Harga</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Tanggapan</th>
                                    <th>Opsional</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <!-- mengambil setiap nilai array -->
                                <?php foreach ($db_sewa as $row) : ?>
                                <tr>
                                    <td><?php echo $i;  ?></td>
                                    <td><?php echo $row['tanggal']; ?></td>
                                    <td><?php echo $row['nama_penyewa']; ?></td>
                                    <td><?php echo $row['no_telp']; ?></td>
                                    <td><?php echo $row['nama_fasilitas']; ?></td>
                                    <td><?php echo $row['hari']; ?></td>
                                    <td><?php echo rupiah($row['harga']); ?></td>
                                    <td><?php echo rupiah($row['total']); ?></td>
                                    <td><?php echo $row['status']; ?></td>
                                    <td>
                                        <button class="submit-btn" style="text-decoration: none" id="status"><a href="terima.php?id_riwayat=<?php echo $row['id_riwayat'];?>"onclick="return alert('Pengajuan diterima')"><i class="fa fa-check-square"></i> Terima</a></button>

                                        <button class="submit-btn1" style="text-decoration: none" id="status"><a href="tolak.php?id_riwayat=<?php echo $row['id_riwayat'];?>" onclick="return alert('Pengajuan ditolak')"><i class="fa fa-times"></i> Tolak</a></button>
                                    </td>
                                    <td>
                                          <button class="submit-btn2" >
                                            <a href="hapus_tanggapan.php?id_riwayat=<?php echo $row['id_riwayat'];?>" onclick="return confirm('Yakin Hapus Data ?')"><i class="fa fa-trash"></i> Hapus</a>
                                        </button>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                                <?php endforeach;  ?>
                                
                                </tfoot>
                        </table>

                </div>
        </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>