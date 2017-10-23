<?php
  include ("dbconnect.php");

  $type = $_GET['type'];
  $id = $_GET['id'];

 if($type=='b')
{
  $sql = "DELETE FROM `board` WHERE `board`.`id` = '$id'";
  $mysqli -> query($sql);
  header("Location:/board");
}

if($type=='g')
{
 $sql =  "DELETE FROM `gallery` WHERE `gallery`.`id` = '$id'";
 $mysqli -> query($sql);

 if(unlink( $_GET['name']))
   header("Location:/gallery");
   else echo"删除失败";
}


 ?>
