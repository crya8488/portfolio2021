$(function(){
 

 // ================= Owl輪播套件 ================= //

 // 本月之星
 $('.star-list').owlCarousel({
  items: 1,
  navText: '',
  autoplay: true,
  loop: $(this).children().length > 1,
  margin: 20,
  dots: true,
  autoplayTimeout: 2000,
  smartSpeed: 2000,
  responsive: {
   0: {
    items: 1,
    dots: $('.star-list').children().length > 1,
    loop: $('.star-list').children().length > 1,
    nav: true,
    autoplayTimeout: 2000,
   },
   601: {
    items: 2,
    dots: $('.star-list').children().length > 2,
    loop: $('.star-list').children().length > 2,
    nav: true,
    autoplayTimeout: 2000,
   },
   769: {
    items: 3,
    dots: $('.star-list').children().length > 3,
    loop: $('.star-list').children().length > 3,
    nav: true,
    autoplayTimeout: 2000,
    
   },
   1025: {
    items: 1,
    dots: $('.star-list').children().length > 1,
    loop: $('.star-list').children().length > 1,
    nav: false,
    autoHeight: true,
   }
  },
  
 });

 // 自由投稿
 $('#submission').owlCarousel({
  items: 3,
  nav: true,
  navText: false,
  autoplay: true,
  loop: $('#submission').children().length > 1,
  margin: 0,
  dots: false,
  autoplayTimeout: 4000,
  smartSpeed: 2000,
  responsive: {
   0: { items: 1, nav: false, dots: true },
   451: { items: 2 },
   1025: { items: 3 }
  }
 });

 // 相關連結
 $('#links').owlCarousel({
  items: 4,
  nav: true,
  navText: false,
  autoplay: true,
  loop: $('#links').children().length > 1,
  margin: 0,
  dots: false,
  autoplayTimeout: 4000,
  smartSpeed: 2000,
  responsive: {
   0: { items: 2, nav: false, dots: true },
   451: { items: 3 },
   1025: { items: 4 }
  }
 });

 
 // ================= 螢幕寬度變化設定 ================= //

 $(window).resize(function () {

  // ※※※※※※※ 【輪播大圖套件設定】 ※※※※※※※ //

  // 【定義】
  // 電腦版輪播大圖
  var BannerPC = $('.banner-pc');
  // 手機版輪播大圖
  var BannerMB = $('.banner-m');


  //當螢幕寬度大於1024px(電腦版)

  if ($(window).width() > 1024) {

   //手機版大圖隱藏
   BannerMB.hide();
   
   //電腦版大圖加上owl輪播套件
   BannerPC.owlCarousel({
    items: 1,
    nav: true,
    navText: false,
    autoplay: true,
    loop: BannerPC.children().length > 1,
    margin: -1,
    dots: true,
    autoplayTimeout: 4000,
    smartSpeed: 3000,
    autoplayHoverPause: true
   });

   //清除掉手機版的owl
   if ($(window).width() > 1024 && BannerMB.hasClass('owl-carousel')) {
    BannerMB.trigger('destroy.owl.carousel').removeClass('owl-carousel owl-loaded owl-center');
    BannerMB.find('.owl-stage-outer').children().unwrap();

    window.location.reload();
   }

   // -------------輪播圖片------------ //


  } else {

   // -------------輪播圖片------------ //

   $('.banner-pc').hide();
   $('.banner-m').show();

   $('.banner-m').owlCarousel({
    items: 1,
    navText: false,
    nav: true,
    // navText: false,
    autoplay: true,
    loop: $('.banner-m').children().length > 1,
    margin: -1,
    dots: true,
    autoplayTimeout: 4000,
    smartSpeed: 2000,
    autoplayHoverPause: true
    // autoHeight: true
   });

   //清除掉桌面版的owl
   if ($(document).width() <= 1024 && $('.banner-pc').hasClass('owl-carousel')) {
    $('.banner-pc').trigger('destroy.owl.carousel').removeClass('owl-carousel owl-loaded owl-center');
    $('.banner-pc').find('.owl-stage-outer').children().unwrap();

    window.location.reload();
   }
  }

  // ※※※※※※※ 【其他部份設定】 ※※※※※※※ //

  
  // -------------1024px以下時(平板)------------ //
  if ($(window).width() <= 1024) {

   // 最新消息隱藏預覽框，移除點擊切換功能
   $('#idx-news-wrap').removeClass('tab-wrap');
   $('.text-title-list').removeClass('tab-btn').children('li').removeClass('active');

   //本月之星從浮動改為直接列示
   // $('#mon-star').removeClass('close');

  }else{
   // 本月之星
   var StarBtn = $('#star-btn');
   var StarBlock = $('#mon-star');
   // var StarList = $('#mon-star .star-list');
   var StarCloseBtn = $('#mon-star .close');

   // 點擊按鈕開啟
   StarBtn.click(function () {
    
    if (StarBlock.hasClass('close')) {
     //本月之星展開
     StarBlock.removeClass('close');
     //按鈕移除active
     StarBtn.removeClass('active');

    } else {

     //本月之星收合
     StarBlock.addClass('close');
     //按鈕加上active
     StarBtn.addClass('active');

    }
   });

   // 點擊.close關閉
   StarCloseBtn.click(function () {
    StarBlock.addClass('close');
    StarBtn.addClass('active');
   });
  }
  // -------------600px以下時(手機)------------ //
  if ($(window).width() <= 600) {

   // 網站簡介不換行
   $('#idx-about-content').find('br').remove();

  }

 }).resize();



 // ================= 點擊/滑動切換功能 ================= //

 // 【定義】
 

 // 切換功能區塊(含有切換按鈕、切換內容)
 var TabBlock = '.tab-wrap';
 // 切換按鈕 
 var TabBtn = '.tab-btn li';
 //****說明*****
 //切換按鈕 格式必須為 ul>li>a[href="#ABC"]
 //切換內容 必須設定 [id="ABC"]，格式建議ul>li[id="ABC"],或div>div[id="ABC"]
 //ABC可以切換為任何內容，如有串接程式，必須為ABC1、ABC2...(後面加上數字)


  // 預設顯示第一個 Tab
  var _showTab = 0;

   $(TabBlock).each(function(){
     // 目前的頁籤區塊
     var $tab = $(this);
     var $defaultLi = $(TabBtn, $tab).eq(_showTab).addClass('active');
      $($defaultLi.find('a').attr('href')).siblings().hide();


       //-------------首頁最新消息-設定為滑動顯示------------ //
       if ($tab.is('#idx-news-wrap')) {
  
         // 當 li 頁籤被點擊時...
         // 若要改成滑鼠移到 li 頁籤就切換時, 把 click 改成 mouseover
         $(TabBtn, $tab).mouseover(function() {
          // 找出 li 中的超連結 href(#id)
          var $this = $(this),
           _clickTab = $this.find('a').attr('href');
          // 把目前點擊到的 li 頁籤加上 .active
          // 並把兄弟元素中有 .active 的都移除 class
          $this.addClass('active').siblings('.active').removeClass('active');
          // 淡入相對應的內容並隱藏兄弟元素
          $(_clickTab).stop(false, true).show().siblings().hide();
          return false;
         }).find('a').focus(function(){
          this.blur();
         });
     
  }else{

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
 }
    
  
    
  });

});
