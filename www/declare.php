<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>huhao.info</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" media="(max-width:768px)" href="css/mobile.css">
  <link rel="stylesheet" href="css/declare.css">
</head>
<body>

<div class="left">

<div class="header">
  <a href="/index">胡浩</a>
  <div class="quote">"。。。"</div>
</div>

<div class="item">
<ul><li><a href="/index">主页</a></li>
    <li><a href="/gallery">相册</a></li>
    <li><a href="/aboutme">关于我</a>
    <img class="contact" id="wechatimg" src="images/contact/wechat.jpg" alt="">
    </li>
    <li><a href="/board">留言板</a> </li>
    <li class="select"><a href="/declare">#声明#</a> </li>
</ul>
</div>

</div>

<div class="right">

<div class="wrapper">

<p>自己的网页</p>
<div class="declare">v0.2.201710</div>
<a href="/login">管理</a>
</div>


<?php
          error_reporting(0);
          session_start();
          if($_SESSION['login']==1){
?>
     <a id="exit" href="php/logout.php">退出登录</a>
<?php   } ?>

</div>
</body>
<script src="js/load.js"></script>
</html>
