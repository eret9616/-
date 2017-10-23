
<div class="myform">
<form action="index.php" method="post" enctype="multipart/form-data">
   <input type="text" name="title"   value="#2017-12-31"><br>
   <input type="text" name="content" value="说句话吧"><br>
   <input type="file" name="img"/>
   <input type="submit" value="上传"/>
</form>
</div>

    <?php

    date_default_timezone_set('PRC');
    include ("dbconnect.php");

     $typeArr = explode("/", $_FILES["img"]["type"]);
     $myimgType = array("png","jpg","jpeg","gif");

      if(in_array($typeArr[1], $myimgType))
      {
       $imgname = time().".".$typeArr[1];
       $bol = move_uploaded_file($_FILES["img"]["tmp_name"], "file/".$imgname);
       if($bol) echo "上传成功！"; else echo "上传失败!";
      }

    $address = "file/".$imgname;
    $title = $_POST['title'];
    $content =  $_POST['content'];

    $sql = "INSERT INTO gallery (`title`,`content`,`img`) VALUES ('$title','$content','$address')"  ;
    $mysqli->query($sql);



    ?>
