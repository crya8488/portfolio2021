<?php 
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$title = '註冊會員｜大肚山地方知識平台';
$description = '註冊成為大肚山地方知識平台會員';
$keywords = '';


?>

<!DOCTYPE html>
<html lang="zh-hang">
<head>
 <?php include("includes/g-meta.php") ?> 
 <script src="js/tw-city-selector.js"></script>
 
 
</head>

<body>
<div class="inner-page member " data-bgcolor="green">
 <?php include("includes/g-menu.php") ?>
 
 <main class="main w800">

  <div class="title-box" data-color="green">
   <h1>註冊會員</h1>
  </div>  

  <div class="step-box">
   <ul>
    <li><h5>帳號設定</h5><i class="icon-arrow-right"></i></li>
    <li><h5>填寫資料</h5><i class="icon-arrow-right"></i></li>
    <li><h5>信箱驗證</h5><i class="icon-arrow-right"></i></li>
    <li class="active"><h5>註冊成功</h5></li>
   </ul>
  </div>

   <div class="form-box-style2">

    <div class="form-content">
     <div class="text-box">
      <h4 class="title">註冊成功！</h4>
      <p class="content">
       信箱已完成驗證。<br>
       歡迎您加入【大肚山地方知識平台】<br>
       立即使用您註冊的帳號密碼登入<br>
       您可以開始收藏文章、自由投稿、管理您的會員資料。
      </p>
     </div>

     <div class="btn-block-inline">
       <a href="index.php" class="all-basic-btn" data-color="l-green">
        前往首頁
       </a>
       <a href="login.php" class="all-basic-btn" data-color="green">
        會員登入<i class="icon-arrow-right"></i>
       </a>
     </div>
    



    </div>

   </div>

      

     

   



 </main>



 
</div>

 <?php include("includes/g-footer.php") ?>


 <!-- 台灣縣市選擇 -->
 <script>
   new TwCitySelector();
 </script>
 <!-- 生日年/月/日下拉選單 -->
 <script src="js/birthday.js"></script>



</body>
</html>