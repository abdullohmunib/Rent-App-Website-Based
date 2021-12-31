<?php
require 'conf/connection.php';
$query = "SELECT nama_fasilitas, sum(total) as total FROM riwayat where status='Diterima' GROUP BY nama_fasilitas";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html>

<head>
    <!-- <title></title> -->
    <!-- Grafik Pie Chart  -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['nama_fasilitas', 'total'],
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    echo "['" . $row["nama_fasilitas"] . "', " . $row["total"] . "],";
                }
                ?>
            ]);
            var options = {
                title: '',
                is3D: true,
                pieHole: 0.1
            };
            var chart = new google.visualization.PieChart(document.getElementById('piechart_rekap'));
            chart.draw(data, options);
        }
    </script>