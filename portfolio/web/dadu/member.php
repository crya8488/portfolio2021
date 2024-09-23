<?php 
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$title = '會員專區｜大肚山地方知識平台';
$description = '會員專區｜我來自大肚山-大肚山地方知識平台';
$keywords = '';


?>

<!DOCTYPE html>
<html lang="zh-hang">
<head>
 <?php include("includes/g-meta.php") ?> 
 <script>
   $(function () { 
    //登出
    $('#logout-btn').click(function () {
     $('#logout').addClass('active');
     $('body').addClass('blocked');
     
    });
    //移除收藏
    $('.remove').click(function (e) { 
      alert('已從我的收藏中移除文章！');
      window.location.reload();
     });
    });

    // $('.deadline').find('br').remove();

   });

 </script>
</head>

<body>
<div class="inner-page about-page article-page member-center" data-bgcolor="yellow-orange">
 <?php include("includes/g-menu.php") ?>
 <div class="article-page-top"></div>

 <main class="main w1200">

  <div class="title-box" data-color="orange">
    <h1>會員專區</h1>
    <p>歡迎回到大肚山地方知識平台！(<a href="javascript:void(0)" id="logout-btn" class="url">會員登出<i class="icon-logout"></i></a>)</p>
   </div>

  <div class="">
    <ul class="cate-btn">
       <li class="active"><a href="member.php">我的主頁</a></li>
       <li><a href="member_myinfo.php">個人資料</a></li>
       <li><a href="member_myfav.php">收藏文章</a></li>
       <li><a href="member_mysubmit.php">投稿紀錄</a></li>
    </ul>

     <!-- 個人資料 -->
     <article data-color="brown">
       <div class="article-box">
        <h4 class="brown"><b><i class="icon-face"></i> 個人資料</b></h4>
        <hr color="brown">
        <ul class="my-info">
         <li>
          <p>
           <span>帳號：</span>abc123 <br>
           <span>電子信箱：</span>abc123@gmail.com
           <br>
          </p>
         </li>
         <li>
          <p>
           <span>姓名：</span>林小美<br>
           <span>性別：</span>女<br>
           <span>生日：</span>1990 年 1 月 1 日<br>
           <span>聯絡電話：</span>0911-111-111<br>
           <span>居住地址：</span>台中市 大肚區 OO路XX巷1號<br>
          </p>
         </li>
        </ul>
       </div>
       <div class="btn-block-inline">
         <a href="member_myinfo.php" class="all-basic-btn" data-color="l-brown">管理個人資料<i class="icon-arrow-right"></i></a>
        </div>
     </article>
     
     <!-- 收藏文章 -->
     <article data-color="orange">
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
        </ul>
       </div>
       <div class="btn-block-inline">
        <a href="member_myfav.php" class="all-basic-btn" data-color="l-orange">所有收藏<i class="icon-arrow-right"></i></a>
       </div>
     </article>
     
     <!-- 投稿作品 -->
     <article data-color="green">
       <div class="article-box">
        <h4 class="green"><b><i class="icon-border_color"></i> 自由投稿紀錄</b></h4>
        <hr color="green">
        <!-- 投稿記錄列表 -->
        <!-- 顯示: 投稿主題、投稿者、投稿日期、投稿標題、狀態(審核中/已通過/未通過)、查看內容連結 -->
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
           <p>
            <span class="orange"><b>尚未投稿</b></span>
            <span class="deadline">2020-12-31</span>
           </p>
           <p>投稿標題</p>
          </div>
          <div class="btn">
           <p class="edit">草稿</p>
           <a href="submit.php" class="edit">編輯稿件<i class="icon-border_color"></i></a>
           <a href="javascript:void(0)" class="del">刪除<i class="icon-cancel"></i></a>
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
           <a href="submit_view.php" class="">查看內容<i class="icon-remove_red_eye"></i></a>
          </div>
         </li>
         <li>
          <div class="info">
           <p>投稿主題名稱</p>
           <p>林小美</p>
           <p>2020-11-10</p>
           <p>投稿標題投稿標題投稿標題</p>
          </div>
          <div class="btn">
           <p class="ok">已通過</p>
           <a href="submit_view.php">查看內容<i class="icon-remove_red_eye"></i></a>
          </div>
         </li>
         <li>
          <div class="info">
           <p>投稿主題名稱</p>
           <p>林小美</p>
           <p>2020-11-10</p>
           <p>投稿標題投稿標題投稿標題</p>
          </div>
          <div class="btn">
           <p class="no">未通過</p>
           <a href="submit_view.php">查看內容<i class="icon-remove_red_eye"></i></a>
          </div>
         </li>
         <li>
          <div class="info">
           <p>投稿主題名稱</p>
           <p>林小美</p>
           <p>2020-11-10</p>
           <p>投稿標題投稿標題投稿標題</p>
          </div>
          <div class="btn">
           <p class="ok">已通過</p>
           <a href="submit_view.php">查看內容<i class="icon-remove_red_eye"></i></a>
          </div>
         </li>
         
        </ul>
       </div>
       <div class="btn-block-inline">
        <a href="member_mysubmit.php" class="all-basic-btn" data-color="l-green">所有投稿<i class="icon-arrow-right"></i></a>
       </div>
     </article>

   
      
      
        



  </div>
 </main>

  
 <?php include("includes/MemberMenu.php") ?>
 <?php include("includes/BgPicBox/view1.php") ?>
</div>



<?php include("includes/g-footer.php") ?>

<div class="pop-up-wrap" id="logout">
    <div class="pop-up-bg"></div>
    <div class="pop-up-box">
     <h3 class="orange"><b>已成功登出</b></h3>
     <div class="btn-block-inline">
      <a href="index.php" class="all-basic-btn" data-color="l-orange">返回首頁</a>
      <a href="login.php" class="all-basic-btn" data-color="orange">重新登入</a>
     </div>

    </div>
  </div>
 
 

</body>
</html>