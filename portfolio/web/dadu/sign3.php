<?php 
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$title = '註冊會員｜大肚山地方知識平台';
$description = '註冊成為大肚山地方知識平台會員';
$keywords = '';


?>

<!DOCTYPE html>
<html lang="zh-hang">
<head>
 <?php include("includes/g-meta.php") ?> 


 
 
</head>

<body>
<div class="inner-page member " data-bgcolor="green">
 <?php include("includes/g-menu.php") ?>
 
 <main class="main w800">

  <div class="title-box" data-color="green">
   <h1>註冊會員</h1>
  </div>  

  <div class="step-box">
   <ul>
    <li><h5>帳號設定</h5><i class="icon-arrow-right"></i></li>
    <li><h5>填寫資料</h5><i class="icon-arrow-right"></i></li>
    <li class="active"><h5>信箱驗證</h5><i class="icon-arrow-right"></i></li>
    <li><h5>註冊成功</h5></li>
   </ul>
  </div>

   <div class="form-box-style2">

    <div class="form-content">
     <div class="text-box">
      <h4 class="title">信箱驗證</h4>
      <p class="content">
       會員註冊信已寄至您的信箱 <a href="javascript:void(0)" class="url green"><i class="icon-mail_outline"></i>abc123@gmail.com </a><br>
       請點擊信件中的驗證連結以完成會員註冊。<br>
       <i class="icon-error green"></i> 如5分鐘內未收到信件，請檢查您的垃圾信件匣，或點擊按鈕再次發送驗證信。<br>
       <i class="icon-error green"></i> 如再次傳送仍無法收到信件，請<a href="contact.php" class="url green">聯絡我們</a>。
       
       </p>


     </div>

     

    

    
     <div class="btn-block-inline">
      <a href="index.php" class="all-basic-btn" data-color="l-green" id="go-index">返回首頁</a>
      
      <button type="button" class="all-basic-btn" data-color="green" id="send-verify-btn" disabled>重新發送驗證信(300)</button> 

      <!-- <button type="button" id="test" disabled>点击(5)</button> -->
     </div>
     <script type="text/javascript">
        //按鈕
        var Btn = $("button[id='send-verify-btn']");
        //倒數秒數
        var i=300;
     
        
        var timehwnd=setInterval("Countdown()",1000);
        function Countdown(){
            i--;
            if(i == 0){
                Btn.html("重新發送驗證信");
                Btn.removeAttr("disabled");
                clearInterval(timehwnd);
                Btn.click(function () {
                 $(this).addClass('fixed').Attr("disabled");

                });
            }else{
                Btn.html("重新發送驗證信("+i+")");

            }
        }


        
    </script>
    <script>
       $(function () {
        $('#go-index').hide();
         $('#send-verify-btn').click(function () {
          $('#go-index').show();
          
          // $(this).addClass="fixed";
          $('#send-verify').addClass('active');
           $('body').addClass('blocked');
          
         });
         
        });
    </script>
    


    </div>

   </div>

      

     

   



 </main>
 


 
</div>

 <?php include("includes/g-footer.php") ?>





<div class="pop-up-wrap" id="send-verify">
    <div class="pop-up-bg pop-up-close"></div>
    <div class="pop-up-box form-box" data-color="green" data-style="box">
     <h3 class="title gr">驗證信已傳送！</h3>
     <h6 class="blk">請檢查您的信箱並進行驗證，如仍無法收到驗證信，請<a href="contact.php" class="url green">聯絡我們</a>。</h6>     

     <div class="btn-block-inline">
      <a href="index.php" class="all-basic-btn" data-color="l-green">到首頁</a>
      <a href="javascript:void(0)" class="all-basic-btn pop-up-close" data-color="green">OK</a>
     </div>

     <div class="close-btn pop-up-close" data-color="green"><i class="icon-clear"></i></div>
    
    </div>
  </div>
</body>
</html>