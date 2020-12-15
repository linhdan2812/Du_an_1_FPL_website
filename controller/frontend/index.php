<?php
require_once APP_PATH . '/model/product_model.php';
require_once APP_PATH . '/model/loai_model.php';
require_once APP_PATH . '/library/functions.php';

//biến $action lấy ở file index.php ở thư mục gốc website
//khi controller này nhúng vào file index bằng lệnh require thì sẽ sử dụng được biến action
switch ($action) {
    case 'lien-he': //cái chữ lien-he này là giá trị của tham số action trên url: ?actione=lien-he
        extract(LienHe()); //hàm extract này bung cái mảng ở lệnh return trong hàm ra thành từng biến riêng
        break;
    case 'cate-view':
        extract(CateView());
        break;
    case 'cart':
        extract(Cart());
        break;
    case 'info':
        extract(Info());
        break;

    default: // mặc đinh sẽ gọi action trang chủ
        extract(TrangChu());
        break;
}
// viết hàm xử lý cho từng actione 
function TrangChu()
{
    $list_product = product_list_all();
    $list_cate = cate_list_all();
    return [
        'view_name' => 'index/trang-chu.php',
        'list_product' => $list_product,
        'list_cate' => $list_cate
    ];
}
function LienHe()
{
    $list_cate = cate_list_all();
    return [
        'view_name' => 'index/lien-he.php',
        'list_cate' => $list_cate
    ];
}
function CateView()
{
    $list_product = product_list_all();
    $list_cate = cate_list_all();
    $ctlh = chitietloaihang('id');
    return [
        'list_cate' => $list_cate,
        'view_name' => 'index/cate-view.php',
        'ctlh' => $ctlh
    ];
}
function Cart()
{
    return [
        'view_name' => 'index/cart.php',
    ];
}
function Info()
{
    return [
        'view_name' => 'index/info.php'
    ];
}
function Recently()
{
    return [
        'view_name' => 'index/recently.php'
    ];
}
