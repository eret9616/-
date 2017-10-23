<?php


$mysqli = new mysqli("localhost","root","","myweb");
$mysqli -> query("SET NAMES UTF8");
//防止乱码


if($mysqli->connect_errno >0){
  echo "连接错误";
  echo $mysqli->connect_errno;
  exit;
}


 ?>
