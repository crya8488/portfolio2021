<div class="share-btn-box">
  <ul>
   <!-- 文章收藏功能
   ※ 登入會員才能收藏-->
   <li><a href="javascript:(void)" data-fun="fav" target="" id="fav-btn"><i class="icon-favorite"></i><p>收藏</p></a></li>

   <li><a href="https://www.facebook.com/sharer.php?u=<?php echo $URL; ?>" data-fun="fb" target="_blank"><i class="icon-facebook"></i><p>分享</p></a></li>

   <li><a href="http://line.naver.jp/R/msg/text/?【大肚山知識平台】好文分享：「文章標題文章標題文章標題」<?php echo $Title ?>%0D%0A<?php echo $URL; ?>" data-fun="line" target="_blank"><i class="icon-line"></i><p>分享</p></a></li>

   <li>
<div class="copylink">
   <input type="text" value="<?php echo $URL ?>" id="ShareLink" >
   <a href="javascript:CopyLink()" data-fun="url" id="ShareBtn"><i class="icon-link"></i><p>複製連結</p></a>

   <!-- <button onclick="CopyLink()" id="ShareBtn" data-fun="url"><i class="icon-link"></i><p>複製連結</p></button> -->
  </div>
    
   </li>

  </ul>


 </div>
 
<script>
  function CopyLink(){ 
    /* Get the text field */
    var copyText = document.getElementById("ShareLink");

    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /*For mobile devices*/

    /* Copy the text inside the text field */
    document.execCommand("copy");

    /* Alert the copied text */
    // alert("Copied the text: " + copyText.value);
    alert("連結已複製！將文章分享出去吧！ ");
   }
</script>

 <div class="pop-up-wrap" id="fav-login">
  <div class="pop-up-bg"></div>
  <div class="pop-up-box">
   <div class="content center">
    <h3 class="title">請先登入會員</h3>
    <p>登入後就可以收藏所有你喜歡的文章</p>
    <div class="btn-block">
     <a href="login.php" class="all-basic-btn" data-color="green">前往登入</a>
     <a href="javascript:void(0)" class="all-basic-btn pop-up-close" data-color="orange">晚點再說</a>
    </div>
    <p>還不是會員？<a href="sign.php">前往註冊</a></p>
   </div>
   <div class="close-btn pop-up-close"><i class="icon-clear"></i></div>
  </div>
  
 </div>
 
 <script>

 $(function () {
   $('#fav-btn').click(function () { 
    $('#fav-login').addClass('active');
    $('body').addClass('blocked');
   });
   $('.pop-up-bg').click(function (){
    $('.pop-up-wrap').removeClass('active');
    $('body').removeClass('blocked');
   });
   $('.pop-up-close').click(function (){
    $('.pop-up-wrap').removeClass('active');
    $('body').removeClass('blocked');
   });
 });
 </script>
