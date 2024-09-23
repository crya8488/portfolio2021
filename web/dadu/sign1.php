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
 <script src="js/AddressList.js"></script>
 <script>
 $(function(){
  $('.check-box').click(function () {
   if($(this).hasClass('active')){
    $(this).removeClass('active');
   }else{
    $(this).addClass('active');
   }
   


  });
  

 });
 </script>
</head>

<body>
<div class="inner-page member" data-bgcolor="green">
 <?php include("includes/g-menu.php") ?>
 
 <main class="main w800">

  <div class="title-box" data-color="green">
   <h1>註冊會員</h1>
  </div>

  <div class="step-box">
   <ul>
    <li class="active"><h5>帳號設定</h5><i class="icon-arrow-right"></i></li>
    <li><h5>填寫資料</h5><i class="icon-arrow-right"></i></li>
    <li><h5>信箱驗證</h5><i class="icon-arrow-right"></i></li>
    <li><h5>註冊成功</h5></li>
   </ul>
  </div>


  
     

   <div class="form-box-style2">

    <!-- <div class="form-title">帳號設定</div> -->

    <form class="form-content">
      <div class="item-box">
       <label>
        <p class="name">電子信箱</p>
        <div class="fill-box">
         <input type="mail" placeholder="請輸入E-mail" required>
        </div>
        
       </label>
      </div>
      <div class="item-box">
       <label>
        <p class="name">帳 號</p>
        <div class="fill-box">
         <input type="text" placeholder="請設定會員帳號" required>
        </div>
       </label>
      </div>
      <div class="item-box">
       <label>
        <p class="name">密 碼</p>
        <div class="fill-box">
         <input type="password" placeholder="請設定登入密碼" required>
        </div>
       </label>
      </div>
      <div class="item-box">
       <label>
        <p class="name">確認密碼</p>
        <div class="fill-box">
         <input type="password" placeholder="請再次輸入密碼" required>
        </div>
       </label>
      </div>
      <!-- 驗證碼 -->
      <div class="item-box captcha">
       <p class="name">驗證碼</p>
       <div class="fill-box">
         <input type="text" placeholder="請輸入圖中的英文數字" required>
         <div class="captcha-box">
          <img src="img/demo/captcha.jpg" alt="">
          <a href="javascript:void(0)" class="renew-btn">更新<i class="icon-refresh"></i></a>
         </div>
       </div>
      </div>

      

      <div class="btn-block-inline">
       <a href="sign.php" class="all-basic-btn" data-color="l-green">
        <i class="icon-arrow-left"></i>返回
       </a>
       <a href="sign2.php" class="all-basic-btn" data-color="green">
        下一步<i class="icon-arrow-right"></i>
       </a>
      </div>
    </form>

   </div>



      

     

   



 </main>



 

 

 
</div>

<?php include("includes/g-footer.php") ?>


 
 

</body>
</html>