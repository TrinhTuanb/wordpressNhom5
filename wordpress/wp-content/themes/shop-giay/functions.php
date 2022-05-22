<?php 
// /**
// @ Chèn CSS và Javascript vào theme
// @ sử dụng hook wp_enqueue_scripts() để hiển thị nó ra ngoài front-end
// **/
// function my_styles() {
//     /*
//     * Hàm get_stylesheet_uri() sẽ trả về giá trị dẫn đến file style.css của theme
//     * Nếu sử dụng child theme, thì file style.css này vẫn load ra từ theme mẹ
//     */
//     wp_register_style( 'main-style', get_template_directory_uri() . '/css/main.css');
//     wp_enqueue_style( 'main-style' );
//     }
//     add_action( 'wp_enqueue_scripts', 'my_styles' );
    
// function my_custom_wc_theme_support () {
//     add_theme_support ('woocommerce');
//     add_theme_support ('wc-product-gallery-lightbox');
//     add_theme_support ('wc-product-gallery-slider');
// }
// add_action ('after_setup_theme', 'my_custom_wc_theme_support');

function initMyTheme() {
    // đăng kí menu
    register_nav_menu('header-menu',__( 'Menu top' ));
    
   

    // đăng kí sidebar
    if (function_exists('register_sidebar')){
        register_sidebar(array(
        'name'=> 'Cột bên',
        'id' => 'sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3><i class="fa fa-bars"></i>',
        'after_title'   => '</h3>',
    ));
    }
}
add_action( 'init', 'initMyTheme' );
function slider_post_type(){
    /*
     * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
     */
    $label = array(
        'name' => 'Ảnh slider', //Tên post type dạng số nhiều
        'singular_name' => 'Ảnh slider' //Tên post type dạng số ít
    );
 
    /*
     * Biến $args là những tham số quan trọng trong Post Type
     */
    $args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Ảnh slider', //Mô tả của post type
        'supports' => array(
            'title',
            
            'thumbnail'
        ), //Các tính năng được hỗ trợ trong post type
        
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' => 'dashicons-format-gallery', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post' //
    );
 
    register_post_type('slider', $args); //Tạo post type với slug tên là sanpham và các tham số trong biến $args ở trên
 
}
add_action('init', 'slider_post_type');

function percentSale($price, $price_sale){
    $sale = ($price_sale * 100)/$price;
    $percent = 100 - $sale;
    return number_format($percent, 1);
}


