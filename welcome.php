<?php
    $uname = $_SESSION['uname'];
    include "connect.php";
    $sql = "select uname,pass from login";
    $result = $conn->query($sql);
    session_destroy();
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Name', 'Timepass time'],
        <?php
            //$num = array(3,4);
            for($i=0;$i<$result->num_rows-1;$i++){
                $row = $result->fetch_assoc();
               echo "['".$row['uname']."',".$row['pass']."],";
            }
                $row = $result->fetch_assoc();
               echo "['".$row['uname']."',".$row['pass']."]";
            ?>
        ]);

        var options = {
          title: 'College timepass'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <body><h1>Welcome <?php echo $uname;?></h1>
        <?php
//$x=$result->fetch_array(MYSQLI_NUM);
        //echo $x[2];
$result = $conn->query($sql);
            for($i=0;$i<$result->num_rows;$i++){
                $row = $result->fetch_assoc();?>
        <?php echo $row['uname']; echo " ".$row['pass'];?><br>
        <?php
            }
        ?>
        <div id="piechart" style="width: 900px; height: 500px;"></div>
</body>
