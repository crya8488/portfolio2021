<?php 
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$title = '影像藝廊｜大肚山知識平台';
$description = '影像藝廊｜大肚山知識平台';
$keywords = '影像藝廊,大肚山知識平台';


?>

<!DOCTYPE html>
<html lang="zh-hang">
<head>
 <?php include("includes/g-meta.php") ?> 
 <?php include("includes/TagSearch.php") ?> 
</head>

<body>
<div class="list-page inner-page" data-bgcolor="orange">
 <?php include("includes/g-menu.php") ?>
 <main class="main w1440">
  <div class="title-box" data-color="orange">
   <img src="img/title/gallery.png" alt="影像藝廊">
  </div>

  <!-- 文章分類、本區搜尋 -->
  <div class="list-fun-box" data-color="orange">
   <div class="list-cate-box">
    <div class="cate-select">
     <h1>影像藝廊</h1>
     <p>全部影像</p><!-- 顯示目前的分類名稱 -->
     <i class="icon-arrow-down"></i>
     </a>
    </div>
    <!-- 列出所有分類名稱 -->
    <ul class="drop-menu">
     <li><a href="gallery.php">全部影像</a></li>
     <li><a href="gallery.php">地方簡史影像</a></li>
     <li><a href="gallery.php">生活記憶影像</a></li>
     <li><a href="gallery.php">特約分享影像</a></li>
     <li class="close"><a href="javascript:void(0)">收起 <i class="icon-arrow-top"></i></a></li>
    </ul>
   </div>
   <form class="list-search-box ui-widget">
    <input type="search" placeholder="關鍵字搜尋" id="tagsearch">
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
  
  <!-- 相片列表 -->
  <ul class="box-list gallery" data-color="orange">
   <li>
    <a href="history_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/banner1-m.jpg')"></div>
    </a>
    <div class="gallery-info">
     <a href="history_d.php" class="title">
      <h5>文章標題文章標題文章標題文章標題文章標題</h5>
     </a>
     <div class="tag-box">
      <a href="#">關鍵字</a>
      <a href="#">關鍵字</a>
      <a href="#">關鍵字</a>
     </div>
    </div>
   </li>
   <li>
    <a href="history_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/banner2-m.jpg')"></div>
    </a>
    <div class="gallery-info">
     <a href="history_d.php" class="title">
      <h5>文章標題文章標題文章標題文章標題文章標題</h5>
     </a>
     <div class="tag-box">
      <a href="#">關鍵字</a>
      <a href="#">關鍵字</a>
      <a href="#">關鍵字</a>
     </div>
    </div>
   </li>
   <li>
    <a href="history_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/banner3-m.jpg')"></div>
    </a>
    <div class="gallery-info">
     <a href="history_d.php" class="title">
      <h5>文章標題文章標題文章標題文章標題文章標題</h5>
     </a>
     <div class="tag-box">
      <a href="#">關鍵字</a>
      <a href="#">關鍵字</a>
      <a href="#">關鍵字</a>
     </div>
    </div>
   </li>
   <li>
    <a href="history_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/banner1-m.jpg')"></div>
    </a>
    <div class="gallery-info">
     <a href="history_d.php" class="title">
      <h5>文章標題文章標題文章標題文章標題文章標題</h5>
     </a>
     <div class="tag-box">
      <a href="#">關鍵字</a>
      <a href="#">關鍵字</a>
      <a href="#">關鍵字</a>
     </div>
    </div>
   </li>
   <li>
    <a href="history_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/banner2-m.jpg')"></div>
    </a>
    <div class="gallery-info">
     <a href="history_d.php" class="title">
      <h5>文章標題文章標題文章標題文章標題文章標題</h5>
     </a>
     <div class="tag-box">
      <a href="#">關鍵字</a>
      <a href="#">關鍵字</a>
      <a href="#">關鍵字</a>
     </div>
    </div>
   </li>
   <li>
    <a href="history_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/banner3-m.jpg')"></div>
    </a>
    <div class="gallery-info">
     <a href="history_d.php" class="title">
      <h5>文章標題文章標題文章標題文章標題文章標題</h5>
     </a>
     <div class="tag-box">
      <a href="#">關鍵字</a>
      <a href="#">關鍵字</a>
      <a href="#">關鍵字</a>
     </div>
    </div>
   </li>
   <li>
    <a href="history_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/banner1-m.jpg')"></div>
    </a>
    <div class="gallery-info">
     <a href="history_d.php" class="title">
      <h5>文章標題文章標題文章標題文章標題文章標題</h5>
     </a>
     <div class="tag-box">
      <a href="#">關鍵字</a>
      <a href="#">關鍵字</a>
      <a href="#">關鍵字</a>
     </div>
    </div>
   </li>
   <li>
    <a href="history_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/banner2-m.jpg')"></div>
    </a>
    <div class="gallery-info">
     <a href="history_d.php" class="title">
      <h5>文章標題文章標題文章標題文章標題文章標題</h5>
     </a>
     <div class="tag-box">
      <a href="#">關鍵字</a>
      <a href="#">關鍵字</a>
      <a href="#">關鍵字</a>
     </div>
    </div>
   </li>
   <li>
    <a href="history_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/banner3-m.jpg')"></div>
    </a>
    <div class="gallery-info">
     <a href="history_d.php" class="title">
      <h5>文章標題文章標題文章標題文章標題文章標題</h5>
     </a>
     <div class="tag-box">
      <a href="#">關鍵字</a>
      <a href="#">關鍵字</a>
      <a href="#">關鍵字</a>
     </div>
    </div>
   </li>
   <li>
    <a href="history_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/banner1-m.jpg')"></div>
    </a>
    <div class="gallery-info">
     <a href="history_d.php" class="title">
      <h5>文章標題文章標題文章標題文章標題文章標題</h5>
     </a>
     <div class="tag-box">
      <a href="#">關鍵字</a>
      <a href="#">關鍵字</a>
      <a href="#">關鍵字</a>
     </div>
    </div>
   </li>
   <li>
    <a href="history_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/banner2-m.jpg')"></div>
    </a>
    <div class="gallery-info">
     <a href="history_d.php" class="title">
      <h5>文章標題文章標題文章標題文章標題文章標題</h5>
     </a>
     <div class="tag-box">
      <a href="#">關鍵字</a>
      <a href="#">關鍵字</a>
      <a href="#">關鍵字</a>
     </div>
    </div>
   </li>
   <li>
    <a href="history_d.php" class="content">
     <div class="pic" style="background-image:url('img/demo/banner3-m.jpg')"></div>
    </a>
    <div class="gallery-info">
     <a href="history_d.php" class="title">
      <h5>文章標題文章標題文章標題文章標題文章標題</h5>
     </a>
     <div class="tag-box">
      <a href="#">關鍵字</a>
      <a href="#">關鍵字</a>
      <a href="#">關鍵字</a>
     </div>
    </div>
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

 <?php include("includes/BgPicBox/view1.php") ?>

 
</div>

<?php include("includes/g-footer.php") ?>

 
  <!-- Light Gallery -->
 <script>
  
   // 產品照片相簿
   $('#gallery').lightGallery({
    galleryId: 1,
    rotate: false,
    flipHorizontal: false,
  		thumbnail:true,
    animateThumb: false,
    showThumbByDefault: false,
    download: false
    
  	}); 
  </script>

</body>
</html>