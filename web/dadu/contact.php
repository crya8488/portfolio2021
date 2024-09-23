<?php 
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$title = '連絡我們｜我來自大肚山-大肚山地方知識平台';
$description = '連絡我們｜我來自大肚山-大肚山地方知識平台';
$keywords = '';


?>

<!DOCTYPE html>
<html lang="zh-hang">
<head>
 <?php include("includes/g-meta.php") ?> 
</head>

<body>
<div class="inner-page about-page" data-bgcolor="orange">
 <?php include("includes/g-menu.php") ?>
 <div class="article-page-top"></div>

 <main class="main w1200">

  <div class="title-box" data-color="orange">
    <img src="img/title/contact.png" alt="連絡我們">
   </div>

  <div class="">

     <article class="contact-info-box">
       <div class="article-box">
        <h4 class="orange"><b>聯絡資訊 <i class="icon-talk"></i></b></h4>
        <p>本平台由 東海大學大肚山地方教育創生專案小組 管理<br>
        如有任何聯繫需求歡迎利用以下方式與我們聯絡，謝謝您！</p>
        <hr color="orange">
        <p>
         <ul>
          <li><p><span class="title">管理單位：</span>東海大學大肚山地方教育創生專案小組</p></li>
          <!-- <li><p><span class="title">地址：</span></p></li>
          <li><p><span class="title">電話：</span></p></li>
          <li><p><span class="title">傳真：</span></p></li> -->
          <li><p><span class="title">聯絡信箱：</span><a href="mailto:service@mtdadu.com.tw"><i class="icon-mail_outline"></i>service@mtdadu.com.tw</a> </p></li>
          <li>
           <p><span class="title">社群平台：</span>
            <a href="#" class="btn fb"><i class="icon-facebook"></i>Facebook</a>
            <a href="#" class="btn yt"><i class="icon-youtube"></i>Youtube</a> 
           </p>
          </li>


         </ul>
        
       </div>
     </article>
     <br>
     <article class="contact-form-box PinWrap ">
        <span id="contact-form" class="Pin"></span>
        
       <div class="article-box">

        <div class="">

         <h4 class="orange"><b>填寫聯絡表單 <i class="icon-pen"></i></b></h4>
         <p>如您有任何建議或想法，歡迎利用以下表單與我們聯繫</p>
         <hr color="orange">
        
          <form action="" class="form-box" >

           <label><p>姓 名</p><input type="text" placeholder="請輸入您的姓名"></label>
           <label><p>電 話</p><input type="text" placeholder="請輸入您的連絡電話"></label>
           <label><p class="mail">E-mail</p><input type="text" placeholder="請輸入您的電子信箱，我們會以此信箱回覆您"></label>
           <label class="msg"><p>我想說...</p>
            <textarea name="" id="" cols="30" rows="8" placeholder="請輸入相關內容，我們會儘快回覆您，謝謝您！(請勿輸入網址連結)"></textarea>
           </label>

           <label class="captcha">
            <p>驗證碼</p><input type="text" placeholder="請輸入驗證碼">
            <a href="#"><img src="img/demo/captcha.jpg" alt=""><i class="icon-refresh"></i></a>
           </label>

           <div class="btn-block-inline">
            <button type="reset" class="all-basic-btn" data-color="">清除內容<i class="icon-clear"></i></button>
            <button type="submit" class="all-basic-btn" data-color="orange">送　出 <i class="icon-arrow-right"></i></button>
           </div>

          </form>

         
        </div>
      

       </div>
       

     </article>
      
    


  </div>
 </main>

  

 <?php include("includes/BgPicBox/view1.php") ?>
</div>



<?php include("includes/g-footer.php") ?>


 
 

</body>
</html>