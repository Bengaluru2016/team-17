<?php
session_start();
$sql = "SELECT count(flag1) as no_online from investors where flag1=1 ;
$result = $conn->query($sql);
if ($result->num_rows == 1) {
    
    while($row = $result->fetch_assoc()) {
    $online=$row[no_online];
    }
?>