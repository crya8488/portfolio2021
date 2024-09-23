<?php 
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$title = '會員登入｜大肚山地方知識平台';
$description = '登入大肚山地方知識平台會員';
$keywords = '';


?>

<!DOCTYPE html>
<html lang="zh-hang">
<head>
 <?php include("includes/g-meta.php") ?> 
 <!-- <script>
  $(function(){
   $('#login-btn').click(function(){
    alert('登入成功！');
   });
  });
 </script> -->
</head>

<body>
<div class="inner-page member login-page" data-bgcolor="green">
 <?php include("includes/g-menu.php") ?>

 <main class="main w800">

  <div class="title-box" data-color="green">
   <h1>會員登入</h1>
  </div>

  
 
  <div class="form-box-style2">
   <form class="form-content">
     <div class="item-box">
      <label>
       <p class="name">帳 號</p>
       <div class="fill-box">
        <input type="text" placeholder="請輸入會員帳號" required>
       </div>
      </label>
     </div>
     <div class="item-box">
      <label>
       <p class="name">密 碼</p>
       <div class="fill-box">
        <input type="password" placeholder="請輸入密碼" required>
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
      <button type="submit" class="all-basic-btn" data-color="green" id="login-btn" onclick="location.href='member.php'">登　入</button>
     </div>


     <div class="btn-block link">
      <a href="sign.php" class="url green">註冊會員</a>  
      <a href="javascript:void(0)" id="get-psw-btn"  class="url green">忘記密碼？</a>
     </div>


     <div class="social-box">
      <p class="blue t-center"><b>使用社群帳號登入</b></p>
      <div class="btn-block-inline">
       <a href="#" class="all-basic-btn social" data-color="fb" title="使用Facebook登入"><img src="img/login/Facebook_f_Logo_w.svg" alt="">Facebook</a>
       <a href="#" class="all-basic-btn social" data-color="google" title="使用Google登入"><img src="img/login/Google_G_Logo.svg" alt="">Google</a>
      </div>
     </div>
     
     

     

   </form>
  </div>

  <div class="form-box t-center" data-color="green">
   <h2 class="orange">還不是會員嗎？</h2>
   <hr>
   <p>加入大肚山地方知識平台，成為我們的會員<br>
   您可以收藏喜愛的文章、參加自由投稿活動<br>
   並訂閱電子報獲得最新消息。</p>
   <div class="btn-block">
     <a href="sign.php" class="all-basic-btn" data-color="orange">立即註冊<i class="icon-arrow-right"></i></a>
    </div>
  </div>



 </main>



 <!-- 忘記密碼 輸入信箱取得新密碼 -->

 <div class="pop-up-wrap" id="get-psw">
    <div class="pop-up-bg pop-up-close"></div>
    <div class="pop-up-box form-box" data-color="green" data-style="box">
     <h3 class="title gr">忘記密碼了嗎？</h3>
     <p class="blk">請輸入您的註冊電子信箱，我們會將新密碼寄至您的信箱。並請您登入後儘快更新您的密碼。</p>
     <br>
     <form action="">
      <input type="mail" placeholder="請輸入Email" >
      <div class="btn-block-inline">
       <a href="javascript:void(0)" class="all-basic-btn pop-up-close" data-color="l-green">取消</a>
       <button type="submit" href="javascript:void(0)" class="all-basic-btn" data-color="green">送出</button>
      </div>
     </form>

     <div class="close-btn pop-up-close" data-color="green"><i class="icon-clear"></i></div>
    
    </div>
  </div>

</div>

<?php include("includes/g-footer.php") ?>


 
 

</body>
</html>