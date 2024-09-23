<?php 
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$title = '特約分享文章標題｜大肚山地方知識平台';
$description = '特約分享文章標題｜大肚山地方知識平台';
$keywords = '特約分享,大肚山地方知識平台';


?>

<!DOCTYPE html>
<html lang="zh-hang">
<head>
 <?php include("includes/g-meta.php") ?> 
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
     <li><a href="history.php">特約分享</a></li> <!-- 大分類 -->
     <li><a href="history.php">特約作家</a></li> <!-- 小分類 -->
    </ul>
   </div>

   <article>
    <div class="article-title-box">
     <!-- 文章標題 -->
     <h1>特約分享文章標題</h1>
     <!-- --- -->

     <!-- 作者名字 -->
     <h6>作者：許莉青</h6>
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
      <a href="#">關鍵字1</a>
      <a href="#">關鍵字2</a>
      <a href="#">關鍵字3</a>
      <a href="#">關鍵字4</a>
     </div>
     <!-- --- -->
    </div>
    <!-- 文章內容(圖文編輯器) -->
    <div class="article-box">
     <img src="img/demo/photo3.jpg" alt=""   style="width:100%;"><br>
     <p>
      圖文內容編輯區<br>
      您可以在此自由編輯文字內容與樣式<br>
      亦可上傳圖片、嵌入Youtube影片、加入<a href="#">超連結</a><br>
      或以html原始碼控制內容樣式。<br>
      預設字體：思源黑體<br>
     </p>
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
   </article>


   <div class="sep-box" data-color="brown">
     <i class="icon-write-paper"></i>
     <p>本文作者</p>
   </div>

   <div class="more-wrap author-wrap">
    <div class="more-box">
    <div class="content author">
     <div class="pic" style="background-image:url('img/demo/guide2.jpg')"></div>
     <div class="text">
      <!-- 在地嚮導標題 -->
      <h3>皮影藝術 許莉青</h3>

      <!-- 在地嚮導簡介文字 -->
      <p>東海大學藝術系系友，創立東海皮影劇團，職人經歷30餘年。</p>
      
      <!-- 在地嚮導內文摘要 -->
      <h6>
      「優游在傳統與現代之間的皮影職人」──許莉青老師為東海大學美術系第一屆系友，目前任教於母校美術系。許老師從大一起就接觸皮影戲，後來與同學創辦皮影劇團，以藝術推廣、偏鄉...</h6>

      <a href="guide_d.php" class="btn" data-color="orange">詳細介紹<i class="icon-arrow-right"></i></a>
      <a href="guide_d.php#related-article" class="btn" data-color="green">撰文一覽<i class="icon-arrow-right"></i></a>

     </div>

     </div>
     


    </div>
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
    <a href="share_d.php"><i class="icon-arrow-left"></i><p>下一篇文章標題</p></a>
    
    <a href="share.php" class="back"><p>返回列表</p></a>

    <a href="share_d.php"><p>下一篇文章標題</p><i class="icon-arrow-right"></i></a>
   </div>

  </section>

 </main>


 <?php include("includes/BgPicBox/view4.php") ?>

 
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