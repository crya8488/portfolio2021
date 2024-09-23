<!-- (2)圖片 -->
     <div class="form-box submit-wrap" data-color="green" data-style="box">
       <div class="submit-title"><i class="icon-photo_size_select_actual"></i>圖片/照片投稿</div>
       <div class="submit-content">
        <!-- 【作者姓名】自動帶入會員姓名，不可更改 -->
         <div>
          <label>
           <p class="t1">1.作者姓名</p>
           <input type="text" value="林小美" readonly>
          </label>
         </div>
         <!-- 【投稿標題】 -->
         <div>
          <label>
           <p class="t1">2.投稿標題</p>
           <input type="text" placeholder="請輸入標題" required>
          </label>
         </div>

         <!-- 【封面圖片】  -->
         <!-- 圖片上傳1張，限.jpg檔案，每一檔案大小<=1MB-->
         <!-- ***上傳壓縮尺寸為 500*500 內 , 解析度72dpi ***-->
         <!-- <div class="pic-upload">
          <label>
           <p class="t1">3.封面圖片</p>
          </label>
          <h6 class="t3">※限JPG圖檔，圖片檔案不可超過1MB</h6>
          <ul class="pic-upload-box">
           <li>
             <label class="upload-btn-box">
              <input onchange="readURL(this)" targetID="UploadImgCover2" type="file" accept="image/jpeg" required>
              <h6><i class="icon-photo_size_select_actual"></i>選擇檔案</h6>
              <div class="img-box"><img id="UploadImgCover2" src=""></div>
             </label>
           </li>
          </ul>
         </div> -->

         <!-- 【投稿圖片上傳】  -->
         <!-- 圖片上傳最少1張、最多5張，限.jpg檔案，每一檔案大小<=1MB-->
         <!-- ***上傳壓縮尺寸為 1200*1200 內 , 解析度72dpi ***-->
         <div class="pic-upload">
          <label for=""><p class="t1">3.圖片上傳</p></label>
          <h6 class="t3">※限JPG圖檔，最多投稿5張，每張不可超過1MB</h6>
          <ul class="pic-upload-box many">
           <li id="Upload1">
             <label class="upload-btn-box">
              <input onchange="readURL(this)" targetID="UploadImg1" type="file" accept="image/jpeg" name="UploadImg1">
              <h6><i class="icon-photo_size_select_actual"></i>選擇檔案</h6>
              <div class="img-box"><img id="UploadImg1" src=""></div>
             </label>
           </li>
           <li id="Upload2">
             <label class="upload-btn-box">
              <input  onchange="readURL(this)" targetID="UploadImg2" type="file" accept="image/jpeg" name="UploadImg2">
              <h6><i class="icon-photo_size_select_actual"></i>選擇檔案</h6>
              <div class="img-box"><img id="UploadImg2" src=""></div>
             </label>
             <!-- <div class="remove-btn"><i class="icon-clear"></i></div> -->
           </li>

           <li id="Upload3">
             <label class="upload-btn-box">
              <input  onchange="readURL(this)" targetID="UploadImg3" type="file" accept="image/jpeg" name="UploadImg3">
              <h6><i class="icon-photo_size_select_actual"></i>選擇檔案</h6>
              <div class="img-box"><img id="UploadImg3" src=""></div>
             </label>
           </li>

           <li id="Upload4">
             <label class="upload-btn-box">
              <input  onchange="readURL(this)" targetID="UploadImg4" type="file" accept="image/jpeg" name="UploadImg4" >
              <h6><i class="icon-photo_size_select_actual"></i>選擇檔案</h6>
              <div class="img-box"><img id="UploadImg4" src=""></div>
             </label>
           </li>

           <li id="Upload5">
             <label class="upload-btn-box">
              <input  onchange="readURL(this)" targetID="UploadImg5" type="file" accept="image/jpeg" name="UploadImg5">
              <h6><i class="icon-photo_size_select_actual"></i>選擇檔案</h6>
              <div class="img-box"><img id="UploadImg5" src=""></div>
             </label>
           </li>

           <li id="add-btn">
             <label class="upload-btn-box add">
              <h6><i class="icon-add_photo_alternate"></i>新增</h6>
             </label>
           </li>
          </ul>


         </div>
         

         <!-- 【作品介紹】  -->
         <div>
          <label>
           <p class="t1">4.作品介紹(最多200字)</p>
           <textarea class="wishContent" cols="30" rows="10" placeholder="請輸入說明文字，向大家介紹您的作品。(最多200字)" maxlength="200"></textarea>
          </label>
          <h6>目前字數：<span class="wordsNum">0/200</span></h6>
          
         </div>
         

         <!-- 驗證碼 -->
         <div>
          
            <p class="t1">5.請輸入驗證碼</p>
            <label class="captcha">
            <input type="text" placeholder="請輸入圖中的英文數字" required>
            <a href="javascript:void(0)">
             <img src="img/demo/captcha.jpg" alt="">
             <span class="all-basic-btn small" data-color="green">更新<i class="icon-refresh"></i></span>
            </a>
          </label>
         </div>
       </div>

     </div>

<script>
   // 增加圖片上傳欄位(最多5欄位)
   $(function () {
    $('#add-btn').click(function (){
     if(!$('#Upload2').hasClass('show')){
        $('#Upload2').addClass('show');
     }
     else if($('#Upload2').hasClass('show')&& 
     !$('#Upload3').hasClass('show')){
        $('#Upload3').addClass('show');
     }
     else if($('#Upload3').hasClass('show') && 
     !$('#Upload4').hasClass('show')){
        $('#Upload4').addClass('show');
     }
     else if($('#Upload4').hasClass('show') && 
     !$('#Upload5').hasClass('show')){
        $('#Upload5').addClass('show');
        $('#add-btn').hide();
     };
    });
   });
</script>

<!-- 作品介紹字數限制 -->
<script>
  //封裝一個限制字數方法
  var checkStrLengths = function (str, maxLength) {
      var maxLength = maxLength;
      var result = 0;
      if (str && str.length > maxLength) {
          result = maxLength;
      } else {
          result = str.length;
      }
      return result;
  }

  //監聽輸入
  $(".wishContent").on('input propertychange', function () {

      //獲取輸入內容
      var userDesc = $(this).val();

      //判斷字數
      var len;
      if (userDesc) {
          len = checkStrLengths(userDesc, 200);
      } else {
          len = 0
      }

      //顯示字數
      $(".wordsNum").html(len + '/200');
  });
</script>