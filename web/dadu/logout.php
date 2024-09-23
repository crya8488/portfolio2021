<?php 
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$title = '會員登入｜大肚山地方知識平台';
$description = '登入大肚山地方知識平台會員';
$keywords = '';


?>

<!DOCTYPE html>
<html lang="zh-hang">
<head>
 <?php include("includes/g-meta.php") ?> 
 <!-- <script>
  $(function(){
   $('#login-btn').click(function(){
    alert('登入成功！');
   });
  });
 </script> -->
 <style type="text/css">
 .run-kids .animate-pic-10{
  width:200px;
  height:200px;
  margin:20px auto;
 }
 </style>

</head>

<body>
<div class="inner-page member" data-bgcolor="green">
 <?php include("includes/g-menu.php") ?>

 <main class="main w800">

  <div class="title-box" data-color="green">
   <h1>會員登出</h1>
  </div>

  
 
 

  <div class="form-box t-center" data-color="green">
   <h2 class="green">您成功已登出會員</h2>
   <div class="run-kids" ><div class="animate-pic-10" style="background-image:url('img/animate/animate-runkids.png');"></div></div>
   <!-- <hr color="green"> -->
   
   <p>感謝您使用大肚山知識平台，歡迎您再次回來<br>
   <span id="time">10</span>秒後即將跳轉至首頁...</p>



   <div class="btn-block-inline">
    
     <a href="index.php" class="all-basic-btn" data-color="l-green">前往首頁<i class="icon-arrow-right"></i></a>
      <a href="sign.php" class="all-basic-btn" data-color="green">重新登入<i class="icon-arrow-right"></i></a>
    </div>
  </div>



 </main>





 <!-- 忘記密碼 輸入信箱取得新密碼 -->

 <div class="pop-up-wrap" id="get-psw">
    <div class="pop-up-bg pop-up-close"></div>
    <div class="pop-up-box form-box" data-color="green" data-style="box">
     <h3 class="title gr">忘記密碼了嗎？</h3>
     <p class="blk">請輸入您的註冊電子信箱，我們會將新密碼寄至您的信箱。並請您登入後儘快更新您的密碼。</p>
     <br>
     <form action="">
      <input type="mail" placeholder="請輸入Email" >
      <div class="btn-block-inline">
       <a href="javascript:void(0)" class="all-basic-btn pop-up-close" data-color="l-green">取消</a>
       <button type="submit" href="javascript:void(0)" class="all-basic-btn" data-color="green">送出</button>
      </div>
     </form>

     <div class="close-btn pop-up-close" data-color="green"><i class="icon-clear"></i></div>
    
    </div>
  </div>

</div>

<?php include("includes/g-footer.php") ?>


 
 

</body>
</html>


<script type="text/javascript">
	//設定倒數秒數 
	var count = 10;
	//寫一個方法，顯示倒數秒數  數到0後跳轉頁面  
	function countDown(){
		//將count顯示在div中
		document.getElementById("time").innerHTML= count;
		//沒執行一次，count減1
		count -= 1;
		//count=0時，跳轉頁面
		if(count==0){
			location.href="index.php";
                        //window.location.href="index.html";
		}
		//每秒執行一次,showTime()
		setTimeout("countDown()",1000);
	}
	//執行countDown方法
	countDown();
</script>