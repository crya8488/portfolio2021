<?php 
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$title = '生活記憶文章標題｜大肚山地方知識平台';
$description = '生活記憶文章標題｜大肚山地方知識平台';
$keywords = '生活記憶,大肚山知識平台';


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
<div class="article-page inner-page" data-bgcolor="orange">
 
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
     <li><a href="history.php">地方簡史</a></li> <!-- 大分類 -->
     <li><a href="history.php">地理小知識</a></li> <!-- 小分類 -->
    </ul>
   </div>

   <article>
    <div class="article-title-box">
     <!-- 文章標題 -->
     <h1>生活記憶文章標題</h1>
     <!-- --- -->

     <!-- 文章發佈日期&點閱(行動板顯示) -->
     <div class="info-box mb">
      <div>
       <h6><i class="icon-insert_invitation"></i>發佈日期：2020-09-09</h6>
       <h6><i class="icon-remove_red_eye"></i>點閱： 2000</h6>
      </div>
     </div>
     <!-- --- -->

     <!-- 文章關鍵字 
     ※後台管理關鍵字項目，編輯文章時選取使用的關鍵字 (可多選)
     ※前台點擊關鍵字，搜尋出有使用相同關鍵字的文章 -->
     <div class="tag-box">
      <a href="#">瑞井</a>
      <a href="#">古井</a>
      <a href="#">大肚山古道旅遊</a>
      <a href="#">大肚山歷史</a>
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
    

    <!-- 資料來源，與關鍵字同功能
    ※後台管理資料來源項目，編輯文章時選取使用的資料 (可多選)
    ※前台點擊資料項目，搜尋出有使用相同資料來源的文章 -->
    <div class="more-box source" data-color="brown">
     <h5>資料來源<i class="icon-arrow-down"></i></h5>
     <div class="content">
      <a href="#">資料來源名稱(點擊搜尋同資料來源文章)</a>
      <a href="#">東海大學環境教學資源中心</a>
      <a href="#">東海好厝邊</a>
     </div>
    </div>
    <!-- --- -->

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

    <!-- 相簿功能  -->
    <div class="more-box album" data-color="green">
     <h5>相片分享<i class="icon-arrow-down"></i></h5>
     <div class="content">
      <div class="photos" id="gallery">
       <a href="img/demo/photo1.jpg"><img src="img/demo/photo1.jpg" alt="瑞井古井紅土"></a>
       <a href="img/demo/photo2.jpg"><img src="img/demo/photo2.jpg" alt="瑞井古井"></a>
       <a href="img/demo/photo3.jpg"><img src="img/demo/photo3.jpg" alt="瑞井社區土角厝"></a>
       <a href="img/demo/photo4.jpg"><img src="img/demo/photo4.jpg" alt="鯉魚山"></a>
       <a href="img/demo/photo5.jpg"><img src="img/demo/photo5.jpg" alt="步道地圖"></a>
       <a href="img/demo/photo6.jpg"><img src="img/demo/photo6.jpg" alt="亨德像"></a>
       <a href="img/demo/photo7.jpg"><img src="img/demo/photo7.jpg" alt="亨德紀念公園"></a>
       <a href="img/demo/photo8.jpg"><img src="img/demo/photo8.jpg" alt=""></a>
      </div>

      <a href="javascript:void(0)" class="btn all" data-color="green">展開全部<i class="icon-apps"></i></a>
      <a href="javascript:void(0)" class="btn row" data-color="green">一列顯示<i class="icon-keyboard_control"></i></a>

      <a href="gallery.php" class="btn" data-color="green">前往影像藝廊<i class="icon-arrow-right"></i></a>
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

   <div class="sep-box" data-color="orange">
     <i class="icon-book"></i>
     <p>推薦閱讀</p>
   </div>

   <!-- 文章列表 -->
   <ul class="box-list" data-color="orange" id="related-article">
    <li>
     <a href="#" class="content">
      <div class="pic" style="background-image:url('img/demo/banner1-m.jpg')"></div>
      <div class="tag">
       <p>2020-12-31</p>
       <p><i class="icon-remove_red_eye"></i> 1000</p>
      </div>
      <div class="text">
       <h5>大肚山歷史之行‧旅遊記趣</h5>
       <h6>文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要...</h6>
      </div>
     </a>
     <a href="#" class="btn">閱讀更多<i class="icon-search"></i></a>
    </li>
    <li>
     <a href="#" class="content">
      <div class="pic" style="background-image:url('img/demo/banner1-m.jpg')"></div>
      <div class="tag">
       <p>2020-12-31</p>
       <p><i class="icon-remove_red_eye"></i> 1000</p>
      </div>
      <div class="text">
       <h5>大肚山歷史之行‧旅遊記趣</h5>
       <h6>文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要...</h6>
      </div>
     </a>
     <a href="#" class="btn">閱讀更多<i class="icon-search"></i></a>
    </li>
    <li>
     <a href="#" class="content">
      <div class="pic" style="background-image:url('img/demo/banner1-m.jpg')"></div>
      <div class="tag">
       <p>2020-12-31</p>
       <p><i class="icon-remove_red_eye"></i> 1000</p>
      </div>
      <div class="text">
       <h5>大肚山歷史之行‧旅遊記趣</h5>
       <h6>文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要...</h6>
      </div>
     </a>
     <a href="#" class="btn">閱讀更多<i class="icon-search"></i></a>
    </li>
    <li>
     <a href="#" class="content">
      <div class="pic" style="background-image:url('img/demo/banner1-m.jpg')"></div>
      <div class="tag">
       <p>2020-12-31</p>
       <p><i class="icon-remove_red_eye"></i> 1000</p>
      </div>
      <div class="text">
       <h5>大肚山歷史之行‧旅遊記趣</h5>
       <h6>文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要...</h6>
      </div>
     </a>
     <a href="#" class="btn">閱讀更多<i class="icon-search"></i></a>
    </li>
    <li>
     <a href="#" class="content">
      <div class="pic" style="background-image:url('img/demo/banner1-m.jpg')"></div>
      <div class="tag">
       <p>2020-12-31</p>
       <p><i class="icon-remove_red_eye"></i> 1000</p>
      </div>
      <div class="text">
       <h5>大肚山歷史之行‧旅遊記趣</h5>
       <h6>文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要...</h6>
      </div>
     </a>
     <a href="#" class="btn">閱讀更多<i class="icon-search"></i></a>
    </li>
    <li>
     <a href="#" class="content">
      <div class="pic" style="background-image:url('img/demo/banner1-m.jpg')"></div>
      <div class="tag">
       <p>2020-12-31</p>
       <p><i class="icon-remove_red_eye"></i> 1000</p>
      </div>
      <div class="text">
       <h5>大肚山歷史之行‧旅遊記趣</h5>
       <h6>文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要...</h6>
      </div>
     </a>
     <a href="#" class="btn">閱讀更多<i class="icon-search"></i></a>
    </li>


   </ul>
  
   <!-- 上下篇文章 & 返回列表連結 -->
   <div class="page-link-box">
    <a href="history_d.php"><i class="icon-arrow-left"></i><p>下一篇文章標題</p></a>
    
    <a href="history.php" class="back"><p>返回列表</p></a>

    <a href="history_d.php"><p>下一篇文章標題</p><i class="icon-arrow-right"></i></a>
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
  </script>
 
 

</body>
</html>