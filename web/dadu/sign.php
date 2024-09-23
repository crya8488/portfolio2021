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
 
 <script>
  $(function () {
   $('.check-box.confirm').click(function () {
    $('#gosign').toggleClass('active');
   });
  });
 </script>

</head>

<body>
<div class="inner-page member" data-bgcolor="green">
 <?php include("includes/g-menu.php") ?>
 
 <main class="main w1200">

  <div class="title-box" data-color="green">
  <h1>註冊會員</h1>
  </div>
   

  
     

   <div class="sign-box form-box-style2" >

   <div class="form-content">

    <div class="more-box join-info" data-color="green">
     <h5>服務約定條款同意書<i class="icon-arrow-down"></i></h5>
     <div class="content">
      <p>
       您好，歡迎您使用【大肚山地方知識平台】官網<br>
       <br>

       【大肚山地方知識平台】（以下簡稱「本平台」）將依據以下會員註冊服務條款（以下簡稱「本服務條款」）提供您本平台文章收藏、投稿作品服務及個人會員服務（以下簡稱「本服務」）。為保障您的權益，請務必詳細閱讀本服務條款。<br>
       <br>


       當您完成本會員註冊手續、或開始使用本服務時，即表示您已閱讀、瞭解並同意接受本服務條款之所有內容，且接受本服務現有與未來衍生的服務項目及內容。<br>
       <br>

       本平台有權於任何時間修改或變更本服務條款內容。修改後的服務條款內容將公佈於網站上，本平台將不會個別通知會員，建議會員隨時注意該等修改或變更。會員於任何修改或變更後繼續使用本服務時，視為會員已閱讀、瞭解並同意接受該等修改或變更。若不同意上述的服務條款修訂或更新方式，或不接受本服務條款的其他任一約定，會員應立即停止使用本服務。<br>
       <br>


       若會員為未滿二十歲之未成年人，應於會員家長（或監護人）閱讀、瞭解並同意本約定書之所有內容及其後修改變更後，方得註冊為會員，以使用或繼續使用本服務。當會員使用或繼續使用本服務時，即推定會員家長（或監護人）已閱讀、瞭解並同意接受本服務條款之所有內容及其後修改變更。會員及本平台雙方同意使用本服務之所有內容，包括意思表示等，以電子文件作為表示方式。
      </p>
      
     </div>
    </div>


     <label class="check-box confirm">
       <i class="icon-check_box_outline_blank uncheck"></i>
       <i class="icon-check_box checked"></i>
       <h5>我已閱讀並同意 【大肚山地方知識平台】 的服務條款及隱私權政策</h5>
     </label>

      <div class="btn-block-inline">
       <a href="sign1.php" id="gosign" class="all-basic-btn" data-color="green">
        開始註冊
       </a>
      </div>
  

      

      
 

   </div>
   </div>

   <!-- <div class="form-box-style2">
   <div class="form-content t-center"> -->

    <p class="t-center">已經有帳號了？<a href="login.php" class="url green">登入會員<i class="icon-arrow-right"></i></a></p>
   <!-- </div>

   </div> -->



      

     

   



 </main>



 
 

 
</div>

<?php include("includes/g-footer.php") ?>


 
 

</body>
</html>