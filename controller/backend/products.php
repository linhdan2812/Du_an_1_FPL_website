<?php
require_once APP_PATH . '/model/product_model.php';
require_once APP_PATH . '/library/functions.php';
require_once APP_PATH . '/model/loai_model.php';


// Đặt tên các action
// add: thêm mới 
// edit: sửa 
// index: danh sách 
// delete: xóa

switch ($action) {
    case 'add':
        extract(AddProduct());
        break;
    case 'edit':
        extract(EditProduct());
        break;
    case 'delete':
        extract(DeleteProduct());
        break;
    default:
        if (isset($_POST['btn-delete-multi'])) {
            extract(delete_multi());
        }
        extract(ListProduct());
        break;
}
function AddProduct()
{
    $err = []; {
        if (isset($_POST['btnSave'])) {
            extract($_POST);
            if (empty($err)) {
                $up_hinh = save_file("hinh", IMAGE_DIR);
                $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;
                $dataInsert = [
                    'ten_hh' => $ten_hh,
                    'giam_gia' => $giam_gia,
                    'don_gia' => $don_gia,
                    'hinh' => $hinh,
                    'mo_ta' => $mo_ta,
                    'so_luot_xem' => $so_luot_xem,
                    'ma_loai' => $ma_loai
                ];
                $last_id = product_add($dataInsert);
                $msg = "Thêm mới thành công, ID tài khoản mới: " . $last_id;
            } else {
                $msg = implode('<br>', $err);
            }
        }
    }
    return [
        'view_name' => 'products/add.php',
        'new_id' => @$last_id,
        'msg' => @$msg
    ];
}
function EditProduct()
{
    $err = []; {
        if (isset($_POST['btn_update'])) {
            extract($_POST);
            if (empty($err)) {
                $up_hinh = save_file("up_hinh", IMAGE_DIR);
                $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;
                $dataUpdate = [
                    'ten_hh' => $ten_hh,
                    'giam_gia' => $giam_gia,
                    'don_gia' => $don_gia,
                    'hinh' => $hinh,
                    'mo_ta' => $mo_ta,
                    'so_luot_xem' => $so_luot_xem,
                    'ma_loai' => $ma_loai
                ];
                $last_id = product_edit($dataUpdate);
                $msg = "Cập nhật thành công!";
            } else {
                $msg = implode('<br>', $err);
            }
        }
    }
    return [
        'view_name' => 'products/edit.php',
        'new_id' => @$last_id,
        'msg' => @$msg
    ];
}
function DeleteProduct()
{
    product_delete(['ma_hh' => $_GET['id']]);
    $msg = "Xóa thành công";
    $list_product = product_list_all();
    $loai = cate_list_all();
    return [
        'view_name' => 'products/list.php',
        'list_product' => $list_product,
        'list_cate' => $loai,
        'msg' => @$msg
    ];
}
function delete_multi()
{
    $mang_id = $_POST['ma_hh'];
    $msg = implode(',', $mang_id);
    $kqxoa = product_delete_multi(implode(',', $mang_id));
    return [
        'kq' => $kqxoa,
        'msg' => @$msg
    ];
}
function ListProduct()
{
    $list_product = product_list_all();
    return [
        'view_name' => 'products/list.php',
        'list_product' => $list_product
    ];
}
