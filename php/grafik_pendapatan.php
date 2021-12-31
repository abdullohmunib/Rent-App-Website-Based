<!-- CHART INI DIBUAT UNTUK MENGETAHUI BERAPA TOTAL PENDAPATAN DARI TANGGAL TERTENTU. -->

<?php
require 'conf/connection.php';
require 'function/rupiah.php';
$query = "SELECT tanggal, total as 'Total Pendapatan' FROM riwayat where status ='Diterima' GROUP BY tanggal";
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
                ['tanggal','Total Pendapatan'],
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    echo "['" . $row["tanggal"] . "', " . $row["Total Pendapatan"] . "],";
                }
                ?>
            ]);
            var options = {
                title: '',
                curveType: 'function',
                legend: {
                    position: 'bottom'
                }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
            chart.draw(data, options);
        }
    </script>