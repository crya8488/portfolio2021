<!-- FOOTER -->
<div class="footer">
    <div class="gotop">
        <img src="<?php echo esc_url( get_template_directory_uri() )?>/img/gotop.svg">
    </div>
    <div class="box1">
        <img src="<?php echo esc_url( get_template_directory_uri() )?>/img/logo.svg" class="logo">
        <div class="list">
         <?php
            $primaryMenu = array(
                'theme_location'  => 'Footer-menu',
                'menu'            => '',
                'container'       => '',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'list',
                'echo'            => false,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'depth'           => 0,
                'walker'          => ''
            );
            echo strip_tags( wp_nav_menu( $primaryMenu ), '<a>' );
        ?>
        </div>
    </div>

    <div class="box2">
        <span class="copyright">
            2019 © 狸長辦公室 All Rights Reserved. 
        </span>  
        <div class="icon_list">
            <a href="mailto:laiphaute@gmail.com"><img src="<?php echo esc_url( get_template_directory_uri() )?>/img/icon_email.svg" alt="狸長信箱"></a>
            <a href="https://www.plurk.com/laiphaute"><img src="<?php echo esc_url( get_template_directory_uri() )?>/img/icon_plurk2.svg" alt="狸長噗浪"></a>
            <a href="https://www.facebook.com/443995983009462/"><img src="<?php echo esc_url( get_template_directory_uri() )?>/img/icon_fb2.svg" alt="狸長Facebook"></a>
            <!-- <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() )?>/img/icon_yt.png" alt="狸長YOUTUBE"></a> -->
            <!-- <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() )?>/img/icon_ig.png" alt="狸長Instagram"></a> -->
        </div>
    </div>

</div>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.2'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/zh_TW/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="443995983009462"
  theme_color="#eac960"
  logged_in_greeting="Hi～有什麼需要狸長幫忙的嗎？"
  logged_out_greeting="Hi～有什麼需要狸長幫忙的嗎？">
</div>

<?php wp_footer(); ?>



</body>