<?php
require_once APP_PATH . '/model/product_model.php';
require_once APP_PATH . '/model/loai_model.php';
require_once APP_PATH . '/library/functions.php';

switch ($action) {

    case 'detailcategory':
        extract(detaicategory());
        break;

    default:
        extract(TrangChu());
        break;
}

function detaicategory()
{
    $list_cate = cate_list_all();
    $ma_loai = $_GET['id'];
    $ctlh = chitietloaihang($ma_loai);
    return [
        'view_name' => 'index/loai_hangct.php',
        'ctlh' => $ctlh,
        'list_cate' => $list_cate
    ];
}
