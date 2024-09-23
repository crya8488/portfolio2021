<?php 
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$title = '自由投稿活動標題｜大肚山知識平台';
$description = '自由投稿活動標題｜大肚山知識平台';
$keywords = '自由投稿,大肚山知識平台';


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

 <main class="main w1440">
 
  <!-- 文章內容與資料 -->
  <section id="article-wrap">
   

   <div class="title-box" data-color="green">
    <img src="img/title/submission.png" alt="自由投稿">
   </div>

   <div class="info-box">
    <!-- 文章發佈日期&點閱 -->
    <div>
    <h6><i class="icon-insert_invitation"></i>發佈日期：2020-09-09</h6>
    <h6><i class="icon-remove_red_eye"></i>點閱： 2000</h6>
    </div>
    
    <!-- 導覽路徑 -->
    <ul class="breadcrumb">
     <li><a href="index.php">首頁</a></li>
     <li><a href="submission.php">自由投稿</a></li> <!-- 大分類 -->
     <!--<li><a href="history.php">地理小知識</a></li> --> <!-- 小分類 -->
    </ul>
   </div>


   
   <!-- 活動Banner + 按鈕列 -->
   <div class="coverpic-box">
    <img src="img/demo/submission1.jpg" alt="">
    <!-- 投稿/作品/返回按鈕列 -->
    <ul class="submission-btn-box">
     <li><a href="submit.php" data-color="green" target="_blank"><p>我要投稿</p><i class="icon-pen"></i></a></li>
     <li><a href="submission.php" data-color="white"><p>返回列表</p></a></li>
    </ul>
   </div>
  
   <!-- 活動主要資訊(標題、類別、狀態、簡介、徵件開始/結束日期) -->
   <article class="main-box">
     <div class="submission-info">
     
      <!-- 活動標題 -->
      <h1>看見大肚山徵文活動(活動標題)</h1>
      <!-- --- -->

      <!-- 類型(後台手動輸入)、狀態(徵件中/已結束) -->
      <h5><span>徵件類型：書寫創作</span><span>狀態：徵件中</span></h5>
     
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


   
   <!-- 活動詳細介紹(編輯器)、友好鄰居連結 -->
   <article class="detail-box more-wrap">

    <div class="more-box descript" data-color="green">
     <h5>徵件詳情 <i class="icon-arrow-down"></i></h5>
     <!-- 徵件詳情內容(圖文編輯器) -->
     <div class="article-box content">
      <p>
       徵件活動詳細介紹撰寫區塊。<br>
       <br>
       圖文內容編輯區<br>
       您可以在此自由編輯文字內容與樣式<br>
       亦可上傳圖片、嵌入Youtube影片、加入<a href="#">超連結</a><br>
       或以html原始碼控制內容樣式。<br>
       預設字體：思源黑體<br>
      </p>
     </div>
     <!-- --- -->
    </div>

    <!-- 友好鄰居(相關連結功能) -->
    <div class="more-box link" data-color="orange">
     <h5>友好鄰居<i class="icon-arrow-down"></i></h5>
     <div class="content">
      <ul class="box-list">
       <li>
        <a href="#">
         <img src="img/tag-go2.svg" alt="前往" class="mark">
         <div class="pic" style="background-image:url('img/demo/link1.jpg')"></div>
         <p>贊助單位名稱</p>
        </a>
       </li>
       <li>
        <a href="#">
         <img src="img/tag-go2.svg" alt="前往" class="mark">
         <div class="pic" style="background-image:url('img/demo/link2.jpg')"></div>
         <p>贊助單位名稱</p>
        </a>
       </li>
       <li>
        <a href="#">
         <img src="img/tag-go2.svg" alt="前往" class="mark">
         <div class="pic" style="background-image:url('img/demo/link1.jpg')"></div>
         <p>贊助單位名稱</p>
        </a>
       </li>
       <li>
        <a href="#">
         <img src="img/tag-go2.svg" alt="前往" class="mark">
         <div class="pic" style="background-image:url('img/demo/link2.jpg')"></div>
         <p>贊助單位名稱</p>
        </a>
       </li>
       
       
       
      </ul>
     </div>
     
    </div>

   </article>
   
   <!-- 投稿按鈕(未登入跳出提示，前往登入畫面) -->
   <div class="btn-block">
    <a href="submit.php" class="all-big-btn" data-color="green" target="_blank">我要投稿<i class="icon-pen"></i></a>
    <p>※ 提醒您，投稿前須先登入本站會員</p>
   </div>

   <!-- 入選作品 -->
   <div class="sep-box PinWrap" data-color="green">
     <i class="icon-book"></i>
     <p>入選作品</p>
     <span id="works" class="Pin"></span>
   </div>

   <!-- 入選文作品列表(本活動入選作品，徵稿結束後顯示) -->
   <ul class="box-list works" data-color="green" id="related-article">
    <li>
     <a href="submission_works_d.php" class="content">
      <div class="pic" style="background-image:url('img/demo/submission1.jpg')"></div>
      <div class="tag">
       <p>2020-12-31</p>
       <p><i class="icon-remove_red_eye"></i> 1000</p>
      </div>
      <div class="text">
       <h5>入選作品標題</h5>
       <p>投稿者：投稿者姓名</p>
       <h6>文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要...</h6>
      </div>
     </a>
     <a href="submission_works_d.php" class="btn">觀看更多<i class="icon-search"></i></a>
    </li>
    <li>
     <a href="submission_works_d.php" class="content">
      <div class="pic" style="background-image:url('img/demo/submission1.jpg')"></div>
      <div class="tag">
       <p>2020-12-31</p>
       <p><i class="icon-remove_red_eye"></i> 1000</p>
      </div>
      <div class="text">
       <h5>入選作品標題</h5>
       <p>投稿者：投稿者姓名</p>
       <h6>文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要...</h6>
      </div>
     </a>
     <a href="submission_works_d.php" class="btn">觀看更多<i class="icon-search"></i></a>
    </li>
    <li>
     <a href="submission_works_d.php" class="content">
      <div class="pic" style="background-image:url('img/demo/submission1.jpg')"></div>
      <div class="tag">
       <p>2020-12-31</p>
       <p><i class="icon-remove_red_eye"></i> 1000</p>
      </div>
      <div class="text">
       <h5>入選作品標題</h5>
       <p>投稿者：投稿者姓名</p>
       <h6>文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要...</h6>
      </div>
     </a>
     <a href="submission_works_d.php" class="btn">觀看更多<i class="icon-search"></i></a>
    </li>
    <li>
     <a href="submission_works_d.php" class="content">
      <div class="pic" style="background-image:url('img/demo/submission1.jpg')"></div>
      <div class="tag">
       <p>2020-12-31</p>
       <p><i class="icon-remove_red_eye"></i> 1000</p>
      </div>
      <div class="text">
       <h5>入選作品標題</h5>
       <p>投稿者：投稿者姓名</p>
       <h6>文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要...</h6>
      </div>
     </a>
     <a href="submission_works_d.php" class="btn">觀看更多<i class="icon-search"></i></a>
    </li>
    <li>
     <a href="submission_works_d.php" class="content">
      <div class="pic" style="background-image:url('img/demo/submission1.jpg')"></div>
      <div class="tag">
       <p>2020-12-31</p>
       <p><i class="icon-remove_red_eye"></i> 1000</p>
      </div>
      <div class="text">
       <h5>入選作品標題</h5>
       <p>投稿者：投稿者姓名</p>
       <h6>文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要...</h6>
      </div>
     </a>
     <a href="submission_works_d.php" class="btn">觀看更多<i class="icon-search"></i></a>
    </li>
    <li>
     <a href="submission_works_d.php" class="content">
      <div class="pic" style="background-image:url('img/demo/submission1.jpg')"></div>
      <div class="tag">
       <p>2020-12-31</p>
       <p><i class="icon-remove_red_eye"></i> 1000</p>
      </div>
      <div class="text">
       <h5>入選作品標題</h5>
       <p>投稿者：投稿者姓名</p>
       <h6>文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要文章內文摘要...</h6>
      </div>
     </a>
     <a href="submission_works_d.php" class="btn">觀看更多<i class="icon-search"></i></a>
    </li>



   </ul>

   <div class="btn-block">
    <a href="submission_works.php" class="all-btn" data-color="green">所有入選作品<i class="icon-arrow-right"></i></a>
   </div>

  </section>


   

  
  <div class="sep-box PinWrap" data-color="green">
    <i class="icon-read-paper"></i>
    <p>更多活動</p>
    <span id="others" class="Pin"></span>
  </div>
  
  <!-- 更多活動，顯示上一筆、下一筆活動 -->
  <ul class="box-list near" data-color="green">
   <li>
    <a href="submission_d.php" class="content">
      <div class="tag">
       <p>寫作、攝影</p>
       <p>~2020-12-31</p>
       <p><i class="icon-remove_red_eye"></i> 1000</p>
      </div>
      <div class="text">
       <h5>自由投稿徵件活動標題</h5>
       <h6>投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字...</h6>
      </div>
    </a>

     <div class="btn-box">
     <a href="submission_d.php" class="btn">徵件詳情<i class="icon-search"></i></a>
     <a href="submit.php" class="btn" target="_blank">投稿<i class="icon-pen"></i></a>
    </div>
   </li>
   <li>
    <a href="submission_d.php" class="content">
      <div class="tag">
       <p>寫作、攝影</p>
       <p>徵件已結束</p>
       <p><i class="icon-remove_red_eye"></i> 1000</p>
      </div>
      <div class="text">
       <h5>自由投稿徵件活動標題</h5>
       <h6>投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字投稿說明文字...</h6>
      </div>
      </a>
 

     <div class="btn-box">
     <a href="submission_d.php" class="btn">徵件詳情<i class="icon-search"></i></a>
     <a href="submission_d.php#works" class="btn">看作品</a>
    </div>

   </li>
  </ul>

  <div class="btn-block">
   <a href="submission.php" class="all-btn" data-color="green">所有徵件活動<i class="icon-arrow-right"></i></a>
   </div>
 
   



 </main>


 <!-- <?php //include("includes/share.php") ?> -->

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