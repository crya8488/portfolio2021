<?php 
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$title = '修改我的密碼｜大肚山地方知識平台';
$description = '修改我的密碼｜我來自大肚山-大肚山地方知識平台';
$keywords = '';


?>

<!DOCTYPE html>
<html lang="zh-hang">
<head>
 <?php include("includes/g-meta.php") ?> 
 <script src="js/tw-city-selector.js"></script>
 <script src="js/birthday.js"></script>
</head>

<body>
<div class="inner-page about-page article-page member-center" data-bgcolor="orange">
 <?php include("includes/g-menu.php") ?>
 <div class="article-page-top"></div>

 <main class="main w1200">

  <div class="title-box" data-color="orange">
    <h1>會員專區</h1>
    <p>管理我的個人資料</p>
   </div>

  <div class="">
    <!-- <ul class="cate-btn">
       <li><a href="member.php">我的主頁</a></li>
       <li class="active"><a href="member_myinfo.php">個人資料</a></li>
       <li><a href="member_myfav.php">收藏文章</a></li>
       <li><a href="member_mysubmit.php">投稿紀錄</a></li>
    </ul> -->



     <!-- 修改密碼 -->
     <div class="form-box-style2">
      <form class="form-content">
       <div class="title">
        <h4 class="green"><b><i class="icon-vpn_key"></i> 修改我的密碼</b></h4>
       </div>
       
       <!-- 舊密碼 -->
       <div class="item-box">
        <label>
         <p class="name">舊密碼</p>
         <div class="fill-box">
          <input type="password" placeholder="請輸入原本的密碼" required>
         </div>
        </label>
       </div>
       <!-- 設定新密碼 -->
       <div class="item-box">
        <label>
         <p class="name">新密碼</p>
         <div class="fill-box">
          <input type="password" placeholder="請設定新的密碼" required>
         </div>
        </label>
       </div>
       <!-- 確認新密碼 -->
       <div class="item-box">
        <label>
         <p class="name">確認密碼</p>
         <div class="fill-box">
          <input type="password" placeholder="請再次輸入新的密碼" required>
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

        <a href="javascript:window.location.reload()" class="all-basic-btn" data-color="l-orange"><i class="icon-clear"></i>取消修改</a>

        <a href="javascript:void(0)" class="all-basic-btn" data-color="orange" id="submit-check-btn">送出修改<i class="icon-arrow-right"></i></a> 

       </div>


      </form>
     </div>

     <div class="btn-block">
      <a href="member_myinfo.php" class="all-basic-btn" data-color="l-orange">回到個人資料頁面<i class="icon-face"></i></a> 

     </div>

   
     



  </div>

  <div class="pop-up-wrap" id="submit-check">
    <div class="pop-up-bg pop-up-close"></div>
    <div class="pop-up-box">
     <h3 class="orange"><b>個人資料已更新！</b></h3>
     <div class="btn-block-inline">
      <a href="member_myinfo.php" class="all-basic-btn" data-color="l-orange">回到個人資料頁面</a>
      <a href="javascript:window.location.reload()" class="all-basic-btn" data-color="orange">關閉</a>
     </div>

    </div>
  </div>


 </main>

  <?php include("includes/MemberMenu.php") ?>
 <?php include("includes/BgPicBox/view1.php") ?>
</div>



<?php include("includes/g-footer.php") ?>


 <!-- 台灣縣市選擇 -->
 <!-- https://dennykuo.github.io/tw-city-selector/ -->
 <script>
  new TwCitySelector({
    el: '#city-selector',
    elCounty: '.county',
    elDistrict: '.district',
    elZipcode: '.zipcode' 
  });
 </script>
 <script>
   $(function () { 
    //個人資料修改
    $('#submit-check-btn').click(function () {
     $('#submit-check').addClass('active');
     $('body').addClass('blocked');
     
    });
   })
 </script>
 

</body>
</html>