<?php 
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$title = '我來自大肚山‧大肚山地方知識平台';
$description = '我來自大肚山‧大肚山地方知識平台';
$keywords = '我來自大肚山,大肚山地方知識平台,大肚山';


?>

<!DOCTYPE html>
<html lang="zh-hang">
<head>
 <?php include("includes/g-meta.php") ?> 
 <script src="plugin/owl/owl.carousel.min.js"></script>
<link href="plugin/owl/owl.carousel.min.css" rel="stylesheet" type="text/css" />
<link href="plugin/owl/owl.theme.default.min.css" rel="stylesheet" type="text/css" /> 
<script src="js/index.js"></script>  

</head>

<body>

 <?php include("includes/g-menu.php") ?>

 <div class="index-page">

  <div class="banner-box">
   

   <ul class="banner-pc">
    <li>
     <a href="#">
      <img src="img/demo/banner1.jpg" alt="大肚山知識平台Banner1">
     </a>
    </li>
    <li>
     <a href="#">
      <img src="img/demo/banner2.jpg" alt="大肚山知識平台Banner2">
     </a>
    </li>
    <li>
     <a href="#">
      <img src="img/demo/banner3.jpg" alt="大肚山知識平台Banner3">
     </a>
    </li>
   </ul>

   <ul class="banner-m">
    <li>
     <a href="#">
      <img src="img/demo/banner1-m.jpg" alt="大肚山知識平台Banner1">
     </a>
    </li>
    <li>
     <a href="#">
      <img src="img/demo/banner2-m.jpg" alt="大肚山知識平台Banner2">
     </a>
    </li>
    <li>
     <a href="#">
      <img src="img/demo/banner3-m.jpg" alt="大肚山知識平台Banner3">
     </a>
    </li>
   </ul>

   <div class="cloud no-drag">
    <img src="img/idx/cloud1.png" alt="">
    <img src="img/idx/cloud2.png" alt="">
    <img src="img/idx/cloud3.png" alt="">
    <img src="img/idx/cloud4.png" alt="">
   </div>

  </div>


  <div class="idxstar main w1200">
   <div id="mon-star">
    
    <div class="close"><i class="icon-clear"></i></div>
    <div class="title">
     <h4>本月之星</h4>
     <!-- 本月主題 -->
     <h5>手工藝創作達人</h5>
    </div>
    <!-- 本月之星列表 -->
    <?php include("includes/Index/StarList.php") ?>

    <!-- 本月之星按鈕 -->
    


   </div>

   
  </div>



  <div class="idx-about">
   <!-- 裝飾 雲 -->
   <div class="decopic-box">
    <img src="img/idx/deco/cloud1.png" alt="" class="cloud1">
    <img src="img/idx/deco/cloud2.png" alt="" class="cloud2">
    <img src="img/idx/deco/cloud3.png" alt="" class="cloud3">
    <img src="img/idx/deco/cloud3.png" alt="" class="cloud4">
    <img src="img/idx/deco/cloud3.png" alt="" class="cloud5">
   </div>
   <?php include("includes/BgPicBox/view1.php") ?>
   <div class="main w1200">
    <img src="img/idx/title1.png" alt="關於">
    <div class="text">
     <h1>我來自大肚山‧大肚山地方知識平台</h1>
     <img src="img/line.svg" alt="" class="sep-line">
     <p id="idx-about-content">
      大肚台地東望台中盆地，西瞰海岸平原；<br>
      歷經數個世代的開墾，成就蘊含豐富歷史人文之地。<br>
      青山、紅土、甘蔗、番薯……<br>
      瑞井社區、南寮步道、鯉魚山、擎天崗夜景……<br>
      期待您藉由我們的視角，了解大肚山這片土地風情地景。<br>
      更希望生活在大肚山的每一位居民，能夠驕傲的說出：我來自大肚山！
     </p>
     
     <a href="about.php" class="all-btn" data-color="brown">
      了解更多<i class="icon-mountain"></i>
     </a>
    </div>
   </div>
   
  </div>


  <div class="idx-news">
   <div class="decopic-box">
    <img src="img/idx/deco/cloud4.png" alt="" class="cloud1">
    <img src="img/idx/deco/cloud5.png" alt="" class="cloud2">
    <img src="img/idx/deco/cloud6.png" alt="" class="cloud3">
    <img src="img/idx/deco/cloud7.png" alt="" class="cloud4">
    <img src="img/idx/deco/cloud8.png" alt="" class="cloud5">
   </div>
   <?php include("includes/BgPicBox/view2.php") ?>
   <div class="main w1440">
    <div class="title-box ud-line" data-color="orange">
     <img src="img/idx/title2.png" alt="訊息放送">
      <h6>大肚山在地資訊、活動消息<br>
      千萬別錯過，全部攏底加啦！</h6>
    </div>

    <div id="idx-news-wrap" class="tab-wrap">
     <!-- 最新消息列表 最新5筆(日期、標題，點擊標題直接進入內頁) -->
     <?php include('includes/Index/NewsTitleList.php')?>
     <!-- 最新消息預覽 最新5筆(封面圖、日期、瀏覽數、標題、內文概要) -->
     <?php include('includes/Index/NewsList.php')?>
     <div class="btn-block">
       <a href="news.php" class="all-btn" data-color="orange">
        訊息一覽<i class="icon-talk"></i>
       </a>
     </div>
    </div>
   </div>
 

  </div>

  <div class="idx-submission">
   <?php include("includes/BgPicBox/view3.php") ?>
   <div class="main w1600">
    <div class="title-box" data-color="green">
     <img src="img/idx/title3.png" alt="自由投稿">
      <h6>最新投稿活動都在這～<br>
      盡情展現你的觀點、分享你的視野吧！</h6>
    </div>
     <!-- 投稿活動列表 -->
     <?php include('includes/Index/SubmissionList.php')?>
     <div class="btn-block">
       <a href="submission.php" class="all-btn" data-color="green">
        更多投稿活動<i class="icon-pen"></i>
       </a>
     </div>
   </div>
  </div>


  <div class="idx-article">
   <?php include("includes/BgPicBox/view4.php") ?>
   <div class="main w1440">
    <div class="title-box" data-color="orange">
     <img src="img/idx/title4.png" alt="深入了解">
      <h6>大肚山蘊藏豐富歷史文化、風土民情<br>
      與我們一起深入認識這塊土地</h6>
    </div>

    <div id="article-wrap" class="tab-wrap">

     <ul id="cate-btn" class="cate-btn tab-btn">
      <li class="active"><a href="#tab1">每月精選</a></li>
      <li><a href="#tab2">地方簡史</a></li>
      <li><a href="#tab3">生活記憶</a></li>
      <li><a href="#tab4">特約分享</a></li>
      <li><a href="#tab5">在地嚮導</a></li>
      <li><a href="#tab6">影像藝廊</a></li>
     </ul>

    <!-- 文章列表 -->
    
     <div id="cate-list">
      <!-- 每月精選 -->
      <div id="tab1">
       <!-- 每月精選關鍵字 -->
       <div class="keyword-box"><h3>本月關鍵字：#大肚山</h3></div>
       <?php include('includes/Index/FeaturedList.php')?>
       <div class="btn-block">
         <a href="featured.php" class="all-btn" data-color="orange">
          更多文章<i class="icon-search"></i>
         </a>
       </div>
      </div>
      <!-- 地方簡史 -->
      <div id="tab2">
       <?php include('includes/Index/HistoryList.php')?>
       <div class="btn-block">
         <a href="history.php" class="all-btn" data-color="orange">
          更多文章<i class="icon-search"></i>
         </a>
       </div>
      </div>
      <!-- 生活記憶 -->
      <div id="tab3">
       <?php include('includes/Index/MemoryList.php')?>
       <div class="btn-block">
         <a href="memory.php" class="all-btn" data-color="orange">
          更多文章<i class="icon-search"></i>
         </a>
       </div>
      </div>
      <!-- 特約分享 -->
      <div id="tab4">
       <?php include('includes/Index/ShareList.php')?>
       <div class="btn-block">
         <a href="share.php" class="all-btn" data-color="orange">
          更多文章<i class="icon-search"></i>
         </a>
       </div>
      </div>
      <!-- 在地嚮導 -->
      <div id="tab5">
      <?php include('includes/Index/GuideList.php')?>
       <div class="btn-block">
         <a href="guide.php" class="all-btn" data-color="orange">
          更多文章<i class="icon-search"></i>
         </a>
       </div>
      </div>
      <!-- 影像藝廊 -->
      <!-- 最新6筆影像藝廊照片，點擊連至文章 -->
      <div id="tab6">
       <?php include('includes/Index/GalleryList.php')?>
       <div class="btn-block">
         <a href="gallery.php" class="all-btn" data-color="orange">
          更多影像<i class="icon-search"></i>
         </a>
       </div>
      </div>
     </div>
    </div>

   </div>
  </div>

  <div class="idx-links">
   
   <div class="main w1440">
    <div class="title-box" data-color="blue">
     <img src="img/idx/title5.png" alt="相關連結">
      <h6>你或許想要知道<br>友站連結、更多資訊</h6>
    </div>
     <!-- 相關連結列表 -->
     <ul id="links" class="box-list circle" data-color="blue">
      <li>
       <a href="#" target="_blank" >
        <img src="img/tag-go.svg" alt="前往" class="mark">
        <div class="pic" style="background-image:url('img/demo/link.jpg')"></div>
        <div class="text"><p>東海大學服務學習組</p>
        </div>
       </a>
      </li>
      <li>
       <a href="#" target="_blank">
        <img src="img/tag-go.svg" alt="前往" class="mark">
        <div class="pic" style="background-image:url('img/demo/link.jpg')"></div>
        <div class="text"><p>東海大學服務學習組</p>
        </div>
       </a>
      </li>
      <li>
       <a href="#" target="_blank">
        <img src="img/tag-go.svg" alt="前往" class="mark">
        <div class="pic" style="background-image:url('img/demo/link.jpg')"></div>
        <div class="text"><p>東海大學服務學習組</p>
        </div>
       </a>
      </li>
      <li>
       <a href="#" target="_blank">
        <img src="img/tag-go.svg" alt="前往" class="mark">
        <div class="pic" style="background-image:url('img/demo/link.jpg')"></div>
        <div class="text"><p>東海大學服務學習組</p>
        </div>
       </a>
      </li>
      

     </ul>

   </div>
  </div>

  <div class="idx-contact">
   <?php include("includes/BgPicBox/view5.php") ?>
   <div class="bg-cloud"></div>
   <div class="decopic-box">
    <img src="img/idx/deco/cloud4.png" alt="" class="cloud1">
    <img src="img/idx/deco/cloud5.png" alt="" class="cloud2">
    <img src="img/idx/deco/cloud6.png" alt="" class="cloud3">
    <img src="img/idx/deco/cloud7.png" alt="" class="cloud4">
    <img src="img/idx/deco/cloud7.png" alt="" class="cloud5">

   </div>
   
   <div class="main w1300">
    <div class="title-box" data-color="orange">
     <img src="img/idx/title6.png" alt="連絡我們">
      <h6>如您有任何建議或想法<br>
      歡迎利用此份表單與我們聯繫</h6>
    </div>
    
     <form action="" >

     <div class="form-box" >

      <label><p>姓 名</p><input type="text" placeholder="請輸入您的姓名"></label>
      <label><p>電 話</p><input type="text" placeholder="請輸入您的連絡電話"></label>
      <label><p class="mail">E-mail</p><input type="text" placeholder="請輸入您的電子信箱，我們會以此信箱回覆您"></label>
      <label class="msg"><p>我想說...</p>
       <textarea name="" id="" cols="30" rows="8" placeholder="請輸入相關內容，我們會儘快回覆您，謝謝您！(請勿輸入網址連結)"></textarea>
      </label>

      <label class="captcha">
       <p>驗證碼</p><input type="text" placeholder="請輸入驗證碼">
       <a href="#"><img src="img/demo/captcha.jpg" alt=""><i class="icon-refresh"></i></a>
      </label>

      </div>

      <div class="btn-block">
      <button type="submit" class="all-btn" data-color="orange">送　出 <i class="icon-pigeon"></i></button><br>
       <a href="contact.php" class="all-btn" data-color="white">
        聯絡資訊<i class="icon-arrow-right"></i>
       </a>
     </div>

      

     </form>
    

    

     

   </div>
  </div>



  

  

 







 
 

 <?php include("includes/g-footer.php") ?>

 </div>

</body>
</html>