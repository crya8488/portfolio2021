<?php

/* Menu */
function register_my_menus() {
  register_nav_menus(
    array(
      'Header-menu' => __( '上方選單' ),
      'Footer-menu' => __( '下方選單' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

add_filter( 'wp_nav_menu_items', 'your_custom_menu_item', 10, 2 );
function your_custom_menu_item ( $items, $args ) {
    if ($args->theme_location == 'Header-menu') {
        $items .= '<li class="menu_icon"><a href="https://www.plurk.com/laiphaute" title="laiphaute" target="_blank">
                <img src="'.esc_url( get_template_directory_uri() ).'/img/icon_plurk1.svg" alt="">
            </a></li><li class="menu_icon"><a href="https://www.facebook.com/443995983009462/" title="" target="_blank">
                <img src="'.esc_url( get_template_directory_uri() ).'/img/icon_fb1.svg" alt="">
            </a>
        </li>';
    }
    return $items;
}