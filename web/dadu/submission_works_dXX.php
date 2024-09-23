<?php 
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$title = '投稿作品標題｜大肚山知識平台';
$description = '投稿作品標題｜大肚山知識平台';
$keywords = '投稿作品,大肚山知識平台';


?>

<!DOCTYPE html>
<html lang="zh-hang">
<head>
 <?php include("includes/g-meta.php") ?> 

</head>

<body>
<div class="article-page inner-page submission" data-bgcolor="green">

 <?php include("includes/g-menu.php") ?>

 <div class="article-page-top"></div>

 <main class="main w1200">
  <!-- 文章內容與資料 -->
  <section id="article-wrap">

   <div class="title-box" data-color="green">
    <img src="img/title/submission.png" alt="自由投稿">
   </div>

   <!-- 發佈日期、點閱、導覽路徑(行動版隱藏) -->
   <div class="info-box pc">
    <!-- 文章發佈日期&點閱 -->
    <div>
    <h6><i class="icon-insert_invitation"></i>發佈日期：2020-09-09</h6>
    <h6><i class="icon-remove_red_eye"></i>點閱： 2000</h6>
    </div>
    
    <!-- 導覽路徑 -->
    <ul class="breadcrumb">
     <li><a href="index.php">首頁</a></li>
     <li><a href="submission.php">自由投稿</a></li>
     <li><a href="submission_d.php">看見大肚山徵文活動</a></li> <!-- 投稿活動頁面 -->
    </ul>
   </div>

   <article>
    <div class="article-title-box">
     <!-- 文章標題 -->
     <h1>投稿作品標題(文章投稿)</h1>
     <!-- --- -->

     <!-- 投稿者名字(會員名字)、投稿活動名稱 -->
     <h6>投稿者：林小美</h6>
     <h6>投稿活動：大肚山徵文活動</h6>
     <!-- --- -->

     <!-- 發佈日期、點閱、導覽路徑(行動版顯示) -->
     <div class="info-box mb">
      <!-- 文章發佈日期&點閱 -->
      <div>
      <h6><i class="icon-insert_invitation"></i>發佈日期：2020-09-09</h6>
      <h6><i class="icon-remove_red_eye"></i>點閱： 2000</h6>
      </div>
     </div>
    </div>
    

     <!-- 【投稿文章區】(圖文編輯器)
     ※ 如本活動有徵文，此區顯示(必填)，否則隱藏。 -->
    <div class="article-box submit-box">
      <p>
       【投稿文章區】圖文內容編輯區<br>
       投稿者可以在此自由編輯文字內容與樣式<br>
       亦可上傳圖片、嵌入Youtube影片、加入<a href="#">超連結</a><br>
       或以html原始碼控制內容樣式。<br>
       預設字體：思源黑體<br>
       
      </p>
      <hr>

    <!-- 【投稿影片區】  
    ※ 如本活動有徵影片，此區顯示，否則隱藏。-->
    <div class="submit-video submit-box">

     <!-- 顯示封面圖，點擊連結至影片網址 -->
     <!-- <a href="#" class="cover" target="_blank"><img src="img/demo/photo1.jpg" alt="影片封面圖"></a> -->
     <img src="img/demo/photo1.jpg" alt="影片封面圖">

     <!-- 圖文編輯器 -->
     <div class="article-box">
      <p>
      ( ↑ 影片封面圖 )<br>
       圖文內容編輯區<br>
       投稿者可以在此輸入影片介紹、創作理念等等。(非必填)
      </p>
     </div>

     <!-- 連結按鈕 -->
     <div class="btn-block">
      <a href="#" class="all-big-btn" data-color="orange" target="_blank">觀賞影片<i class="icon-play_circle_outline"></i></a>
     </div>

    </div>
    </div>
     <!-- --- -->
   </div>

   
    
    
    


   </article>
   
   <!-- 上下篇文章 & 返回列表連結 -->
   <div class="page-link-box" data-color="green">
    <a href="submission_works_d.php"><i class="icon-arrow-left"></i><p>上一篇投稿作品標題</p></a>
    
    <a href="submission_works.php" class="back"><p>返回列表</p></a>

    <a href="submission_works_d.php"><p>下一篇投稿作品標題</p><i class="icon-arrow-right"></i></a>
   </div>
   
   <?php include("includes/share.php") ?>

   
  </section>

  <!-- 更多(徵件活動) -->
  <section id="article-more">

   <div class="sep-box" data-color="green">
      <i class="icon-write-paper"></i>
      <p>徵件活動</p>
    </div>
   
   <!-- 活動Banner -->
   <div class="coverpic-box">
    <img src="img/demo/submission1.jpg" alt="">
   </div>
   
   <!-- 活動主要資訊(標題、類別、狀態、簡介、徵件開始/結束日期) -->
   <article class="main-box">
     <div class="submission-info">
      <!-- 活動標題 -->
      <h1>看見大肚山徵文活動(活動標題)</h1>
      <!-- --- -->

      <!-- 類型(後台手動輸入)、狀態(徵件中/已結束) -->
      <h5><span>徵件類型：書寫創作</span><span>狀態：徵件已結束</span></h5>

      <!-- 徵稿簡介 -->
      <p>(簡介文字區)OO社區發展協會主辦的【看見大肚山】徵文活動，期待能藉由居民們的文字，看見不同視角下的大肚山，不限年齡皆可投稿。</p>
     </div>
     <div class="submission-date">
      <div class="start">
       <h5>投稿開放</h5>
       <p>2020</p>
       <h3>10<span>月</span>10<span>日</span></h3>
       <p>(星期六)</p>
      </div>
      <div class="end">
       <h5>投稿截止</h5>
       <p>2020</p>
       <h3>11<span>月</span>20<span>日</span></h3>
       <p>(星期五)</p>
      </div>

     </div>

   </article>
   
   <!-- 連結按鈕 -->
   <div class="btn-block">
    <!-- 前往此活動資訊頁 -->
    <a href="submission_d.php" class="all-big-btn" data-color="green">徵件詳情<i class="icon-search"></i></a>
    <!-- 前往此活動入選作品列表頁 -->
    <a href="submission_works.php" class="all-big-btn" data-color="orange">入選作品一覽<i class="icon-book"></i></a>
   </div>

  </section>

 </main>



 <?php include("includes/BgPicBox/view3.php") ?>

 

 
</div>

<?php include("includes/g-footer.php") ?>

<!-- Light Gallery -->
<script>
  // 相簿
  $('#gallery').lightGallery({
   galleryId: 2,
   rotate: false,
   flipHorizontal: false,
   thumbnail:true,
   animateThumb: false,
   showThumbByDefault: false,
   download: false
   
  }); 
  $('#video-gallery').lightGallery({
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