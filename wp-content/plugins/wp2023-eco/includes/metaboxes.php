<?php
// Product screen: Màn hình chỉnh sửa/thêm mới sản phẩm 
// Đăng ký meta box cho sản phẩm 
add_action('add_meta_boxes','wp2023_meta_box_product');

// can thiệp vào hành động lưu bài viết
add_action('save_post','wp2023_save_post_product');

function wp2023_save_post_product( $post_id ) {
   if( $_REQUEST['post_type'] == 'product'){
    // var_dump($post_id);die();
    $product_price = $_REQUEST['product_price'];
    $product_price_sale = $_REQUEST['product_price_sale'];
    $product_stock = $_REQUEST['product_stock'];
    // Lưu vào CSDL: postmeta
    update_post_meta( $post_id,'product_price', $product_price_sale );
    update_post_meta( $post_id,'product_price_sale',$product_price_sale);
    update_post_meta( $post_id,'product_stock ',$product_stock );    
   }
}

function wp2023_meta_box_product(){
    add_meta_box(
        'wp2023_product_info',          
        'Thông tin sản phẩm', 
        'wp2023_meta_boxe_product_html', 
        'product'
    );
}

function meta_boxe_product(){
    include_once WP2023_PATH. 'includes/templates/meta_boxe_product.php';
}

// Category Screen

// Đăng ký thêm trước cho taxanomy 
add_action('product_cat_add_from_fields','wp2023_meta_boxe_product_cat_add');

function wp2023_meta_boxe_product_cat_add(){
    echo 'wp2023_meta_boxe_product_cat_add';
}
