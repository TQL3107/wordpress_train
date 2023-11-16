<?php
/*
 * Plugin Name:       WordPress 2023 - Eco
 * Plugin URI:        #
 * Description:       Plugin test
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Quản Trị Coder
 * Author URI:        #
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        #
 * Text Domain:       wp2023-eco
 * Domain Path:       /languages
 */

 // Định nghĩa các hàng số của plugin 

 define('WP2023_PATH',plugin_dir_path( __FILE__ ));
 define('WP2023_URI',plugin_dir_path( __FILE__ ));

 //Định nghĩa hành động khi được plugin được kích hoạt

register_activation_hook(__FILE__,'wp2023_eco_activation');
function wp2023_eco_activation(){
   // Tạo CSDL

   // Tạo dữ liệu mẫu
   // Tạo options 
}

// Định nghĩa hành động khi đc plugin được tắt đi
register_deactivation_hook(__FILE__,'wp2023_eco_deactivation');
function wp2023_eco_deactivation(){
    // Xóa CSDL

    // Xóa options
}
include_once WP2023_PATH. 'includes/includes.php';
