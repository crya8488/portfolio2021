<?php 
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$title = '檢視投稿內容－投稿作品標題(文章投稿)';
$description = '檢視投稿內容－投稿作品標題(文章投稿)';
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
</head>

<body>
<div class="article-page inner-page submission member-center" data-bgcolor="green">
 <?php include("includes/g-menu.php") ?>

 <div class="article-page-top"></div>

 <main class="main w1200 submit-work">
  <!-- 文章內容與資料 -->
  <section id="article-wrap">
   <div class="title-box" data-color="green">
     <h1>投稿紀錄</h1>
   </div>

    <div class="submit-view-info">
    
        <ul class="my-list sub" data-color="green">
         <li class="head">
          <div class="info">
           <p>投稿主題</p>
           <p>投稿者</p>
           <p>投稿日期</p>
           <p>投稿標題</p>
          </div>
          <div class="btn">
           <p>狀態</p>
          </div>
         </li>
         
         <li>
          <div class="info">
           <p>投稿主題名稱</p>
           <p>林小美</p>
           <p>2020-11-10</p>
           <p>投稿標題</p>
          </div>
          <div class="btn">
           <p class="ing">審核中</p>
           <p class="no">未通過</p>
           <p class="ok">已通過</p>
          </div>
         </li>
        </ul>


        <div class="descript-box">

         <p class="d-green"><b><i class="icon-error"></i> 感謝您的投稿，作品正在審核中。</b></p>

         <p class="orange"><b><i class="icon-error"></i> 審核未通過，說明如下：<br>
         很抱歉，您的投稿內容與主題無關。
        </b></p>
         <!-- (管理員可於後台輸入說明) -->

         <p class="green"><b><i class="icon-done"></i>審核已通過，您的作品已公開發佈！ 
         <a href="submission_work_d.php" class="url orange">前往觀看<i class="icon-arrow-right"></i></a></b></p>

        </div>

    </div>
   <!-- <div class="btn-block">
    <a href="member_mysubmit.php" class="all-basic-btn" data-color="orange">投稿活動介紹頁</a>
   </div> -->
    <div class="sep-box" data-color="green">
     <i class="icon-read-paper"></i>
     <p>投稿內容</p>
   </div>

  

  

   <article>
    <div class="article-title-box">
     <!-- 文章標題 -->
     <h1>投稿作品標題(文章投稿)</h1>
     
     <!-- --- -->

     <h6>投稿者：林小美</h6>
     <h6>投稿活動：大肚山徵件活動名稱</h6>

     <hr>




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
    <br>

    <!-- 【投稿圖片區】  
    ※ 如本活動有徵圖，此區顯示。-->
    <!-- ::::::::::::::::::::::::::::::::::::::::::::::::::: -->
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
        投稿者可以在此輸入影片介紹、創作理念等等。
       </p>
      </div>
     </div>

    </div>

    <hr color="green">
    <br>

    <!-- 【投稿影片區】  
    ※ 如本活動有徵影片，此區顯示。-->
    <!-- ::::::::::::::::::::::::::::::::::::::::::::::::::: -->
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
      <h5 class="intro-title">影片介紹：</h5>
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

   <div class="btn-block">
    <a href="member_mysubmit.php" class="all-basic-btn" data-color="orange">投稿紀錄列表<i class="icon-library_books"></i></a>
    <a href="submission.php" class="all-basic-btn" data-color="green">更多徵件活動<i class="icon-arrow-right"></i></a>
    
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
  //影片
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