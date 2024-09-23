<?php 
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$title = '自由投稿入選作品｜大肚山知識平台';
$description = '自由投稿入選作品｜大肚山知識平台';
$keywords = '自由投稿,入選作品,大肚山知識平台';


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
<div class="list-page submission inner-page" data-bgcolor="green">
 <?php include("includes/g-menu.php") ?>
 <main class="main w1440">
  <div class="title-box" data-color="green">
   <img src="img/title/submission.png" alt="自由投稿">
  </div>

  <!-- 自由投稿分類、本區搜尋 -->
  <div class="list-fun-box" data-color="green">
   <div class="list-cate-box">
    <div class="cate-select">
     <h1>自由投稿</h1>
     <p>全部活動</p>
     <i class="icon-arrow-down"></i>
     </a>
    </div>
    <ul class="drop-menu">
     <li><a href="#">自由投稿活動標題1</a></li>
     <li><a href="#">自由投稿活動標題2</a></li>
     <li><a href="#">自由投稿活動標題3</a></li>
     <li><a href="#">自由投稿活動標題4</a></li>
     <li><a href="#">自由投稿活動標題5</a></li>
     <li><a href="#">自由投稿活動標題6</a></li>
     <li><a href="#">自由投稿活動標題7</a></li>
     <li><a href="#">自由投稿活動標題8</a></li>
     <li><a href="#">自由投稿活動標題9</a></li>
     <li><a href="#">自由投稿活動標題10</a></li>
     <li><a href="#">自由投稿活動標題11</a></li>
     <li><a href="#">自由投稿活動標題12</a></li>
     <li><a href="#">自由投稿活動標題13</a></li>
     <li class="close"><a href="javascript:void(0)">收起 <i class="icon-arrow-top"></i></a></li>
    </ul>
   </div>
   <form class="list-search-box">
    <input type="search" placeholder="搜尋作品">
    <button type="submit"><span>搜尋</span><i class="icon-search"></i></button>
    <div class="tag-box hashtag w-green">
     <span class="green">熱門：</span>
     <!-- 顯示隨機三個關鍵字，點擊直接搜尋字詞 -->
     <a href="?瑞井">瑞井</a>
     <a href="?古井">古井</a>
     <a href="?地瓜">地瓜</a>
    </div>
   </form>
  </div>
  <!-- 自由投稿活動列表 -->
  <!-- 
   ※投稿「文章」： div.pic隱藏
   ※投稿「圖片」、「影片」： h6隱藏 
   ※投稿「圖片+文章」： 正常
  -->
  <ul class="box-list works" data-color="green">
   <li>
    <a href="submission_works_d-1.php" class="content">
     <!-- <div class="pic" style="background-image:url('img/demo/banner1-m.jpg')"></div> -->
     <div class="tag">
      <p>2020-12-31</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>投稿作品標題(文章投稿)</h5>
      <p><span>投稿人姓名</span><span>投稿活動名稱</span></p>
      <h6>
      作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文...</h6>
     </div>
    </a>
    <a href="submission_works_d-1.php" class="btn">觀看更多<i class="icon-search"></i></a>
   </li>
   <li>
    <a href="submission_works_d-1.php" class="content">
     <!-- <div class="pic" style="background-image:url('img/demo/banner1-m.jpg')"></div> -->
     <div class="tag">
      <p>2020-12-31</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>投稿作品標題(文章投稿)</h5>
      <p><span>投稿人姓名</span><span>投稿活動名稱</span></p>
      <h6>
      作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文...</h6>
     </div>
    </a>
    <a href="submission_works_d-1.php" class="btn">觀看更多<i class="icon-search"></i></a>
   </li>
   <li>
    <a href="submission_works_d-1.php" class="content">
     <!-- <div class="pic" style="background-image:url('img/demo/banner1-m.jpg')"></div> -->
     <div class="tag">
      <p>2020-12-31</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>投稿作品標題(文章投稿)</h5>
      <p><span>投稿人姓名</span><span>投稿活動名稱</span></p>
      <h6>
      作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文...</h6>
     </div>
    </a>
    <a href="submission_works_d-1.php" class="btn">觀看更多<i class="icon-search"></i></a>
   </li>
   
   <li>
    <a href="submission_works_d-2.php" class="content">
     <div class="pic" style="background-image:url('img/demo/banner1-m.jpg')"></div>
     <div class="tag">
      <p>2020-12-31</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>投稿作品標題(圖片投稿)</h5>
      <p><span>投稿人姓名</span><span>投稿活動名稱</span></p>
     </div>
    </a>
    <a href="submission_works_d-2.php" class="btn">觀看更多<i class="icon-search"></i></a>
   </li>
   <li>
    <a href="submission_works_d-2.php" class="content">
     <div class="pic" style="background-image:url('img/demo/banner1-m.jpg')"></div>
     <div class="tag">
      <p>2020-12-31</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>投稿作品標題(圖片投稿)</h5>
      <p><span>投稿人姓名</span><span>投稿活動名稱</span></p>

      
     </div>
    </a>
    <a href="submission_works_d-2.php" class="btn">觀看更多<i class="icon-search"></i></a>
   </li>
   <li>
    <a href="submission_works_d-2.ph" class="content">
     <div class="pic" style="background-image:url('img/demo/banner1-m.jpg')"></div>
     <div class="tag">
      <p>2020-12-31</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>自由投稿作品標題(圖片投稿)</h5>
      <p><span>投稿人姓名</span><span>投稿活動名稱</span></p>
      <!-- <h6>作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文...</h6> -->
     </div>
    </a>
    <a href="submission_works_d-2.php" class="btn">觀看更多<i class="icon-search"></i></a>
   </li>

   <li>
    <a href="submission_works_d-4.php" class="content">
     <div class="pic" style="background-image:url('img/demo/banner1-m.jpg')"></div>
     <div class="tag">
      <p>2020-12-31</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>投稿作品標題(圖文投稿)</h5>
      <p><span>投稿人姓名</span><span>投稿活動名稱</span></p>
      <h6>
      作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文...</h6>
     </div>
    </a>
    <a href="submission_works_d-4.php" class="btn">觀看更多<i class="icon-search"></i></a>
   </li>
   <li>
    <a href="submission_works_d-4.php" class="content">
     <div class="pic" style="background-image:url('img/demo/banner1-m.jpg')"></div>
     <div class="tag">
      <p>2020-12-31</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>投稿作品標題(圖文投稿)</h5>
      <p><span>投稿人姓名</span><span>投稿活動名稱</span></p>
      <h6>
      作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文...</h6>
     </div>
    </a>
    <a href="submission_works_d-4.php" class="btn">觀看更多<i class="icon-search"></i></a>
   </li>
   <li>
    <a href="submission_works_d-4.php" class="content">
     <div class="pic" style="background-image:url('img/demo/banner1-m.jpg')"></div>
     <div class="tag">
      <p>2020-12-31</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>自由投稿作品標題(圖文投稿)</h5>
      <p><span>投稿人姓名</span><span>投稿活動名稱</span></p>
      <h6>
      作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文作品內文...</h6>
     </div>
    </a>
    <a href="submission_works_d-4.php" class="btn">觀看更多<i class="icon-search"></i></a>
   </li>
   
   <li>
    <a href="submission_works_d-3.php" class="content">
     <div class="pic" style="background-image:url('img/demo/submit-video.jpg')"></div>
     <div class="tag">
      <p>2020-12-31</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>投稿作品標題(影片投稿)</h5>
      <p><span>投稿人姓名</span><span>投稿活動名稱</span></p>
     </div>
    </a>
    <a href="submission_works_d-3.php" class="btn">觀看更多<i class="icon-search"></i></a>
   </li>
   <li>
    <a href="submission_works_d-3.php" class="content">
     <div class="pic" style="background-image:url('img/demo/submit-video.jpg')"></div>
     <div class="tag">
      <p>2020-12-31</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>投稿作品標題(影片投稿)</h5>
      <p><span>投稿人姓名</span><span>投稿活動名稱</span></p>
     </div>
    </a>
    <a href="submission_works_d-3.php" class="btn">觀看更多<i class="icon-search"></i></a>
   </li>
   <li>
    <a href="submission_works_d-3.php" class="content">
     <div class="pic" style="background-image:url('img/demo/submit-video.jpg')"></div>
     <div class="tag">
      <p>2020-12-31</p>
      <p><i class="icon-remove_red_eye"></i> 1000</p>
     </div>
     <div class="text">
      <h5>投稿作品標題(影片投稿)</h5>
      <p><span>投稿人姓名</span><span>投稿活動名稱</span></p>
     </div>
    </a>
    <a href="submission_works_d-3.php" class="btn">觀看更多<i class="icon-search"></i></a>
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