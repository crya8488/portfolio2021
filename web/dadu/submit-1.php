<?php 
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$title = '我要投稿(文章)｜大肚山地方知識平台';
$description = '我要投稿(文章)｜大肚山地方知識平台';
$keywords = '自由投稿,大肚山地方知識平台';


?>

<!DOCTYPE html>
<html lang="zh-hang">
<head>
 <?php include("includes/g-meta.php") ?> 
<script src="plugin/ckeditor/ckeditor.js"></script>

</head>

<body>
<div class="inner-page submit-page" data-bgcolor="green">
 <?php include("includes/g-menu.php") ?>

 <main class="main w1200">

  <div class="title-box" data-color="green">
   <img src="img/title/submission.png" alt="自由投稿">
  </div>

  <!-- 投稿活動資訊 (資料帶入) -->
  <div class="detail-box" color="green">
   <div class="submit-title">投稿活動</div>
   <div class="content">
     <p><span class="tg">活動名稱：</span>【看見大肚山】徵件活動 (徵件活動標題)</p>
     <p><span class="tg">徵件類別：</span> 文章 (徵件類別文字)</p>
     <p><span class="tg">徵件日期：</span>2020年10月10日 ~ 2020年11月30日 (台灣時間)</p>
     <p><a href="submission_d.php" class="btn all-basic-btn" data-color="l-green" target="_blank">查看徵件詳情<i class="icon-arrow-right"></i></a></p>
   </div>
  </div>

  <!-- 投稿須知 (靜態) -->
  <div class="detail-box" color="orange">

   <div class="submit-title orange">投稿須知</div>
   <div class="content">
    <?php include('includes/Submit/Notice.php')?>
   </div>

   </div>

  

  <div class="sep-box PinWrap" data-color="green">
    <i class="icon-write-paper"></i>
    <span id="start-submit" class="Pin"></span>
  </div>
  <div class="title-box start" data-color="green">
   <h2><b>開始投稿</b></h2>
   <p>※投稿送出或儲存之前請勿離開此頁面、請勿登出會員，以免遺失投稿資料。</p>
  </div>
  <!-- --------------- -->

  <!-- 投稿內容區(form) -->

  <form action="upload/submit" enctype="multipart/form-data">
     <!-- 投稿欄位 -->
     <!-- 依據徵件類別顯示對應欄位： -->
     <!-- (1)文章 / (2)圖片 / (3)影片 / (4)文章+圖片 -->

     <?php include('includes/Submit/SubmitArticle.php')?>
     <?php //include('includes/Submit/SubmitImage.php')?>
     <?php //include('includes/Submit/SubmitVedio.php')?>
     <?php //include('includes/Submit/SubmitArticleImage.php')?>


     <!-- 按鈕:送出投稿/儲存草稿 -->
     <?php include('includes/Submit/Button.php')?>

      

     </form>






   



 </main>


  <!-- 彈出視窗:送出投稿確認/已儲存草稿 -->
 <?php include('includes/Submit/Popup.php')?>


 

 
</div>

<?php include("includes/g-footer.php") ?>



 

<!-- UploadImagePreview -->
<script>

   function readURL(input){

     if(input.files && input.files[0]){

       var imageTagID = input.getAttribute("targetID");

       var reader = new FileReader();

       reader.onload = function (e) {

          var img = document.getElementById(imageTagID);

          img.setAttribute("src", e.target.result)

       }

       reader.readAsDataURL(input.files[0]);

     }

   }

   function addImg(){

     

   }

</script>

</body>
</html>