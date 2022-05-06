<?php 


function initMyTheme() {
    // đăng kí menu
    register_nav_menu('header-menu',__( 'Menu top' ));
    register_nav_menu('main-menu',__( 'Menu main' ));
    register_nav_menu('footer-menu',__( 'Menu footer' ));

    // đăng kí sidebar
    if (function_exists('register_sidebar')){
        register_sidebar(array(
        'name'=> 'Cột bên',
        'id' => 'sidebar',
    ));
    }
}
add_action( 'init', 'initMyTheme' );