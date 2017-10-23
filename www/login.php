<?php
       error_reporting(0);
       session_start();
      if($_POST['password'] == "huha")
    {
       $_SESSION['login']=1;
      header("Location:/index");
    }

?>


<div>
  <form action="/login" method="post">
      <input type="password" name="password" value="">
      <input type="submit" name="" value="LOGIN">
  </form>
  <a href="/index">返回</a>
</div>
