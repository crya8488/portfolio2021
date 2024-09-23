<?php 
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$title = '全站搜尋｜大肚山地方知識平台';
$description = '全站搜尋｜大肚山地方知識平台';
$keywords = '全站搜尋,大肚山地方知識平台';


?>

<!DOCTYPE html>
<html lang="zh-hang">
<head>
 <?php include("includes/g-meta.php") ?> 

<?php include("includes/TagSearch.php") ?> 
<!-- <script>
$(function () { 
 $('p').$(selector).find(selector2);
 })
</script> -->

</head>

<body>
<div class="list-page inner-page search-page" data-bgcolor="yellow-orange">
 <?php include("includes/g-menu.php") ?>
 <main class="main w1440">
  <div class="title-box" data-color="orange">
   <h1>全站搜尋</h1>
  </div>

  <!-- 文章分類、本區搜尋 -->
  <div class="list-fun-box" data-color="yellow-orange">
  
   
   <form class="list-search-box ui-widget">
    <input type="search" placeholder="全站搜尋" id="tagsearch">
    <button type="submit"><span>搜尋</span><i class="icon-search"></i></button>
    
    
   </form>
   <div class="tag-box">
   <h6>
     <span class="orange">熱門搜尋：</span>
     <a href="?瑞井">瑞井</a>
     <a href="?古井">古井</a>
     <a href="?地瓜">地瓜</a>
     <a href="?大肚山">大肚山</a>
     <a href="?鯉魚山">鯉魚山</a>
     <a href="?職人>">職人</a>
    </h6>
    </div>
   
  </div>

  <div class="search-word t-center">
   <h5>「<span>大肚山</span>」：找到30篇文章</h5>
  </div>

  <!-- 文章列表 -->
  <ul class="search-list">
   <li>
    <a href="history_d.php">
     <h5 class="cate">地方簡史</h5>
     <p>
      <span class="date">2020-11-10</span>
      <span class="title">大肚山歷史</span>
     </p>
    </a>
   </li>
   <li>
    <a href="submission_d.php">
     <h5 class="cate">自由投稿</h5>
     <p>
      <span class="date">2020-11-05</span>
      <span class="title">【看見大肚山】插畫徵件</span>
     </p>
    </a>
   </li>
   <li>
    <a href="news_d.php">
     <h5 class="cate">訊息放送</h5>
     <p>
      <span class="date">2020-11-05</span>
      <span class="title">活動資訊：我來自大肚山 - 2020大肚山在地職人博覽會</span>
     </p>
    </a>
   </li>
   <li>
    <a href="memory_d.php">
     <h5 class="cate">生活記憶</h5>
     <p>
      <span class="date">2020-10-25</span>
      <span class="title">大肚山瑞井社區</span>
     </p>
    </a>
   </li>
   <li>
    <a href="share_d.php">
     <h5 class="cate">特約分享</h5>
     <p>
      <span class="date">2020-10-20</span>
      <span class="title">大肚山紅土孕育的地瓜</span>
     </p>
    </a>
   </li>
   <li>
    <a href="guide_d.php">
     <h5 class="cate">在地嚮導</h5>
     <p>
      <span class="date">2020-10-10</span>
      <span class="title">大肚山茶藝職人</span>
     </p>
    </a>
   </li>
   <li>
    <a href="history_d.php">
     <h5 class="cate">地方簡史</h5>
     <p>
      <span class="date">2020-11-10</span>
      <span class="title">大肚山歷史</span>
     </p>
    </a>
   </li>
   <li>
    <a href="submission_d.php">
     <h5 class="cate">自由投稿</h5>
     <p>
      <span class="date">2020-11-05</span>
      <span class="title">【看見大肚山】插畫徵件</span>
     </p>
    </a>
   </li>
   <li>
    <a href="news_d.php">
     <h5 class="cate">訊息放送</h5>
     <p>
      <span class="date">2020-11-05</span>
      <span class="title">活動資訊：我來自大肚山 - 2020大肚山在地職人博覽會</span>
     </p>
    </a>
   </li>
   <li>
    <a href="memory_d.php">
     <h5 class="cate">生活記憶</h5>
     <p>
      <span class="date">2020-10-25</span>
      <span class="title">大肚山瑞井社區</span>
     </p>
    </a>
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

 
 

</body>
</html>