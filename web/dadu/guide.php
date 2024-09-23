<?php 
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$title = '在地嚮導｜大肚山地方知識平台';
$description = '在地嚮導｜大肚山地方知識平台';
$keywords = '在地嚮導,大肚山地方知識平台';


?>

<!DOCTYPE html>
<html lang="zh-hang">
<head>
 <?php include("includes/g-meta.php") ?> 
 <script src="plugin/owl/owl.carousel.min.js"></script>
<link href="plugin/owl/owl.carousel.min.css" rel="stylesheet" type="text/css" />
<link href="plugin/owl/owl.theme.default.min.css" rel="stylesheet" type="text/css" /> 
</head>

<body>
<div class="list-page inner-page" data-bgcolor="orange">
 <?php include("includes/g-menu.php") ?>
 <main class="main w1440">
  <div class="title-box" data-color="orange">
   <img src="img/title/guide.png" alt="在地嚮導">
  </div>

  <!-- 文章分類、本區搜尋 -->
  <div class="list-fun-box" data-color="orange">
   <div class="list-cate-box">
    <div class="cate-select">
     <h1>在地嚮導</h1>
     <p>全部文章</p><!-- 顯示目前的分類名稱 -->
     <i class="icon-arrow-down"></i>
     </a>
    </div>
    <!-- 列出所有分類名稱 -->
    <ul class="drop-menu">
     <li><a href="guide.php">在地實踐家</a></li>
     <li><a href="guide.php">東海實踐家</a></li>
     <li><a href="guide.php">在地職人</a></li>
     <li class="close"><a href="javascript:void(0)">收起 <i class="icon-arrow-top"></i></a></li>
    </ul>
   </div>
   <form class="list-search-box">
    <input type="search" placeholder="搜尋本區文章">
    <button type="submit"><span>搜尋</span><i class="icon-search"></i></button>
    <div class="tag-box hashtag white">
     <span class="orange">熱門：</span>
     <!-- 顯示隨機三個關鍵字，點擊直接搜尋字詞 -->
     <a href="?瑞井">瑞井</a>
     <a href="?古井">古井</a>
     <a href="?地瓜">地瓜</a>
    </div>
   </form>
  </div>
  <!-- 文章列表 -->
  <ul class="box-list guide" data-color="orange">
   <li>
    <a href="guide_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/guide1.jpg')"></div>
     <div class="tag">
      <p>在地職人</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>番薯伯 陳進吉</h5>
      <h6>地瓜爐製作/番薯產銷，職人經歷50餘年。</h6>
     </div>
    </a>
    <a href="guide_d.php" class="btn">詳細介紹<i class="icon-search"></i></a>
   </li>
   <li>
    <a href="guide_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/guide2.jpg')"></div>
     <div class="tag">
      <p>在地職人</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>皮影藝術 許莉青</h5>
      <h6>東海大學藝術系系友，創立東海皮影劇團，職人經歷30餘年。</h6>
     </div>
    </a>
    <a href="guide_d.php" class="btn">詳細介紹<i class="icon-search"></i></a>
   </li>
   <li>
    <a href="guide_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/guide3.jpg')"></div>
     <div class="tag">
      <p>在地職人</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>陶藝創作 蘇秉康</h5>
      <h6>少鏞陶藝工作室，質樸無華但蘊含熾烈熱情的陶藝家，職人經歷約20年。</h6>
     </div>
    </a>
    <a href="guide_d.php" class="btn">詳細介紹<i class="icon-search"></i></a>
   </li>
   <li>
    <a href="guide_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/guide1.jpg')"></div>
     <div class="tag">
      <p>在地職人</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>番薯伯 陳進吉</h5>
      <h6>地瓜爐製作/番薯產銷，職人經歷50餘年。</h6>
     </div>
    </a>
    <a href="guide_d.php" class="btn">詳細介紹<i class="icon-search"></i></a>
   </li>
   <li>
    <a href="guide_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/guide2.jpg')"></div>
     <div class="tag">
      <p>在地職人</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>皮影藝術 許莉青</h5>
      <h6>東海大學藝術系系友，創立東海皮影劇團，職人經歷30餘年。</h6>
     </div>
    </a>
    <a href="guide_d.php" class="btn">詳細介紹<i class="icon-search"></i></a>
   </li>
   <li>
    <a href="guide_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/guide3.jpg')"></div>
     <div class="tag">
      <p>在地職人</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>陶藝創作 蘇秉康</h5>
      <h6>少鏞陶藝工作室，質樸無華但蘊含熾烈熱情的陶藝家，職人經歷約20年。</h6>
     </div>
    </a>
    <a href="guide_d.php" class="btn">詳細介紹<i class="icon-search"></i></a>
   </li>
   <li>
    <a href="guide_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/guide1.jpg')"></div>
     <div class="tag">
      <p>在地職人</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>番薯伯 陳進吉</h5>
      <h6>地瓜爐製作/番薯產銷，職人經歷50餘年。</h6>
     </div>
    </a>
    <a href="guide_d.php" class="btn">詳細介紹<i class="icon-search"></i></a>
   </li>
   <li>
    <a href="guide_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/guide2.jpg')"></div>
     <div class="tag">
      <p>在地職人</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>皮影藝術 許莉青</h5>
      <h6>東海大學藝術系系友，創立東海皮影劇團，職人經歷30餘年。</h6>
     </div>
    </a>
    <a href="guide_d.php" class="btn">詳細介紹<i class="icon-search"></i></a>
   </li>
   <li>
    <a href="guide_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/guide3.jpg')"></div>
     <div class="tag">
      <p>在地職人</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>陶藝創作 蘇秉康</h5>
      <h6>少鏞陶藝工作室，質樸無華但蘊含熾烈熱情的陶藝家，職人經歷約20年。</h6>
     </div>
    </a>
    <a href="guide_d.php" class="btn">詳細介紹<i class="icon-search"></i></a>
   </li>
   <li>
    <a href="guide_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/guide1.jpg')"></div>
     <div class="tag">
      <p>在地職人</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>番薯伯 陳進吉</h5>
      <h6>地瓜爐製作/番薯產銷，職人經歷50餘年。</h6>
     </div>
    </a>
    <a href="guide_d.php" class="btn">詳細介紹<i class="icon-search"></i></a>
   </li>
   <li>
    <a href="guide_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/guide2.jpg')"></div>
     <div class="tag">
      <p>在地職人</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>皮影藝術 許莉青</h5>
      <h6>東海大學藝術系系友，創立東海皮影劇團，職人經歷30餘年。</h6>
     </div>
    </a>
    <a href="guide_d.php" class="btn">詳細介紹<i class="icon-search"></i></a>
   </li>
   <li>
    <a href="guide_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/guide3.jpg')"></div>
     <div class="tag">
      <p>在地職人</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>陶藝創作 蘇秉康</h5>
      <h6>少鏞陶藝工作室，質樸無華但蘊含熾烈熱情的陶藝家，職人經歷約20年。</h6>
     </div>
    </a>
    <a href="guide_d.php" class="btn">詳細介紹<i class="icon-search"></i></a>
   </li>
   
  </ul>
  <!-- 頁碼 -->
  <div class="page-num-box" data-color="orange">
   <a href="#"><i class="icon-arrow-left"></i>上一頁</a>
   <ul>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    ...
    <li><a href="#">10</a></li>
   </ul>
   <a href="#">下一頁<i class="icon-arrow-right"></i></a>
  </div>

 </main>

 <?php include("includes/BgPicBox/view4.php") ?>

 
</div>

<?php include("includes/g-footer.php") ?>

 
 

</body>
</html>