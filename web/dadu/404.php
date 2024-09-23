<?php 
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$title = '找不到頁面｜大肚山地方知識平台';
$description = '找不到頁面';
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
 .decompic{
  width:250px;
  height:250px;
  margin:-10px auto;
 }
 </style>

</head>

<body>
<div class="inner-page member" data-bgcolor="orange">
 <?php include("includes/g-menu.php") ?>

 <main class="main w800">

  <div class="title-box" data-color="orange">
   <h1>404</h1>
   <h6>PAGE NOT FOUND</h6>
  </div>

  
 
 

  <div class="form-box t-center" data-color="orange">
  <div class="guitar animate-pic-2 decompic" style="background-image:url('img/animate/animate-guitar.png')"></div>
   <h2 class="orange">抱歉，我們找不到這個頁面</h2>
   <p>請輸入正確的網址，或前往搜尋文章頁面尋找您想閱讀的內容</p>
   <br>
   
   
   
   <!-- <span id="time">5</span>秒後即將前往首頁...</p> -->



   <div class="btn-block">
   <a href="search.php" class="all-basic-btn" data-color="orange">搜尋文章<i class="icon-arrow-right"></i></a>
    
     <a href="index.php" class="all-basic-btn" data-color="l-orange">前往首頁<i class="icon-arrow-right"></i></a>
     
     
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
	var count = 5;
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