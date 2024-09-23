<?php 
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$title = '自由投稿｜大肚山知識平台';
$description = '自由投稿｜大肚山知識平台';
$keywords = '自由投稿,大肚山知識平台';


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
<div class="list-page inner-page submission" data-bgcolor="green">

 <?php include("includes/g-menu.php") ?>
 <main class="main w1440">
  <div class="title-box" data-color="green">
   <img src="img/title/submission.png" alt="自由投稿">
  </div>

  <!-- 自由投稿 活動搜尋 -->
  <div class="list-fun-box" data-color="green">
   <form class="list-search-box" data-color="green">
    <input type="search" placeholder="搜尋活動">
    <button type="submit"><span>搜尋</span><i class="icon-search"></i></button>
    <div class="tag-box hashtag w-green" data-color="green">
     <span class="green">熱門：</span>
     <!-- 顯示隨機三個關鍵字，點擊直接搜尋字詞 -->
     <a href="?瑞井">瑞井</a>
     <a href="?古井">古井</a>
     <a href="?地瓜">地瓜</a>
    </div>
   </form>
  </div>

  <!-- 自由投稿 活動列表 -->

  <!-- 【置頂 徵件中】活動列表 -->
  
  <ul class="box-list top" data-color="green">
   <li>
    <a href="submission_d.php" class="content">
     <img src="img/tag-now.svg" alt="徵件中" class="mark"><!-- 徵件中活動顯示標籤 -->
     <div class="pic" style="background-image:url('img/demo/submission1.jpg')">
     </div>
     <div class="intro">
      <div class="tag">
       <p>徵件類別字</p>
       <p>~2020-12-31</p>
       <p><i class="icon-remove_red_eye"></i> 1000</p>
      </div>
      <div class="text">
       <h5>自由投稿徵件活動標題</h5>
       <h6>(簡介文字區)OO社區發展協會主辦的OOOO徵文活動，期待能藉由居民們的文字，看見不同視角下的大肚山，不限年齡皆可投稿。</h6>
      </div>
     </div>
    </a>

    <div class="btn-box">
     <a href="submission_d.php" class="btn">徵件詳情<i class="icon-search"></i></a>
     <a href="submit.php" class="btn"  target="_blank"><span>馬上</span>投稿<i class="icon-pen"></i></a>
    </div>
   </li>
   <li>
    <a href="submission_d.php" class="content">
     <img src="img/tag-now.svg" alt="徵件中" class="mark"><!-- 徵件中活動顯示標籤 -->
     <div class="pic" style="background-image:url('img/demo/submission1.jpg')">
     </div>
     <div class="intro">
      <div class="tag">
       <p>徵件類別字</p>
       <p>~2020-12-31</p>
       <p><i class="icon-remove_red_eye"></i> 1000</p>
      </div>
      <div class="text">
       <h5>自由投稿徵件活動標題</h5>
       <h6>(簡介文字區)OO社區發展協會主辦的OOOO徵文活動，期待能藉由居民們的文字，看見不同視角下的大肚山，不限年齡皆可投稿。</h6>
      </div>
     </div>
    </a>

    <div class="btn-box">
     <a href="submission_d.php" class="btn">徵件詳情<i class="icon-search"></i></a>
     <a href="submit.php" class="btn" target="_blank"><span>馬上</span>投稿<i class="icon-pen"></i></a>
    </div>
   </li>
  </ul>
  <!-- 【非置頂 徵件中】活動列表 -->
  <ul class="box-list" data-color="green">
   <li>
    <a href="submission_d.php" class="content">
     <img src="img/tag-now.svg" alt="徵件中" class="mark"><!-- 徵件中活動顯示標籤 -->
     <div class="pic" style="background-image:url('img/demo/banner1-m.jpg')">
     </div>
     <div class="intro">
      <div class="tag">
       <p>書寫創作家</p>
       <p>~2020-12-31</p>
       <p><i class="icon-remove_red_eye"></i> 1000</p>
      </div>
      <div class="text">
       <h5>自由投稿徵件活動標題</h5>
       <h6>(簡介文字區)OO社區發展協會主辦的OOOO徵文活動，期待能藉由居民們的文字，看見不同視角下的大肚山，不限年齡皆可投稿。</h6>
      </div>
     </div>
    </a>

    <div class="btn-box">
     <a href="submission_d.php" class="btn">徵件詳情<i class="icon-search"></i></a>
     <a href="submit.php" class="btn" target="_blank"><span>馬上</span>投稿<i class="icon-pen"></i></a>
    </div>
   </li>
   <li>
    <a href="submission_d.php" class="content">
     <img src="img/tag-now.svg" alt="徵件中" class="mark"><!-- 徵件中活動顯示標籤 -->
     <div class="pic" style="background-image:url('img/demo/banner2-m.jpg')">
     </div>
     <div class="intro">
      <div class="tag">
       <p>老相片特輯</p>
       <p>~2020-12-31</p>
       <p><i class="icon-remove_red_eye"></i> 1000</p>
      </div>
      <div class="text">
       <h5>自由投稿徵件活動標題</h5>
       <h6>(簡介文字區)OO社區發展協會主辦的OOOO徵文活動，期待能藉由居民們的文字，看見不同視角下的大肚山，不限年齡皆可投稿。</h6>
      </div>
     </div>
    </a>

    <div class="btn-box">
     <a href="submission_d.php" class="btn">徵件詳情<i class="icon-search"></i></a>
     <a href="submit.php" class="btn" target="_blank"><span>馬上</span>投稿<i class="icon-pen"></i></a>
    </div>
   </li>
  </ul>

  <div class="sep-box" data-color="green">
   <i class="icon-read-paper"></i>
   <p>歷次活動</p>
  </div>

  <!-- 【已結束】活動列表(分頁顯示，第一頁6筆，第二頁12筆) -->
  <ul class="box-list finish" data-color="green">
   <li>
    <a href="submission_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/banner2-m.jpg')">
     </div>
     <div class="intro">
      <div class="tag">
       <p>老相片特輯</p>
       <p>徵件已結束</p>
       <p><i class="icon-remove_red_eye"></i> 1000</p>
      </div>
      <div class="text">
       <h5>自由投稿徵件活動標題</h5>
       <h6>(簡介文字區)OO社區發展協會主辦的OOOO徵文活動，期待能藉由居民們的文字，看見不同視角下的大肚山，不限年齡皆可投稿。</h6>
      </div>
     </div>
    </a>

    <div class="btn-box">
     <a href="submission_d.php" class="btn">徵件詳情<i class="icon-search"></i></a>
     <a href="submission_d.php#works" class="btn">看作品</a>
    </div>
   </li>
   <li>
    <a href="submission_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/banner3-m.jpg')">
     </div>
     <div class="intro">
      <div class="tag">
       <p>繪畫藝術家</p>
       <p>徵件已結束</p>
       <p><i class="icon-remove_red_eye"></i> 1000</p>
      </div>
      <div class="text">
       <h5>自由投稿徵件活動標題</h5>
       <h6>(簡介文字區)OO社區發展協會主辦的OOOO徵文活動，期待能藉由居民們的文字，看見不同視角下的大肚山，不限年齡皆可投稿。</h6>
      </div>
     </div>
    </a>
    <div class="btn-box">
     <a href="submission_d.php" class="btn">徵件詳情<i class="icon-search"></i></a>
     <a href="submission_d.php#works" class="btn">看作品</a>
    </div>
   </li>
   <li>
    <a href="submission_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/banner1-m.jpg')">
     </div>
     <div class="intro">
      <div class="tag">
       <p>書寫創作家</p>
       <p>徵件已結束</p>
       <p><i class="icon-remove_red_eye"></i> 1000</p>
      </div>
      <div class="text">
       <h5>自由投稿徵件活動標題</h5>
       <h6>(簡介文字區)OO社區發展協會主辦的OOOO徵文活動，期待能藉由居民們的文字，看見不同視角下的大肚山，不限年齡皆可投稿。</h6>
      </div>
     </div>
    </a>
    <div class="btn-box">
     <a href="submission_d.php" class="btn">徵件詳情<i class="icon-search"></i></a>
     <a href="submission_d.php#works" class="btn">看作品</a>
    </div>
   </li>
   <li>
    <a href="submission_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/banner2-m.jpg')">
     </div>
     <div class="intro">
      <div class="tag">
       <p>影片募集</p>
       <p>徵件已結束</p>
       <p><i class="icon-remove_red_eye"></i> 1000</p>
      </div>
      <div class="text">
       <h5>自由投稿徵件活動標題</h5>
       <h6>投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明...</h6>
      </div>
     </div>
    </a>

    <div class="btn-box">
     <a href="submission_d.php" class="btn">徵件詳情<i class="icon-search"></i></a>
     <a href="submission_d.php#works" class="btn">看作品</a>
    </div>
   </li>
   <li>
    <a href="submission_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/banner2-m.jpg')">
     </div>
     <div class="intro">
      <div class="tag">
       <p>書寫創作家</p>
       <p>徵件已結束</p>
       <p><i class="icon-remove_red_eye"></i> 1000</p>
      </div>
      <div class="text">
       <h5>自由投稿徵件活動標題</h5>
       <h6>投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明...</h6>
      </div>
     </div>
    </a>
    <div class="btn-box">
     <a href="submission_d.php" class="btn">徵件詳情<i class="icon-search"></i></a>
     <a href="submission_d.php#works" class="btn">看作品</a>
    </div>
   </li>
   <li>
    <a href="submission_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/banner2-m.jpg')">
     </div>
     <div class="intro">
      <div class="tag">
       <p>繪畫藝術家</p>
       <p>徵件已結束</p>
       <p><i class="icon-remove_red_eye"></i> 1000</p>
      </div>
      <div class="text">
       <h5>自由投稿徵件活動標題</h5>
       <h6>投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明...</h6>
      </div>
     </div>
    </a>
    <div class="btn-box">
     <a href="submission_d.php" class="btn">徵件詳情<i class="icon-search"></i></a>
     <a href="submission_d.php#works" class="btn">看作品</a>
    </div>
   </li>
  </ul>
  <!-- 頁碼 -->
  <div class="page-num-box" data-color="green">
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

 <?php include("includes/BgPicBox/view3.php") ?>

 
</div>

<?php include("includes/g-footer.php") ?>

 
 

</body>
</html>