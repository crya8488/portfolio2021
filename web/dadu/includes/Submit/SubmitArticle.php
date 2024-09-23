<!-- (1)文章 -->
     <div class="form-box submit-wrap" data-color="green" data-style="box">
       <div class="submit-title"><i class="icon-drive_file_rename_outline"></i>文章投稿</div>
       <div class="submit-content">

         <!-- 【作者姓名】自動帶入會員姓名，不可更改 -->
         <div>
          <label>
           <p class="t1">1.作者姓名 <span class="t3">※會員姓名</span></p>
           <input type="text" value="林小美" readonly>
          </label>
         </div>


         <!-- 【投稿標題】 -->
         <div>
          <label>
           <p class="t1">2.投稿標題 <span class="t3">※最多30字</span></p>
           <input type="text" placeholder="請輸入標題" maxlength="30" required>
          </label>
         </div>
         

         <!-- 【封面圖片】  -->
         <!-- 圖片上傳1張，限.jpg檔案，每一檔案大小<=1MB-->
         <!-- ***上傳壓縮尺寸為 500*500 內 , 解析度72dpi ***-->
         <!-- <div class="pic-upload">
          <p class="t1">3.封面圖片</p>
          <h6 class="t3">※限JPG圖檔，圖片檔案不可超過1MB</h6>

          <ul class="pic-upload-box">
           <li>
             <label class="upload-btn-box">
              <input onchange="readURL(this)" targetID="UploadImgCover1" type="file" accept="image/jpeg" required>
              <h6><i class="icon-photo_size_select_actual"></i>選擇檔案</h6>
              <div class="img-box"><img id="UploadImgCover1" src=""></div>
             </label>
           </li>
          </ul>
          <br>
          
         </div> -->


         <!-- 【文章內容】  -->
         <!-- 編輯器區塊 -->
         <div>
          <p class="t1">3.文章內容</p>
          <div id="editor1" class="editor-box"></div>
         </div>

         <!-- 驗證碼 -->
         <div>
          
            <p class="t1">4.請輸入驗證碼</p>
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



<!-- CKEditor -->
<script>
	ClassicEditor
    .create( document.querySelector( '#editor1' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
</script>