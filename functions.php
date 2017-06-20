<?php 
//Миниатрюра
add_theme_support( 'post-thumbnails' );

// HeaderMenu
register_nav_menu( 'menu', 'Меню в шапке' );

// SidebarMenu
register_nav_menu( 'menu-footer', 'Меню footer' );

// SidebarMenu
register_nav_menu( 'menu-social', 'Меню соц. сетей' );

add_theme_support( 'post-thumbnails' );


if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'home-reviews', 584, 584, true );
    add_image_size( 'full-img', 360, 270, true );
}
add_filter( 'image_size_names_choose', 'new_custom_sizes' );
function new_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'home-reviews' => 'Размер 584Х584',
        'full-img' => 'Размер 1500Х1125'
    ) );
}
?>