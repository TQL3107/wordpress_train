<?php
/* 
RestAPI:
RESTful API là một giao thức

REST hoạt dộng dựa chủ yếu trên phương thức CRUD (Create, Read, Update, Delete)
tương đương với 4 giao thức HTTP: POST, GET, PUT, DELETE.
Xây dựng rest api cho tài nguyên orders

GET - /orders - lấy toàn bộ orders
POST - /orders - thêm mới order 

GET     - /orders/{id} - lấy chi tiết order theo tham số id
PUT     - /orders/{id} - cập nhật order theo tham số id
DELETE  - /orders/{id} - xóa order theo tham số id
*/

add_action('rest_api_init','wp2023_apis');
function wp2023_apis(){
    $namespace = 'wp2023/v1';
    $base = 'orders';

    register_rest_route( $namespace, '/' .$base,[
       [
            'methods' => WP_REST_Server::READABLE,
            'callback' => 'wp2023_apis_order_all'
       ],
       [
        'methods' => WP_REST_Server::CREATABLE,
        'callback' => 'wp2023_apis_order_store'
        ] 
    ] );
    register_rest_route( $namespace,'/'.$base. '/(?P<id>[\d]+)', [
        [
            'methods' => WP_REST_Server::READABLE, // GET
            'callback' => 'wp2023_apis_order_all'
       ],
       [
        'methods' => WP_REST_Server::EDITABLE, //PUT
        'callback' => 'wp2023_apis_order_update' 
       ],
       [
        'methods' => WP_REST_Server::DELETABLE, //PUT
        'callback' => 'wp2023_apis_order_delete' 
   ]
    ]);
}

// GET - /orders - lấy toàn bộ orders
function wp2023_apis_order_all(){
    $objwp2023Order = new wp2023Order();
    $result = $objwp2023Order -> paginate 
    $data = [
        'success'=> true,
        'data' => $result
    ]
    return new WP_REST_Response( $data,200);
}

//POST - /orders - thêm mới order
function wp2023_apis_order_store(){
    echo 'wp2023_apis_order_store'; die();
}

//GET     - /orders/{id} - lấy chi tiết order theo tham số id
function wp2023_apis_order_show(){
    echo 'wp2023_apis_order_show'; die();
}

// PUT     - /orders/{id} - cập nhật order theo tham số id
function wp2023_apis_order_update(){
    echo 'wp2023_apis_order_update'; die();
}

//DELETE  - /orders/{id} - xóa order theo tham số id
function wp2023_apis_order_delete(){
    echo 'wp2023_apis_order_delete'; die();
}