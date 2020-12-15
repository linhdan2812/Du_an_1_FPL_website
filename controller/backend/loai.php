<?php
require_once APP_PATH . '/model/loai_model.php';
switch ($action) {
    case 'add':
        extract(AddCate());
        break;
    case 'edit':
        extract(EditCate());
        break;
    case 'delete':
        extract(DeleteCate());
        break;
    default:
        extract(ListCate());
        break;
}
function AddCate()
{
    if (isset($_POST['btnSave'])) {
        extract($_POST); //bung mảng post thành các biến tự do
        //nếu k có lỗi thì ghi csdl
        if (empty($err)) {
            //tạo mảng tham số để lưu csdl, key của mảng là tên cột trong csdl
            $dataInsert = [
                'ten_loai' => $ten_loai,

            ];
            $last_id = cate_add($dataInsert);
            $msg = "Thêm mới thành công, Mã Loại :" . $last_id;
        } else {
            $msg = implode('<br>' . $err);
        }
    }
    return [
        'view_name' => 'loai/add.php',
        'new_id' => @$last_id,
        'msg' => @$msg
    ];
}
function EditCate()
{
    if (isset($_POST['btn_update'])) {
        extract($_POST);
        if (empty($err)) {
            $dataUpdate = [
                'ten_loai' => $ten_loai
            ];
            cate_edit($dataUpdate);
            $msg = "Cập Nhật thành công, Mã Loại :";
        } else {
            $msg = implode('<br>' . $err);
        }
    }
    return [
        'view_name' => 'loai/edit.php',
        'new_id' => @$last_id,
        'msg' => @$msg
    ];
}
function DeleteCate()
{
    cate_delete(['ma_loai' => $_GET['id']]);
    $msg = "Xóa thành công";
    $loai = cate_list_all();
    return [
        'view_name' => 'loai/list.php',
        'list_cate' => $loai,
        'msg' => @$msg
    ];
}
function ListCate()
{
    $list_cate = cate_list_all();
    return [
        'view_name' => 'loai/list.php',
        'list_cate' => $list_cate
    ];
}
