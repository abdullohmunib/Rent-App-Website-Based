 <?php  
 require 'conf/connection.php';
 $query = "SELECT status, count(*) as number FROM riwayat where status is NOT NULL GROUP BY status";  
 $result = mysqli_query($koneksi, $query); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>kalkulasi Grafik</title> 
 <!-- Grafik Pie Chart  -->
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['status', 'number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["status"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: '',  
                      is3D:true,  
                      pieHole: 0.1
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>