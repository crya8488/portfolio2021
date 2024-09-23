<!-- 相容性 -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="viewport-fit=cover, width=device-width,initial-scale=1.0, user-scalable=no">

<!-- iphone Safari 取消偵測數字為電話號碼 -->
<meta name="format-detection"content="telephone=no">

<!-- SEO -->
<title><?php echo $title?></title>
<link rel="shortcut icon" href="img/favicon.ico">
<meta name="theme-color" content="#c66742">
<meta name="keywords" content="<?php echo $keywords?>">
<meta name="description" content="<?php echo $description?>">
<meta name="copyright" content="<?php echo $company?>" />
<!-- <meta name="robots" content="all" /> -->
<!-- <meta name="Distribution" content=""> -->
<meta property="og:title" content="<?php echo $title?>"/> 
<meta property="og:description" content="<?php echo $description?>"/> 
<meta property="og:image" content="<?php echo $CoverImage?>"/> 
<!-- <meta property="og:site_name" content=""/>  -->

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@UBofficial">
<meta name="twitter:image" content="<?php echo $CoverImage?>">

<!-- CSS -->
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="fonts/style.css" rel="stylesheet" type="text/css" />
<link href="css/animate.css" rel="stylesheet" type="text/css" />
<link href="css/style.css?<?php echo date('Ymdis')?>" rel="stylesheet" type="text/css" />
<!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;900&display=swap" rel="stylesheet"> -->

<!-- JS -->
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/main.js"></script>

<!-- < Plugins > -->
<!-- LightGallery.js -->
<link href="plugin/lg/css/lightgallery.min.css" rel="stylesheet" type="text/css" />
<link href="plugin/lg/css/lg-transitions.min.css" rel="stylesheet" type="text/css" />
<link href="plugin/lg/css/lg-fb-comment-box.min.css" rel="stylesheet" type="text/css" />
<link href="plugin/lg/css/lightgallery-custom.css" rel="stylesheet" type="text/css" />
<script src="plugin/lg/js/lightgallery-all.min.js"></script>

<!-- Wow.js + Animate.css -->
<!-- <script src="plugin/wow/wow.min.js"></script>
<link href="css/animate.css" rel="stylesheet" type="text/css" /> -->

<!-- owl.carousel.js -->
<script src="plugin/owl/owl.carousel.min.js"></script>
<link href="plugin/owl/owl.carousel.min.css" rel="stylesheet" type="text/css" />
<link href="plugin/owl/owl.theme.default.min.css" rel="stylesheet" type="text/css" /> 



<!-- Google Fonts Noto Sans TC -->
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;700&display=swap" rel="stylesheet">


<!-- -webkit-box-orient: vertical; in sass is not compiled in gulp -->
<style>
.box-list li a .text h5,
.box-list li a .text h6{
 box-orient: vertical;
 -webkit-box-orient: vertical;
 /* -webkit-line-clamp: 3; */
}
/* .idx-news .box-list li a .text h6{
 -webkit-line-clamp: 6;
}  */

</style>