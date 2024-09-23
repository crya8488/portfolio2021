<?php 
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$title = '生活記憶｜大肚山地方知識平台';
$description = '生活記憶｜大肚山地方知識平台';
$keywords = '生活記憶,大肚山地方知識平台';


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
   <img src="img/title/memory.png" alt="生活記憶">
  </div>

  <!-- 文章分類、本區搜尋 -->
  <div class="list-fun-box" data-color="orange">
   <div class="list-cate-box">
    <div class="cate-select">
     <h1>生活記憶</h1>
     <p>全部文章</p><!-- 顯示目前的分類名稱 -->
     <i class="icon-arrow-down"></i>
     </a>
    </div>
    <!-- 列出所有分類名稱 -->
    <ul class="drop-menu">
     <li><a href="memory.php">全部文章</a></li>
     <li><a href="memory.php">早年生活</a></li>
     <li><a href="memory.php">庶民信仰</a></li>
     <li><a href="memory.php">閒暇娛樂</a></li>
     <li><a href="memory.php">鄉賢小傳</a></li>
     <li><a href="memory.php">鄉野軼事</a></li>
     <li><a href="memory.php">消失的語言</a></li>
     <li class="close"><a href="javascript:void(0)">收起 <i class="icon-arrow-top"></i></a></li>
    </ul>
   </div>
   <div class="list-search-box">
    <input type="search" placeholder="搜尋本區文章">
    <button type="submit"><span>搜尋</span><i class="icon-search"></i></button>
    <div class="tag-box hashtag white">
     <span class="orange">熱門：</span>
     <!-- 顯示隨機三個關鍵字，點擊直接搜尋字詞 -->
     <a href="?瑞井">瑞井</a>
     <a href="?古井">古井</a>
     <a href="?地瓜">地瓜</a>
    </div>
   </div>
  </div>
  <!-- 文章列表 -->
  <ul class="box-list" data-color="orange">
   <li>
    <a href="memory_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/photo1.jpg')"></div>
     <div class="tag">
      <p>2020-12-31</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>生活記憶文章標題</h5>
      <h6>文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要...</h6>
     </div>
    </a>
    <a href="memory_d.php" class="btn">閱讀更多<i class="icon-search"></i></a>
   </li>
   <li>
    <a href="memory_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/photo1.jpg')"></div>
     <div class="tag">
      <p>2020-12-31</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>生活記憶文章標題</h5>
      <h6>文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要...</h6>
     </div>
    </a>
    <a href="memory_d.php" class="btn">閱讀更多<i class="icon-search"></i></a>
   </li>
   <li>
    <a href="memory_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/photo1.jpg')"></div>
     <div class="tag">
      <p>2020-12-31</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>生活記憶文章標題</h5>
      <h6>文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要...</h6>
     </div>
    </a>
    <a href="memory_d.php" class="btn">閱讀更多<i class="icon-search"></i></a>
   </li>
   <li>
    <a href="memory_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/photo1.jpg')"></div>
     <div class="tag">
      <p>2020-12-31</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>生活記憶文章標題</h5>
      <h6>文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要...</h6>
     </div>
    </a>
    <a href="memory_d.php" class="btn">閱讀更多<i class="icon-search"></i></a>
   </li>
   <li>
    <a href="memory_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/photo1.jpg')"></div>
     <div class="tag">
      <p>2020-12-31</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>生活記憶文章標題</h5>
      <h6>文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要...</h6>
     </div>
    </a>
    <a href="memory_d.php" class="btn">閱讀更多<i class="icon-search"></i></a>
   </li>
   <li>
    <a href="memory_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/photo1.jpg')"></div>
     <div class="tag">
      <p>2020-12-31</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>生活記憶文章標題</h5>
      <h6>文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要...</h6>
     </div>
    </a>
    <a href="memory_d.php" class="btn">閱讀更多<i class="icon-search"></i></a>
   </li>
   <li>
    <a href="memory_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/photo1.jpg')"></div>
     <div class="tag">
      <p>2020-12-31</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>生活記憶文章標題</h5>
      <h6>文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要...</h6>
     </div>
    </a>
    <a href="memory_d.php" class="btn">閱讀更多<i class="icon-search"></i></a>
   </li>
   <li>
    <a href="memory_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/photo1.jpg')"></div>
     <div class="tag">
      <p>2020-12-31</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>生活記憶文章標題</h5>
      <h6>文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要...</h6>
     </div>
    </a>
    <a href="memory_d.php" class="btn">閱讀更多<i class="icon-search"></i></a>
   </li>
   <li>
    <a href="memory_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/photo1.jpg')"></div>
     <div class="tag">
      <p>2020-12-31</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>生活記憶文章標題</h5>
      <h6>文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要...</h6>
     </div>
    </a>
    <a href="memory_d.php" class="btn">閱讀更多<i class="icon-search"></i></a>
   </li>
   <li>
    <a href="memory_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/photo1.jpg')"></div>
     <div class="tag">
      <p>2020-12-31</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>生活記憶文章標題</h5>
      <h6>文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要...</h6>
     </div>
    </a>
    <a href="memory_d.php" class="btn">閱讀更多<i class="icon-search"></i></a>
   </li>
   <li>
    <a href="memory_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/photo1.jpg')"></div>
     <div class="tag">
      <p>2020-12-31</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>生活記憶文章標題</h5>
      <h6>文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要...</h6>
     </div>
    </a>
    <a href="memory_d.php" class="btn">閱讀更多<i class="icon-search"></i></a>
   </li>
   <li>
    <a href="memory_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/photo1.jpg')"></div>
     <div class="tag">
      <p>2020-12-31</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>生活記憶文章標題</h5>
      <h6>文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要...</h6>
     </div>
    </a>
    <a href="memory_d.php" class="btn">閱讀更多<i class="icon-search"></i></a>
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

 <?php include("includes/BgPicBox/view3.php") ?>

 
</div>

<?php include("includes/g-footer.php") ?>

 
 

</body>
</html>