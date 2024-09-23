<?php 
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$title = '關於我們｜大肚山地方知識平台';
$description = '關於我來自大肚山-大肚山地方知識平台';
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
    <img src="img/title/aboutus.png" alt="關於我們">
   </div>


    <ul class="cate-btn">
       <li class="active"><a href="about.php">平台簡介</a></li>
       <li><a href="about-goal.php">我們的目標</a></li>
       <li><a href="about-partners.php">協作夥伴</a></li>
    </ul>

   
    <article>
      <!-- 文章內容(圖文編輯器) -->
      <div class="article-box">
       <h4 class="orange"><b>關於本平台</b></h4>
       <p>
       「我來自大肚山‧大肚山地方知識平台」是一個記錄大肚山社區歷史文化、在地活動的資訊平台，以期更多人能看見大肚山社區及其需要，並凝聚大肚山一地社區的共同情感。
       </p>
       <hr color="orange">
       <h4 class="orange"><b><i class="icon-star_outline"></i> 本月之星</b></h4>
       <p>
       關於在地嚮導......
       </p>
       <hr color="orange">
       <h4 class="orange"><b><i class="icon-search"></i> 每月精選</b></h4>
       <p>
       關於在地嚮導......
       </p>
       <hr color="orange">
       <h4 class="orange"><b><i class="icon-paper"></i> 地方簡史</b></h4>
       <p>
       關於地方簡史......
       </p>
       <hr color="orange">
       <h4 class="orange"><b><i class="icon-house"></i> 生活記憶</b></h4>
       <p>
       關於生活記憶......
       </p>
       <hr color="orange">
       <h4 class="orange"><b><i class="icon-signboard"></i> 特約分享</b></h4>
       <p>
       關於特約分享......
       </p>
       <hr color="orange">
       <h4 class="orange"><b><i class="icon-map"></i> 在地嚮導</b></h4>
       <p>
       關於在地嚮導......
       </p>
       <hr color="orange">
       <h4 class="orange"><b><i class="icon-photograph"></i> 影像藝廊</b></h4>
       <p>
       關於影像藝廊......
       </p>
       <hr color="orange">
       <h4 class="orange"><b><i class="icon-write-paper"></i> 自由投稿</b></h4>
       <p>
       關於自由投稿......
       </p>
       
       
      </div>
      <div class="btn-block-inline">
        <a href="contact.php" class="all-basic-btn" data-color="l-orange">與我們聯繫</a>
       </div>
     </article>
    
    
 



 </main>

  

 <?php include("includes/BgPicBox/view1.php") ?>
</div>



<?php include("includes/g-footer.php") ?>


 
 

</body>
</html>