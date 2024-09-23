<?php 
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$title = '我收藏的文章｜大肚山地方知識平台';
$description = '我收藏的文章｜我來自大肚山-大肚山地方知識平台';
$keywords = '';


?>

<!DOCTYPE html>
<html lang="zh-hang">
<head>
 <?php include("includes/g-meta.php") ?> 

</head>

<body>
<div class="inner-page about-page article-page member-center" data-bgcolor="orange">
 <?php include("includes/g-menu.php") ?>
 <div class="article-page-top"></div>

 <main class="main w1200">

  <div class="title-box" data-color="orange">
    <h1>會員專區</h1>
    <p>查看我收藏的文章</p>
   </div>


    <ul class="cate-btn">
       <li><a href="member.php">我的主頁</a></li>
       <li><a href="member_myinfo.php">個人資料</a></li>
       <li class="active"><a href="member_myfav.php">收藏文章</a></li>
       <li><a href="member_mysubmit.php">投稿紀錄</a></li>
    </ul>


     <!-- 收藏文章 -->
     <article>
       <div class="article-box">
        <h4 class="orange"><b><i class="icon-favorite"></i> 我收藏的文章</b></h4>
        <hr color="orange">
        <ul class="my-list fav">
         <li class="head">
          <div class="info">
           <p>文章分類</p>
           <p>發佈日期</p>
           <p>文章標題</p>
          </div>
          <div class="btn">
           <p>閱讀 / 取消收藏</p>
          </div>
         </li>
         <li>
          <div class="info">
           <p>地方簡史</p>
           <p>2020-11-10</p>
           <p><a href="history_d.php">大肚山發展歷史</a></p>
          </div>
          <div class="btn">
           <a href="javascript:void(0);" class="remove">移除<i class="icon-clear"></i></a>
           <a href="history_d.php" class="read"><span>前往</span>閱讀<i class="icon-play_arrow"></i></a>
          </div>
          
         </li>
         <li>
          <div class="info">
           <p>生活記憶</p>
           <p>2020-11-10</p>
           <p><a href="memory_d.php">大肚山生活記憶</a></p>
          </div>
          <div class="btn">
           <a href="javascript:void(0);" class="remove">移除<i class="icon-clear"></i></a>
           <a href="memory_d.php" class="read"><span>前往</span>閱讀<i class="icon-play_arrow"></i></a>
          </div>
         </li>
         <li>
          <div class="info">
           <p>特約分享</p>
           <p>2020-09-01</p>
           <p><a href="share_d.php">大肚山特約分享</a></p>
          </div>
          <div class="btn">
           <a href="javascript:void(0);" class="remove">移除<i class="icon-clear"></i></a>
           <a href="share_d.php" class="read"><span>前往</span>閱讀<i class="icon-play_arrow"></i></a>
          </div>
         </li>
         <li>
          <div class="info">
           <p>在地嚮導</p>
           <p>2020-11-10</p>
           <p><a href="guide_d.php">大肚山在地嚮導</a></p>
          </div>
          <div class="btn">
           <a href="javascript:void(0);" class="remove">移除<i class="icon-clear"></i></a>
           <a href="guide_d.php" class="read"><span>前往</span>閱讀<i class="icon-play_arrow"></i></a>
          </div>
         </li>
         <li>
          <div class="info">
           <p>自由投稿</p>
           <p>2020-11-10</p>
           <p><a href="submission_works_d.php">自由投稿作品</a></p>
          </div>
          <div class="btn">
           <a href="javascript:void(0);" class="remove">移除<i class="icon-clear"></i></a>
           <a href="submission_works_d.php" class="read"><span>前往</span>閱讀<i class="icon-play_arrow"></i></a>
          </div>
         </li>
         <li>
          <div class="info">
           <p>地方簡史</p>
           <p>2020-11-10</p>
           <p><a href="history_d.php">大肚山發展歷史</a></p>
          </div>
          <div class="btn">
           <a href="javascript:void(0);" class="remove">移除<i class="icon-clear"></i></a>
           <a href="history_d.php" class="read"><span>前往</span>閱讀<i class="icon-play_arrow"></i></a>
          </div>
          
         </li>
         <li>
          <div class="info">
           <p>生活記憶</p>
           <p>2020-11-10</p>
           <p><a href="memory_d.php">大肚山生活記憶</a></p>
          </div>
          <div class="btn">
           <a href="javascript:void(0);" class="remove">移除<i class="icon-clear"></i></a>
           <a href="memory_d.php" class="read"><span>前往</span>閱讀<i class="icon-play_arrow"></i></a>
          </div>
         </li>
         <li>
          <div class="info">
           <p>特約分享</p>
           <p>2020-09-01</p>
           <p><a href="share_d.php">大肚山特約分享</a></p>
          </div>
          <div class="btn">
           <a href="javascript:void(0);" class="remove">移除<i class="icon-clear"></i></a>
           <a href="share_d.php" class="read"><span>前往</span>閱讀<i class="icon-play_arrow"></i></a>
          </div>
         </li>
         <li>
          <div class="info">
           <p>在地嚮導</p>
           <p>2020-11-10</p>
           <p><a href="guide_d.php">大肚山在地嚮導</a></p>
          </div>
          <div class="btn">
           <a href="javascript:void(0);" class="remove">移除<i class="icon-clear"></i></a>
           <a href="guide_d.php" class="read"><span>前往</span>閱讀<i class="icon-play_arrow"></i></a>
          </div>
         </li>
         <li>
          <div class="info">
           <p>自由投稿</p>
           <p>2020-11-10</p>
           <p><a href="submission_works_d.php">自由投稿作品</a></p>
          </div>
          <div class="btn">
           <a href="javascript:void(0);" class="remove">移除<i class="icon-clear"></i></a>
           <a href="submission_works_d.php" class="read"><span>前往</span>閱讀<i class="icon-play_arrow"></i></a>
          </div>
         </li>
        </ul>
       </div>
      
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
     
     
     </article>
     

        




 </main>
 
 <?php include("includes/MemberMenu.php") ?>
 <?php include("includes/BgPicBox/view1.php") ?>
</div>



<?php include("includes/g-footer.php") ?>


 
 

</body>
</html>