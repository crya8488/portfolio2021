// ::::::::::::::::: 主選單 下拉選單 開啟/關閉::::::::::::::::: //

$(function () {
 // 有下拉選單的項目，加上按鈕icon
 var DropMenu = $('#menu-main-list .drop-menu');
 DropMenu.parent('li').addClass('more');
 DropMenu.after('<i class="icon-arrow-down more-btn"></i>');
 // ::::::::::::::::: 主選單開啟設定::::::::::::::::: //
 //DropOpenBtn=按鈕icon
 var DropOpenBtn = $('#menu-main-list .more-btn');

 // 點擊按鈕icon開啟下拉選單
 DropOpenBtn.click(function () {
  if (!$(this).hasClass('active')) {
   $(this).addClass('active');
   $(this).siblings('.drop-menu').slideDown();
   $(this).parent('li').addClass('active');
   $(this).parent('li').siblings().removeClass('active').find('.drop-menu').slideUp();

  } else {
   $(this).removeClass('active');
   $(this).siblings('.drop-menu').slideUp();
   $(this).parent('li').removeClass('active');

  }

 });

});


// ::::::::::::::::: 螢幕滾動對應::::::::::::::::: //

$(function () {
 //螢幕滾動效果
 $(window).scroll(function () {

  // 電腦版 (螢幕寬度>1024) 時
  if ($(window).width() > 1024) {

   //螢幕滾動超過【100】px，選單縮小
   if ($(this).scrollTop() > 100) {
    $('#menu').addClass('scroll');
   } else {
    $('#menu').removeClass('scroll');
   };

   //螢幕滾動超過【300】px，"本月之星"加上.scroll 縮小
   if ($(this).scrollTop() > 300) {
    $('#mon-star').addClass('scroll');
   } else {
    $('#mon-star').removeClass('scroll');
   };

  };

  //螢幕滾動超過【200】px，GOTOP按鈕出現
  if ($(this).scrollTop() > 300) {
   $('#gotop').addClass('show');
  } else {
   $('#gotop').removeClass('show');
  };


 });



 // ::::::::::::::::: 主選單開啟設定::::::::::::::::: //

 // 點擊選單按鈕時
 $('#menu-btn').click(function () {

     if ($(this).hasClass('active')) {

      $(this).removeClass('active');

      //選單關閉 樣式
      $('#menu').removeClass('active');
      $('#menu .menu-bg').removeClass('active');
      //螢幕固定/不固定
      $('body').removeClass('blocked');

  } else {

      $(this).addClass('active');
      //選單開啟 樣式
      $('#menu').addClass('active');
      $('#menu .menu-bg').addClass('active');
      //螢幕固定/不固定
      $('body').addClass('blocked');
      //按鈕列的下拉選單關閉(搜尋/會員)
      $('#menu-btn-list li').removeClass('active');

  }
 });

 // ::::::::::::::::: 主選單關閉 ::::::::::::::::: //

 //點擊 全螢幕覆蓋背景 ===> 關閉主選單 / 按扭區下拉選單
 $('#menu .menu-bg').click(function () {
  //主選單 => 關閉
  $('#menu').removeClass('active');
  //主選單按鈕樣式 => 關閉
  $('#menu-btn').removeClass('active');
  //鈕區的下拉選單 => 關閉
  $('#menu-btn-list li').removeClass('active');
  //覆蓋背景 => 關閉
  $('#menu .menu-bg').removeClass('active');
  //視窗 => 可滑動
  $('body').removeClass('blocked');

 });

 // ::::::::::::::::: 螢幕尺寸變化 ::::::::::::::::: //

 

 
   



 // GOtop-點擊#gotop緩慢回到頁面頂部
 $('#gotop').click(function () {

  var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');

  $body.animate({
   scrollTop: 0
  }, 1500);

  return false;

 });
 
 // 文章列表 分類選單
 $('.list-cate-box').each(function () {

  $('.cate-select').click(function () {
   if (!$(this).hasClass('active')) {
    $(this).addClass('active');
   } else {
    $(this).removeClass('active');
   };
  });

  $('.close').click(function () {
   $(this).parentsUntil('.cate-box').siblings('.cate-select').removeClass('active');
  });

 });

 // 文章內頁 相關資料
 $('.more-box h5').click(function () {
  $(this).toggleClass('active');
  $(this).next('.content').slideToggle();
 });

 $('.more-box.album').each(function () {
  $('.all').click(function (){
   $(this).hide()
   .siblings('.photos').addClass('active')
   .siblings('.row').show();
  });

  $('.row').click(function () {
   $(this).hide()
   .siblings('.photos').removeClass('active')
   .siblings('.all').show();
  });

 });


  //.article_box替換為編輯器區塊class名稱
  $('.article_wrap').find('iframe').parent().addClass('videoWrapper');
 
  //同意條款(會員註冊/自由投稿)
 $('.check-box.confirm').click(function () {
  $(this).toggleClass('active');
 });
 
  // ::::::::::: 彈出視窗 ::::::::::: //
  //投稿確認
  $('#submit-check-btn').click(function () {
   $('#submit-check').addClass('active');
   $('body').addClass('blocked');
  });
 //投稿-儲存草稿
 $('#submit-save-btn').click(function () {
  $('#submit-save').addClass('active');
  $('body').addClass('blocked');
 });
 //投稿-授權條款
 $('#submit-terms-btn').click(function () {
  $('#submit-terms').addClass('active');
  $('body').addClass('blocked');
 });

  //會員登入login.php忘記密碼
  $('#get-psw-btn').click(function () {
   $('#get-psw').addClass('active');
   $('body').addClass('blocked');
  });

  $('#get-psw-done-btn').click(function () {
   $('#get-psw').addClass('active');
   $('body').addClass('blocked');
  });
  //會員註冊sign3.php重新發送驗證信
  // $('#send-verify-btn').click(function () {
  //  $('#send-verify').addClass('active');
  //  $('body').addClass('blocked');
  // });

 $('.pop-up-close').click(function () {
  // $('#get-psw').removeClass('active');
   $(this).parents('.pop-up-wrap').removeClass('active');
   $('body').removeClass('blocked');
  });
  

 $(window).scroll(function () {

 // ::::::::::: 文章內頁左邊分享/投稿按鈕滑動限制 ::::::::::: //


  var ArticleH = $('#article-wrap').height() - $('.share-btn-box').height() - $('.article-page-top').height() ;
  
 
  if ( $(this).scrollTop() > ArticleH ) {
   $('.share-btn-box').addClass('fixed');
  }else{
   $('.share-btn-box').removeClass('fixed');
  };

  // var SubmissionH = $('#article-wrap').height() - $('.submission-btn-box').height() - $('.article-page-top').height();

  // if ($(this).scrollTop() > SubmissionH) {
  //  $('.submission-btn-box').addClass('fixed');
  // } else {
  //  $('.submission-btn-box').removeClass('fixed');
  // };

 }); 

 // ::::::::::: 填寫表單 ::::::::::: //
 // 單選按鈕點擊
 $('.radio-btn').click(function () {
  if (!$(this).hasClass('active')) {
   $(this).addClass('active').siblings('.radio-btn').removeClass('active');
  }
 });

}); 

// ::::::::::: Header按扭區 下拉選單 開啟/關閉 :::::::::: //

$(function () {

  // 行動版 (螢幕寬度<=1024) 時
  if ($(window).width() <= 1024) {


   //當點擊有下拉選單的按鈕時

   $('#menu-btn-list .drop-menu').siblings('a').click(function () {

    if (!$(this).parent('li').hasClass('active')) {

     $('#menu .menu-bg').addClass('active');
     $('body').addClass('blocked');

     $('#menu').removeClass('active');
     $('#menu-btn').removeClass('active');
     $(this).parent('li').addClass('active').siblings('li').removeClass('active');

    } else {
     $(this).parent('li').removeClass('active');
     $('#menu .menu-bg').removeClass('active');
     $('#menu-btn').removeClass('active');
     $('body').removeClass('blocked');

    }

   });

   //關閉按鈕 收起下拉選單
   $('#menu-btn-list .close').click(function () {
    $(this).parents('li').removeClass('active');
    $('#menu .menu-bg').removeClass('active');
    $('body').removeClass('blocked');

   });
  };

 // });

});

// ::::::::::: 點擊跳至指定位置 ::::::::::: //
// function scrollTo(className) {

//  var webPage = window.location.pathname.replace(/\//g, "");
//  if (webPage != 'about.php') {
//   window.location.href = 'about.php' + '?c=' + className;
//  } else {
//   if ($(window).width() >= 1024) {
//    $('html,body').animate({ scrollTop: $('#' + className).offset().top - 120 }, 600);
//   } else {
//    $('html,body').animate({ scrollTop: $('#' + className).offset().top - 150 }, 600);
//   }
//  }
// }

// ::::::::::: tab切換(通用) ::::::::::: //
var TabBlock = '.tab-wrap';
// 切換按鈕 
var TabBtn = '.tab-btn li';
// 預設顯示第一個 Tab
var _showTab = 0;

$(TabBlock).each(function () {
 // 目前的頁籤區塊
 var $tab = $(this);
 var $defaultLi = $(TabBtn, $tab).eq(_showTab).addClass('active');
 $($defaultLi.find('a').attr('href')).siblings().hide();


 // 當 li 頁籤被點擊時...
 // 若要改成滑鼠移到 li 頁籤就切換時, 把 click 改成 mouseover
 $(TabBtn, $tab).click(function () {
  // 找出 li 中的超連結 href(#id)
  var $this = $(this),
   _clickTab = $this.find('a').attr('href');
  // 把目前點擊到的 li 頁籤加上 .active
  // 並把兄弟元素中有 .active 的都移除 class
  $this.addClass('active').siblings('.active').removeClass('active');
  // 淡入相對應的內容並隱藏兄弟元素
  $(_clickTab).stop(false, true).fadeIn().siblings().hide();
  return false;
 }).find('a').focus(function () {
  this.blur();
 });



});


//文章內頁 相關文章輪播
$(function () {
 $('#related-article').owlCarousel({
  items: 3,
  nav: true,
  navText: false,
  autoplay: false,
  loop: false,
  margin: 10,
  dots: true,
  autoplayHoverPause: true,
  responsive: {
   0: { items: 1 },
   451: { items: 2 },
   1025: { items: 3 }
  }
 });

});



