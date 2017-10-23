<div class="myform">
<form action="upload.php" method="post" enctype="multipart/form-data">
   <input type="text" name="title"   value="#2017-XX-XX"><br>
   <input type="text" name="content" value="说一句话吧"><br>
   <input type="file" name="myupload"/>
   <input type="submit" value="上传"/>
</form>
</div>

    <?php
 

     date_default_timezone_set('PRC');
     include ("dbconnect.php");
     error_reporting(0);

     $typeArr = explode("/", $_FILES["myupload"]["type"]);
     $myimgType = array("png","jpg","jpeg","gif");



      if(in_array($typeArr[1], $myimgType))
      {

       $imgname = time().".".$typeArr[1];
       $address = "../file/".$imgname;

       $bol = move_uploaded_file($_FILES["myupload"]["tmp_name"], $address);

       if($bol)
         {
           $title = $_POST['title'];
           $content =  $_POST['content'];
           $sql = "INSERT INTO gallery (`title`,`content`,`img`) VALUES ('$title','$content','$address')"  ;
           $mysqli->query($sql);
           echo "上传成功！";
           header("Location:/gallery");
         }
        else echo "上传失败!";
      }




    ?>
