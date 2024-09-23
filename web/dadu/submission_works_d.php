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
 <script>
  $(function () {
   $('#submit-gallery-b').owlCarousel({
       items: 1,
       nav: true,
       navText: false,
       autoplay: false,
       loop: false,
       margin: 10,
       dots: true,
       smartSpeed: 500,
       autoplayHoverPause: true
   });
   $('#submit-gallery-s').owlCarousel({
       items: 5,
       nav: true,
       navText: false,
       autoplay: false,
       loop: false,
       margin: 10,
       dots: false,
       smartSpeed: 500,
       autoplayHoverPause: true
   });

   $('#submit-gallery-s').find('img').each(function(i){
        $(this).hover(function(){
            $(this).addClass('point').parentsUntil('owl-item').siblings().find('img').removeClass('point');
            $('#submit-gallery-b').trigger("to.owl.carousel",i);
        })
    });

   $('#submit-gallery-b').on('changed.owl.carousel', function(event) {
       var currentItem = event.item.index;
       $('#submit-gallery-s img').eq(currentItem).addClass('point').parentsUntil('owl-item').siblings().find('img').removeClass('point');           
   });

  });
 </script>
 <style>
  #submit-gallery-s img {border:2px solid #ffffff; cursor:pointer;}
  #submit-gallery-s img:hover,
  #submit-gallery-s img.point {border:2px solid #7eab51;}
 </style>
</head>

<body>
<div class="article-page inner-page submission" data-bgcolor="green">
 <?php include("includes/g-menu.php") ?>

 <div class="article-page-top"></div>

 <main class="main w1200 submit-work">
  <!-- 文章內容與資料 -->
  <section id="article-wrap">
   <div class="title-box" data-color="green">
     <img src="img/title/submission.png" alt="自由投稿">
    </div>
   
   

   <!-- 發佈日期、點閱、導覽路徑 -->
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
     <li><a href="submission_d.php">大肚山徵文活動</a></li> <!-- 投稿活動頁面 -->
    </ul>
   </div>

   <article>
    <div class="article-title-box">
     <!-- 文章標題 -->
     <h1>投稿作品標題(文章投稿)</h1>
     <!-- --- -->

     <!-- 投稿者名字(會員名字)、投稿活動名稱 -->
     <h6>投稿者：林小美</h6>
     <h6>投稿活動：大肚山徵稿活動</h6>
     <!-- --- -->

     <!-- 發佈日期、點閱、導覽路徑 -->
     <div class="info-box mb">
      <!-- 文章發佈日期&點閱 -->
      <div>
      <h6><i class="icon-insert_invitation"></i>發佈日期：2020-09-09</h6>
      <h6><i class="icon-remove_red_eye"></i>點閱： 2000</h6>
      </div>
     </div>

    </div>
    
    <!-- ::::::::::::::::::::::::::::::::::::::::::::::::::: -->

    <!-- 【投稿文章區】(圖文編輯器)
    ※ 如本活動有徵文，此區顯示(必填)，否則隱藏。 -->
    <div class="article-box submit-box">
     <p>
      【投稿文章區】圖文內容編輯區<br>
      投稿者可以在此自由編輯文字內容與樣式<br>
      大肚山，在地理學上被歸為「臺地」，故又稱大肚臺地。位於臺中市的臺地地形，南北夾於大甲溪和大肚溪之間，面積約145平方公里。就行政區域而言，包括臺中市西屯區、南屯區、清水區、神岡區、大雅區、沙鹿區、龍井區、大肚區及烏日區一帶。<br>
      <br>

      大肚山是正式名稱，早期誤寫為「大度山」，在年代較早旅遊書可見得。文獻上多數採用大肚山，其名取自巴布薩、洪雅等平埔族建立的大肚王國。早期漢人未開墾前是平原周圍的一片綠林地，今日的大肚山因為鄰近台中都市圈，已整山全面開發，與往昔的自然景象差異甚大。<br>
      <br>

      大肚臺地原為一處廣大的沖積扇，生成於中更新世（距今約一百萬年前），由古代大甲溪與古代大肚溪形成的聯合沖積扇。換言之，尚未地層隆起之前，這片聯合沖積扇曾為大甲溪與大肚溪的舊河道，後來經由板塊推擠而抬升地層，改變大安溪、大甲溪的流路，大安溪改道，由后里臺地北側行經而成現今河道位置，大甲溪則順大肚臺地東側往南流下與大肚溪匯流，河道位置大約於筏子溪，這時期逐漸地將沖積物流入臺中盆地內，形成盆地內的沖積層地質，最後因河床高度已累積到后里臺地與大肚臺地之間的鞍部高度，由此溢出而成現今大甲溪河道位置[1][2]。<br>
      <br>

      大肚臺地平均高度為200～300公尺，而臺地最高處並無山峰，位於臺中都會公園北側，海拔高度約310公尺。大肚臺地的北方是后里臺地，兩者之間被大甲溪分隔，呈北高南低的走勢，與南方是王田斷崖，呈現由西側急遽地向東側下滑的一處大崩壁，斷崖下方即為大肚溪，為大肚溪沖刷形成河蝕崖，隔岸向南與彰化平原、八卦臺地遙望，此即為地形學所言「水隙」[3][4]。大肚臺地的西側山坡呈急斜陡峭，緊鄰清水海岸平原，而東側山坡則較為平緩，山麓下方為筏子溪相互平行走勢，且可與臺中盆地相望[5]。總體而言，大肚臺地是呈現一個不對稱的背斜高地，與南方八卦臺地特徵一致[6]。<br>
      <br>

      大肚臺地的地質主要是紅土堆積層、頭嵙山層。紅土堆積層分布於表層，為紅土層、礫石層構成，少有砂岩夾於其中。頭嵙山層分布於下層，多數為礫岩構成，少數是以砂岩、頁岩構成[5][7]。大肚臺地上的溪坑從頂部向四周輻射，其中分布在西坡的較多。大肚臺地西側山麓有斷層經過，除了屯子腳斷層呈東北－西南走向，清水、橫山、南勢、龍井等四條斷層皆呈南北走向，因此從龍井、沙鹿、清水等地可見得斷層崖[8][9]。大肚臺地因為地勢突出，從大肚臺地的至高點如望高寮或者是臺中都會公園等地，向東可眺望臺中市中心的天際線，向西可俯瞰海岸平原、臺中港，向南可遠眺大肚溪對岸之彰化縣伸港、和美等地，故居高臨下，視野可謂寬廣。
      
      
     </p>
    </div>
    <!-- --- -->

    <hr color="green">

    <!-- ::::::::::::::::::::::::::::::::::::::::::::::::::: -->

    <!-- 【投稿圖片區】  
    ※ 如本活動有徵圖，此區顯示。-->
    <div id="submit-photo">

     <!-- 相片輪播 -->
     <!-- <div class="submit-gallery-box"> -->
      <ul class="" id="submit-gallery-b">
       <li><img src="img/demo/photo1.jpg" alt="文章標題"></li>
       <li><img src="img/demo/photo2.jpg" alt="文章標題"></li>
       <li><img src="img/demo/photo3.jpg" alt="文章標題"></li>
       <li><img src="img/demo/photo4.jpg" alt="文章標題"></li>
       <li><img src="img/demo/photo5.jpg" alt="文章標題"></li>
      </ul>

      <ul class="" id="submit-gallery-s">
       <li><img src="img/demo/photo1.jpg" alt="文章標題"></li>
       <li><img src="img/demo/photo2.jpg" alt="文章標題"></li>
       <li><img src="img/demo/photo3.jpg" alt="文章標題"></li>
       <li><img src="img/demo/photo4.jpg" alt="文章標題"></li>
       <li><img src="img/demo/photo5.jpg" alt="文章標題"></li>
      </ul>

      

     <!-- 作品介紹(如未填寫，不顯示此區) -->
     <div class="intro-box">
      <h5 class="intro-title">作品介紹：</h5>
      <!-- 簡介內容 -->
      <div class="article-box">
       <p>
        投稿者可以在此輸入圖片介紹、創作理念等等。
       </p>
      </div>
     </div>

    </div>

    <hr color="green">

    <!-- ::::::::::::::::::::::::::::::::::::::::::::::::::: -->
  

    <!-- 【投稿影片區】  
    ※ 如本活動有徵影片，此區顯示。-->
    
    <div id="submit-video">
     
     <!-- 影片播放 -->
     <div id="video-gallery" class="submit-video">
       <a href="https://www.youtube.com/watch?v=opZr9ebo1dE" data-poster="img/demo/submit-video.jpg" >
        <!-- 封面圖片 -->
        <div class="cover">
         <img src="img/demo/submit-video.jpg" alt="投稿作品標題(投稿者：林小美)" />
         <span><p>點擊觀看影片<i class="icon-play_circle_outline"></i></p></span>
        </div>
        <span href="#" class="all-basic-btn play-btn" data-color="green" target="_blank">觀賞影片<i class="icon-play_circle_outline"></i></span>
       </a>
     </div>

     <!-- 作品介紹(如未填寫，不顯示此區) -->
     <div class="intro-box">
      <h5 class="intro-title">作品介紹：</h5>
      <!-- 簡介內容 -->
      <div class="article-box">
       <p>
        投稿者可以在此輸入影片介紹、創作理念等等。
       </p>
      </div>
     </div>
    </div>

    <!-- ::::::::::::::::::::::::::::::::::::::::::::::::::: -->




   </article>

   <!-- 上下篇文章 & 返回列表連結 -->
   <div class="page-link-box" data-color="green">
    <a href="submission_works_d.php"><i class="icon-arrow-left"></i><p>下一篇投稿作品標題</p></a>
    
    <a href="submission_works.php" class="back"><p>返回列表</p></a>

    <a href="submission_works_d-2.php"><p>下一篇投稿作品標題</p><i class="icon-arrow-right"></i></a>
   </div>

   <?php include("includes/share.php") ?>
  </section>

  <!-- 徵件活動 -->
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
  $('#video-gallery').lightGallery({
   galleryId: 1,
   rotate: false,
   flipHorizontal: false,
   thumbnail:true,
   animateThumb: false,
   showThumbByDefault: false,
   download: false,
   videoMaxWidth: '90%',
   autoplayFirstVideo: true
   
  });
 </script>
 
 

</body>
</html>