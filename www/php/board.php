<?php
date_default_timezone_set('PRC');

include ("dbconnect.php");

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $result = $mysqli->query("SELECT * FROM board ORDER BY id DESC");

    $rows = array();

    while (1) {
         $row = $result->fetch_array(MYSQLI_ASSOC);
         if(!$row) {break;}
         $rows[] = $row;
    }

    echo json_encode($rows);

}


elseif ($_SERVER["REQUEST_METHOD"] == "POST"){

  $phpuser = $_POST["user"];
  $phpcontent = $_POST["content"];
  $t = date("Y-m-d H:i:s",time());

  $sql = "INSERT INTO board (`username`,`msg`,`intime`) VALUES ('$phpuser','$phpcontent','$t')"  ;
  $mysqli->query($sql);

}

?>
