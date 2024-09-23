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
 <script src="js/birthday.js"></script>
 
 
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
    <li class="active"><h5>填寫資料</h5><i class="icon-arrow-right"></i></li>
    <li><h5>信箱驗證</h5><i class="icon-arrow-right"></i></li>
    <li><h5>註冊成功</h5></li>
   </ul>
  </div>

   <div class="form-box-style2">

    <form class="form-content">
     <div class="item-box">
      <label>
       <p class="name">姓 名</p>
       <div class="fill-box">
        <input type="text" placeholder="姓名" required>
       </div>
      </label>
     </div>

     <div class="item-box">
      <p class="name">性 別</p>
      <div class="fill-box">
       <label class="radio-btn">
        <input type="radio" name="gender" id="male">
         <i class="icon-panorama_fisheye no"></i>
         <i class="icon-radio_button_on yes"></i>
         男
       </label>
       <label class="radio-btn">
        <input type="radio" name="gender" id="female">
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

     <div class="item-box inline">
       <p class="name">生日年月</p>
       <div class="fill-box">
          <select id="birth_year" onchange="setDays(this,birth_month,birth_day);" required>
             <option value="">年</option>
          </select>
          <select id="birth_month" onchange="setDays(birth_year,this,birth_day);" required>
             <option value="">月</option>
          </select>
          <!-- <select id="birth_day" required>
             <option value="">日</option>
             </select> -->
       </div>
     </div>
     

     <div class="item-box">
      <label>
       <p class="name">連絡電話</p>
       <div class="fill-box">
        <input type="phone" placeholder="電話號碼" required>
       </div>
      </label>
     </div>

      <div class="item-box inline address">
       <p class="name">居住地區</p>
       <div class="fill-box" id="city-selector">
          <!-- 套件tw-city-selector.js，縣市選擇器，隱藏郵遞區號欄位-->
         <!-- 郵遞區號欄位 (readonly) -->
         <!-- <input class="zipcode" type="text" size="3" readonly placeholder="郵遞區號"> -->
         <!-- 縣市選單 -->
         <select class="county"></select>
         <!-- 區域選單 -->
         <select class="district"></select>
         
       </div>
     </div>

     <!-- <div class="item-box">

       <p class="name">地 址</p>

       <div class="fill-box">
 
        <input type="text" name="Address" required placeholder="請填寫地址 (路/街/道/巷/弄/號/樓...)">
       </div>
      
 
      
      </label>
     </div> -->

     

    

    <div class="btn-block-inline">

     <a href="sign1.php" class="all-basic-btn" data-color="l-green"><i class="icon-arrow-left"></i>上一步</a>

     <a href="sign3.php" class="all-basic-btn" data-color="green">送 出<i class="icon-arrow-right"></i></a> 

    </div>


    </form>

   </div>

      

     

   



 </main>



 
</div>

 <?php include("includes/g-footer.php") ?>
 



 <!-- 台灣縣市選擇 -->
 <!-- https://dennykuo.github.io/tw-city-selector/ -->
<script>
  new TwCitySelector({
    el: '#city-selector',
    elCounty: '.county',
    elDistrict: '.district'
    // elZipcode: '.zipcode' 
  });
 </script>



</body>
</html>