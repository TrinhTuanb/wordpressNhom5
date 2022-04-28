<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'cms' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qRKY%IR?v=elbr8e]x=4p!KXao&xP$/^0;NCaJ;8#Q9|O4~l(D][23N<F4TmW{yE' );
define( 'SECURE_AUTH_KEY',  '(U03A%S0fKjv;KJx&<Si/D32?h&:@vGk82tZ?c(!qm~}CzFV$M(jwvVs!c]!_Mwr' );
define( 'LOGGED_IN_KEY',    '~$!T#a@v@FgbJWGO%(T5=wxl(@qmC(o,&e$gn.}U>&3) 8pz8GYX?~_6ptAAoP?H' );
define( 'NONCE_KEY',        '<=/xK`tS]s8Gmj%/_j97hg*G~$YmMu^U)_-/1i<nfO}^f<?D9s^u2}N(:L1M>8/C' );
define( 'AUTH_SALT',        'ppV[2/?nV-K,1]mCG;!M< gcO_CCFsd)>/7OFJ<Cg[zAni9nHeHBU=D9ot#3`~gj' );
define( 'SECURE_AUTH_SALT', 'IF}vgT~~V-NYTBP{@+c_7=.6de`:*nLqd_} L$pTF4(R}c#JheHlo~+oHNnYK:-q' );
define( 'LOGGED_IN_SALT',   'N:hcMOK-E3vi.1HDN}NI-8AXu_W/wZerF,/1|}FH|@nb]2l&8Bi`<OAE[q&UNrKi' );
define( 'NONCE_SALT',       'x>b(~}!*D*[.b,Ztd/0 4mHEBW7sMg[A[TzoB+h;5XwTc&7th2;P!-6Ah^MQ&/xK' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
