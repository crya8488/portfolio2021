<?php 
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];


$title = '投稿完成｜大肚山地方知識平台';
$description = '投稿完成｜大肚山地方知識平台';
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
   <div class="submit-title">投稿成功</div>
   <div class="content">
   <h3 class="tg">感謝您的投稿，我們將儘快審稿並通知結果。</h3>
   <hr color="green">
   <p><span class="tg">投稿人：</span>林小美</p>
   <p><span class="tg">投稿時間：</span>2020年10月10日 21:30</p>
     <p><span class="tg">投稿活動：</span>【看見大肚山】徵件活動 (徵件活動標題)</p>
     <p><span class="tg">徵件類別：</span> 文章</p>
     <p><span class="tg">徵件日期：</span>2020年10月10日 ~ 2020年11月30日 (台灣時間)</p>
     <p><a href="submit_view.php" class="btn all-basic-btn" data-color="l-green">檢視投稿內容<i class="icon-remove_red_eye"></i></a></p>

     <p><a href="member_mysubmit.php" class="btn all-basic-btn" data-color="green">我的投稿記錄<i class="icon-arrow-right"></i></a></p>

     
   </div>
  </div>

  
  <div class="btn-block-inline">
  <a href="index.php" class="btn all-basic-btn" data-color="w-green">返回首頁<i class="icon-home"></i></a>
  <a href="submission.php" class="btn all-basic-btn" data-color="green">更多徵件活動<i class="icon-arrow-right"></i></a>
  
  </div>


  




   



 </main>





 

 
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