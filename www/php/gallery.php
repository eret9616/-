<?php

include ("dbconnect.php");

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $result = $mysqli->query("SELECT * FROM gallery ORDER BY id DESC");

    $rows = array(); //新建一个数组

    while (1) {
         $row = $result->fetch_array(MYSQLI_ASSOC);
         if(!$row) {break;}
         $rows[] = $row;
    }

    echo json_encode($rows);
}


 ?>
