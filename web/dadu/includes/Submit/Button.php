<div class="detail-box" color="orange">
 <div class="content">
  <h5><b><i class="icon-error orange"></i> 在您送出投稿前，請先閱讀並同意「 <a href="javascript:void(0)" class="url orange" id="submit-terms-btn">投稿作品授權條款</a> 」。</b></h5>
  <label class="check-box confirm">
    <i class="icon-check_box_outline_blank uncheck"></i>
    <i class="icon-check_box checked "></i>
    <h5>我已閱讀並同意投稿作品授權條款。(請勾選)</h5>
  </label>
 </div>
</div>

<script>
  $(function () {
   $('.check-box.confirm').click(function () {
    $('#confirm-to-btn').toggleClass('active');
   });
  });
 </script>

<div class="btn-block-inline">
 <!-- 儲存草稿按鈕 -->
 <div>
  <a href="javascript:void(0)" class="all-big-btn" data-color="orange" id="submit-save-btn">儲存草稿 <i class="icon-push_pin"></i></a><br>
  <p>※ 記得要在徵稿期限前送出投稿喔!!</p>
 </div>

 <!-- 送出投稿按鈕 -->
 <div id="confirm-to-btn">
  <a href="javascript:void(0)" class="all-big-btn" data-color="green" id="submit-check-btn">送出投稿 <i class="icon-outgoing_mail"></i></a><br>
  <p>※ 提醒您，投稿送出後無法再進行編輯</p>
 </div>
 
 
</div>




