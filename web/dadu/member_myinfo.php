<?php 
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$title = '我的個人資料｜大肚山地方知識平台';
$description = '我的個人資料｜我來自大肚山-大肚山地方知識平台';
$keywords = '';


?>

<!DOCTYPE html>
<html lang="zh-hang">
<head>
 <?php include("includes/g-meta.php") ?> 

</head>

<body>
<div class="inner-page about-page article-page member-center" data-bgcolor="yellow-orange">
 <?php include("includes/g-menu.php") ?>
 <div class="article-page-top"></div>

 <main class="main w1200">

  <div class="title-box" data-color="orange">
    <h1>會員專區</h1>
    <p>管理我的個人資料</p>
   </div>

  <div class="">
    <ul class="cate-btn">
       <li><a href="member.php">我的主頁</a></li>
       <li class="active"><a href="member_myinfo.php">個人資料</a></li>
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
           <span>密碼：</span><a href="member_myinfo2.php" class="link">修改密碼 <i class="icon-vpn_key"></i></a><br>
           <span>電子信箱：</span>abc123@gmail.com
           <!-- <a href="member_myinfo3.php" class="link">變更信箱<i class="icon-mail_outline"></i></a> -->
           <br>
          </p>
         </li>
         <li>
          <p>
           <span>姓名：</span>林小美<br>
           <span>性別：</span>女<br>
           <span>連絡電話：</span>0911-111-111<br>
           <span>居住地區：</span>台中市 大肚區<br>
           <a href="member_myinfo1.php" class="link">修改個人資料<i class="icon-drive_file_rename_outline"></i></a>
          </p>
         </li>
        </ul>
       </div>
       <hr color="brown">
 
       <div class="btn-block">
        <a href="member_myinfo1.php" class="all-basic-btn" data-color="l-orange">修改個人資料<i class="icon-drive_file_rename_outline"></i></a>
        <a href="member_myinfo2.php" class="all-basic-btn" data-color="l-orange">修改密碼<i class="icon-vpn_key"></i></a>
       </div>   

     </article>

     



  </div>
 </main>
 <?php include("includes/MemberMenu.php") ?>
  
 <?php include("includes/BgPicBox/view1.php") ?>
</div>



<?php include("includes/g-footer.php") ?>



 

</body>
</html>