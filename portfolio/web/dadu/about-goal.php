<?php 
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$title = '我們的目標｜我來自大肚山-大肚山地方知識平台';
$description = '我們的目標｜我來自大肚山-大肚山地方知識平台';
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
       <li><a href="about.php">平台簡介</a></li>
       <li class="active"><a href="about-goal.php">我們的目標</a></li>
       <li><a href="about-partners.php">協作夥伴</a></li>
    </ul>

     <article>
       <!-- 文章內容(圖文編輯器) -->
       <div class="article-box">
        <h4 class="orange"><b>我們的目標</b></h4>
        <p>
         <b>歷史‧記憶‧傳承‧共享</b><br>
         
         期待您藉由我們的視角，了解大肚山這片土地風情地景。<br>
         更希望生活在大肚山的每一位居民，能夠驕傲的說出：我來自大肚山！
        </p>
        
       </div>

      </article>


 </main>

  

 <?php include("includes/BgPicBox/view1.php") ?>
</div>



<?php include("includes/g-footer.php") ?>


 
 

</body>
</html>