<html lang="zh-Hant">
<head>
    <meta charset="utf-8">
    <title><?php bloginfo('title'); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() )?>/img/favicon.ico"/>
    <meta name="description" content="歡迎各位狸民來狸長辦公室，作伙來飲茶，聊聊生活大小事。" />
    <meta property="og:url" content="http://laiphaute.com/" />
    <meta property="og:title" content="狸長辦公室-Laiphaute" />
    <meta property="og:description" content="歡迎各位狸民來狸長辦公室，作伙來飲茶，聊聊生活大小事。" />
    <meta property="og:image" content="<?php echo esc_url( get_template_directory_uri() )?>/img/fbpic.png" />
    <link href="<?php echo esc_url( get_template_directory_uri() )?>/css/reset.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo esc_url( get_template_directory_uri() )?>/css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo esc_url( get_template_directory_uri() )?>/css/rwd.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() )?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() )?>/css/owl.theme.default.min.css">
    <script src="<?php echo esc_url( get_template_directory_uri() )?>/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() )?>/js/main.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() )?>/js/owl.carousel.min.js"></script>
    <?php wp_head(); ?>
    <script>
      $(function(){            
        $('.index_banner').owlCarousel({
          items:1,
          nav:true,
          autoplay:true,
          navText:'',
          loop: $('.index_banner').children().length>1,
          dots:false,
          mouseDrag: true,
          autoplayTimeout:5000,
          smartSpeed:800,
          autoplayHoverPause:true,
          margin:10,
        });
        $('.index_project').owlCarousel({
          items:1,
          nav:true,
          autoplay:false,
          navText:'',
          loop: $('.index_project').children().length>1,
          dots:false,
          mouseDrag: true,
          autoplayTimeout:5000,
          smartSpeed:800,
          autoplayHoverPause:true,
        });
        $('.hello').owlCarousel({
          items:1,
          nav:false,
          autoplay:true,
          navText:'',
          loop: $('.hello').children().length>1,
          dots:false,
          mouseDrag: false,
          autoplayTimeout:2000,
          smartSpeed:800,
          autoplayHoverPause:false,
        });
      });
    </script>
</head>
<body class="<?php
			 	echo get_post_type( get_the_ID() );
			 	if (is_single()) { echo ' post'; }
			 ?>">
<!-- Menu -->
<div class="menu">
    <div class="menu_logo">
        <a href="<?php echo get_site_url(); ?>">
            <img src="<?php echo esc_url( get_template_directory_uri() )?>/img/logo.svg" alt="狸長辦公室">
        </a>
    </div>

    <!-- <ul class="menu_list"> -->
      <?php
        $args = array(
          'theme_location' => 'Header-menu',
          'container' => false,
          'container_id' => '',
          'menu_class' => 'menu_list',
          'menu_id' => '',
        );
      
        wp_nav_menu( $args );
      ?>
        <!-- <li>
            <a href="about.php" title="">關於狸長</a>
        </li>
        <li>
            <a href="project.php" title="">企劃專題</a>
        </li>
        <li>
            <a href="article.php" title="">圖文專區</a>
        </li>
        <li>
            <a href="news.php" title="">最新消息</a>
        </li>
        <li>
            <a href="calender.php" title="">狸長日安</a>
        </li>
        <li class="menu_icon">
            <a href="https://www." title="" target="_blank">
                <img src="<?php echo esc_url( get_template_directory_uri() )?>/img/icon_plurk1.svg" alt="">
            </a>
        </li>
        <li class="menu_icon">
            <a href="https://www." title="" target="_blank">
                <img src="<?php echo esc_url( get_template_directory_uri() )?>/img/icon_fb1.svg" alt="">
            </a>
        </li> -->
    <!-- </ul> -->

    <ul class="menu_open">
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>


    