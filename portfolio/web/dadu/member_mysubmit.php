<?php 
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$title = '我的自由投稿紀錄｜大肚山地方知識平台';
$description = '我的自由投稿紀錄｜我來自大肚山-大肚山地方知識平台';
$keywords = '';


?>

<!DOCTYPE html>
<html lang="zh-hang">
<head>
 <?php include("includes/g-meta.php") ?> 
 <script>
 $(function () {
   var TabBlock = '.tab-wrap';
 // 切換按鈕 
 var TabBtn = '.tab-btn li';
  // 預設顯示第一個 Tab
  var _showTab = 0;

   $(TabBlock).each(function(){
     // 目前的頁籤區塊
     var $tab = $(this);
     var $defaultLi = $(TabBtn, $tab).eq(_showTab).addClass('active');
      $($defaultLi.find('a').attr('href')).siblings().hide();


        // 當 li 頁籤被點擊時...
        // 若要改成滑鼠移到 li 頁籤就切換時, 把 click 改成 mouseover
        $(TabBtn, $tab).click(function() {
         // 找出 li 中的超連結 href(#id)
         var $this = $(this),
          _clickTab = $this.find('a').attr('href');
         // 把目前點擊到的 li 頁籤加上 .active
         // 並把兄弟元素中有 .active 的都移除 class
         $this.addClass('active').siblings('.active').removeClass('active');
         // 淡入相對應的內容並隱藏兄弟元素
         $(_clickTab).stop(false, true).fadeIn().siblings().hide();
         return false;
        }).find('a').focus(function(){
         this.blur();
        });
    
  
    
  });
 });
 </script>
</head>

<body>
<div class="inner-page about-page article-page member-center" data-bgcolor="orange">
 <?php include("includes/g-menu.php") ?>
 <div class="article-page-top"></div>

 <main class="main w1200">

  <div class="title-box" data-color="orange">
    <h1>會員專區</h1>
    <p>查看我的自由投稿紀錄</p>
   </div>

  <div class="">
    <ul class="cate-btn">
       <li><a href="member.php">我的主頁</a></li>
       <li><a href="member_myinfo.php">個人資料</a></li>
       <li><a href="member_myfav.php">收藏文章</a></li>
       <li class="active"><a href="member_mysubmit.php">投稿紀錄</a></li>
    </ul>

     <!-- 投稿作品 -->
     <article data-color="green">
       <div class="article-box">
        <h4 class="green"><b><i class="icon-border_color"></i> 自由投稿紀錄</b></h4>
        <hr color="green">
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
           <p class="out">已逾時</p>
           <!-- <a href="submit_view.php">查看內容<i class="icon-remove_red_eye"></i></a> -->
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
           <p class="ok">已通過</p>
           <a href="submit_view.php">查看內容<i class="icon-remove_red_eye"></i></a>
          </div>
         </li>

         
        </ul>
       </div>
       <!-- 頁碼 -->
       <div class="page-num-box" data-color="green">
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
      
      
        



  </div>
 </main>

  
 <?php include("includes/MemberMenu.php") ?>
 <?php include("includes/BgPicBox/view1.php") ?>
</div>



<?php include("includes/g-footer.php") ?>

<script>
 $(function () { 
   //
 $('.my-list.sub .del').click(function () {
  $('#del-check').addClass('active');
  $('body').addClass('blocked');
 });
  });
</script>
<!-- 彈出視窗 : 刪除草稿確認 -->
<div class="pop-up-wrap" id="del-check">
  <div class="pop-up-bg pop-up-close"></div>
  <div class="pop-up-box">

   <h3 class="orange">
    <b>草稿刪除後無法恢復！<br>
    確定要刪除嗎？</b>
   </h3>

   <div class="btn-block-inline">
    
    <a href="#" class="all-basic-btn" data-color="orange">確認刪除</a>
    
    <a href="javascript:void(0)" class="all-basic-btn pop-up-close" data-color="green">不要刪除</a>
   </div>
  
  </div>
</div>
 

</body>
</html>