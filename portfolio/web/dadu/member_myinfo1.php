<?php 
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$title = '我的個人資料｜大肚山地方知識平台';
$description = '我的個人資料｜我來自大肚山-大肚山地方知識平台';
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

     <!-- 修改個人資料 -->
     <div class="form-box-style2">
      <form class="form-content">
       <div class="title">
        <h4 class="green"><b><i class="icon-drive_file_rename_outline"></i> 修改個人資料</b></h4>
       </div>
       
       <!-- 姓名 -->
       <div class="item-box">
        <label>
         <p class="name">姓 名</p>
         <div class="fill-box">
          <input type="text" value="林小美" placeholder="請輸入姓名" required>
         </div>
        </label>
       </div>
       
       <!-- 性別 -->
       <div class="item-box">
        <p class="name">性 別</p>
        <div class="fill-box">
         <label class="radio-btn">
          <input type="radio" name="gender" id="male">
           <i class="icon-panorama_fisheye no"></i>
           <i class="icon-radio_button_on yes"></i>
           男
         </label>
         <label class="radio-btn active">
          <input type="radio" name="gender" id="female" cheked>
          <i class="icon-panorama_fisheye no"></i>
          <i class="icon-radio_button_on yes"></i>
          女
         </label>
         <label class="radio-btn">
          <input type="radio" name="gender" id="other">
          <i class="icon-panorama_fisheye no"></i>
          <i class="icon-radio_button_on yes"></i>
          其他
         </label>
        </div>
       </div>

       <!-- 生日 -->
       <div class="item-box inline">
         <p class="name">生日</p>
         <div class="fill-box">
          <select id="birth_year" onchange="setDays(this,birth_month,birth_day);" required>
             <option value="">1990 年</option>
          </select>
          <select id="birth_month" onchange="setDays(birth_year,this,birth_day);" required>
             <option value="">1 月</option>
          </select>
          <!-- <select id="birth_day" required>
             <option value="">1 日</option>
          </select> -->
         </div>
       </div>
       

       <!-- 電話 -->
       <div class="item-box">
        <label>
         <p class="name">連絡電話</p>
         <div class="fill-box">
          <input type="phone" value="0911111111" placeholder="請輸入電話號碼" required>
         </div>
        </label>
       </div>

       <!-- 居住地區 -->
       <div class="item-box inline address">
         <p class="name">居住地區</p>
         <div class="fill-box" id="city-selector">
            <!-- 套件tw-city-selector.js，縣市選擇器-->
            <!-- 郵遞區號欄位 (readonly) -->
            <!-- <input class="zipcode" type="text" size="3" readonly placeholder="郵遞區號"> -->
            <!-- 縣市選單 -->
            <select class="county" data-value="台北市"></select>
            <!-- 區域選單 -->
            <select class="district" data-value="大安區"></select>
            
         </div>
       </div>

       <!-- 地址 -->
       <!-- <div class="item-box">
         <p class="name">地 址</p>
         <div class="fill-box">
          <input type="text" name="Address" value="OO路XX巷1號"  placeholder="請填寫地址 (路/街/道/巷/弄/號/樓...)"required>
         </div>
        </label>
       </div> -->

       

      

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