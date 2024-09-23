<?php 
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$title = '訊息放送文章標題｜大肚山地方知識平台';
$description = '訊息放送文章標題｜大肚山地方知識平台';
$keywords = '訊息放送,大肚山地方知識平台';


?>

<!DOCTYPE html>
<html lang="zh-hang">
<head>
 <?php include("includes/g-meta.php") ?> 
 <script>
  $(function () {
   $('#related-article').owlCarousel({
       items: 3,
       nav: false,
       navText: false,
       autoplay: true,
       loop: $('#related-article').children().length > 1,
       margin: 10,
       dots: true,
       autoplayTimeout: 4000,
       smartSpeed: 2000,
       autoplayHoverPause: true
   });
   
  });
 </script>
</head>

<body>
<div class="article-page inner-page" data-bgcolor="yellow-orange">
 <?php include("includes/g-menu.php") ?>

 <div class="article-page-top"></div>

 <main class="main w1200">
  <!-- 文章內容與資料 -->
  <section id="article-wrap">

   <div class="info-box pc">
    <!-- 文章發佈日期&點閱 -->
    <div>
    <h6><i class="icon-insert_invitation"></i>發佈日期：2020-09-09</h6>
    <h6><i class="icon-remove_red_eye"></i>點閱： 2000</h6>
    </div>
    
    <!-- 導覽路徑 -->
    <ul class="breadcrumb">
     <li><a href="index.php">首頁</a></li>
     <li><a href="news.php">訊息放送</a></li> <!-- 大分類 -->
     <li><a href="news.php">活動訊息</a></li> <!-- 小分類 -->
    </ul>
   </div>

   <article>
    <div class="article-title-box">
     <!-- 文章標題 -->
     <h1>訊息放送文章標題</h1>
     <!-- --- -->

     <!-- 文章發佈日期&點閱(行動板顯示) -->
     <div class="info-box mb">
      <div>
       <h6><i class="icon-insert_invitation"></i>發佈日期：2020-09-09</h6>
       <h6><i class="icon-remove_red_eye"></i>點閱： 2000</h6>
      </div>
     </div>
     <!-- --- -->
    </div>
    <!-- 文章內容(圖文編輯器) -->
    <div class="article-box">
     <img src="img/demo/photo2.jpg" alt=""   style="width:100%;"><br>
     <p>
      圖文內容編輯區<br>
      您可以在此自由編輯文字內容與樣式<br>
      亦可上傳圖片、嵌入Youtube影片、加入<a href="#">超連結</a><br>
      或以html原始碼控制內容樣式。<br>
      預設字體：思源黑體<br>
     </p>
    </div>
    
    <!-- --- -->
    <div class="tag-box">
      <a href="news.php">活動訊息</a>
     </div>

   </article>


   <div class="sep-box" data-color="brown">
     <i class="icon-read-paper"></i>
     <p>相關資料</p>
   </div>

   <div class="more-wrap">

    <!-- 附件下載功能  -->
    <div class="more-box file" data-color="orange">
     <h5>附件下載<i class="icon-arrow-down"></i></h5>
     <div class="content">
      <a href="#">附件檔案名稱.pdf(點擊下載檔案)</a>
      <a href="#">附件檔案名稱.doc(點擊下載檔案)</a>
     </div>
    </div>
    <!-- --- -->

    <!-- Youtube影片崁入  -->
    <div class="more-box video" data-color="blue">
     <h5>影片欣賞<i class="icon-arrow-down"></i></h5>
     <div class="content">
      <ul class="video-list">
       <li>
        <div class="videoWrapper">
         <iframe width="560" height="315" src="https://www.youtube.com/embed/opZr9ebo1dE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
       </li>
       <li>
        <div class="videoWrapper">
         <iframe width="560" height="315" src="https://www.youtube.com/embed/Be41xKf1RqA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
       </li>
       <li>
        <div class="videoWrapper">
         <iframe width="560" height="315" src="https://www.youtube.com/embed/wMyFJ-NYz8U" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
       </li>
      </ul>
     </div>
    </div>
    <!-- --- -->
   </div>

   <?php include("includes/share.php") ?>
  </section>

  <!-- 更多文章(關鍵字推薦&上下篇) -->
  <section id="article-more">
 
   <!-- 上下篇文章 & 返回列表連結 -->
   <div class="page-link-box">
    <a href="news_d.php"><i class="icon-arrow-left"></i><p>下一篇文章標題</p></a>
    
    <a href="news.php" class="back"><p>返回列表</p></a>

    <a href="news_d.php"><p>下一篇文章標題</p><i class="icon-arrow-right"></i></a>
   </div>

  </section>



 </main>



 <?php include("includes/BgPicBox/view2.php") ?>

 
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
  </script>
 
 

</body>
</html>