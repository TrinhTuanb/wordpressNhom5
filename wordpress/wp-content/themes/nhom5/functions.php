<?php
if ( ! function_exists( 'mytheme_logo' ) ) 
{
function mytheme_logo() { ?>
<div class="logo">
<div class="site-name">
<?php
printf(
'<h1><a href="%s" title="%s">%s</a></h1>',
get_bloginfo( 'url' ),
get_bloginfo( 'description' ),
get_bloginfo( 'sitename' )
);
}
?>
</div>
<div class="site-description"><?php bloginfo( 'description' ); ?></div>
</div>
<?php 

if ( ! function_exists( 'mytheme_menu' ) ) {
    function mytheme_menu( $slug ) {
    $menu = array(
    'theme_location' => $slug,
    'container' => 'nav',
    'container_class' => $slug,
    );
    wp_nav_menu( $menu );
    }
    }
} ?>

<?php
function my_styles() {
    wp_register_style( 'main-style', get_template_directory_uri() . '/style.css',
    'all' );
    wp_enqueue_style( 'main-style' );
    }
    add_action( 'wp_enqueue_scripts', 'my_styles' );
?>
<?php
function register_my_menu() {
    register_nav_menu('header-menu',__( 'Menu chính' ));
    register_nav_menu('footer-menu',__( 'Menu Footer' ));
}
add_action( 'init', 'register_my_menu' );
?>
<?php wp_nav_menu( 
  array( 
      'theme_location' => 'header-menu', 
      'container' => 'false', 
      'menu_id' => 'header-menu', 
      'menu_class' => 'menu'
   ) 
); ?>
<?php wp_nav_menu( 
  array( 
      'theme_location' => 'footer-menu', 
      'container' => 'false', 
      'menu_id' => 'footer-menu', 
      'menu_class' => 'menu'
   ) 
); ?>