<?php
    
    include "connection.php";
    $sql = "select cause_title,count(i_id) as count2 from causes group by cause_title";
    $result = $conn->query($sql);
    session_destroy();
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Cause', 'Investors'],
        <?php
            //$num = array(3,4);
            for($i=0;$i<$result->num_rows-1;$i++){
                $row = $result->fetch_assoc();
               echo "['".$row['cause_title']."',".$row['count1']."],";
            }
                $row = $result->fetch_assoc();
               echo "['".$row['cause_title']."',".$row['count1']."]";
            ?>
        ]);

        var options = {
          title: 'Statistical data of Investors '
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <body>
        <?php
//$x=$result->fetch_array(MYSQLI_NUM);
        //echo $x[2];
$result = $conn->query($sql);
            for($i=0;$i<$result->num_rows;$i++){
                $row = $result->fetch_assoc();?>
        <?php echo $row['cause_title']; echo " ".$row['count1'];?><br>
        <?php
            }
        ?>
        <div id="piechart" class="col-xs-6 col-sm-6 col-md-6 style="width: 900px; height: 500px;"></div>
</body>
