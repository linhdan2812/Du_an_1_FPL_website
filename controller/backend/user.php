<?php
require_once APP_PATH . '/model/user_model.php';
switch ($action) {
    case 'add':
        extract(AddUser());
        break;
    case 'edit':
        extract(EditUser());
        break;
    case 'delete':
        break;
    default:
        extract(ListUser());
        break;
}
function AddUser()
{
    $err = []; //Mảng Chứa lỗi

    if (isset($_POST['ma_kh'])) {
        extract($_POST); //bng mảng post thành các biến tự do
        //validate:
        if (empty($ma_kh)) {
            $err['ma_kh'] = "Bạn Cần Nhập Username";
        }
        if (empty($mat_khau)) {
            $err['mat_khau'] = "Bạn Cần Nhập mật khẩu";
        }
        if ($mat_khau != $mat_khau2) {
            $err['mat_khau2'] = "Xác Thực mật khẩu không khớp";
        }
        if ($_FILES["hinh"]["name"] != NULL) {

            if (
                $_FILES["hinh"]["type"] == "image/jpeg"
                || $_FILES["hinh"]["type"] == "image/png"
                || $_FILES["hinh"]["type"] == "image/gif"
            ) {
                if ($_FILES["hinh"]["size"] > 1048576) {
                    $err['hinh'] = "file quá Nặng";
                } else {

                    $path = "public/images/"; // file luu vào thu muc chua file upload
                    $tmp_name = $_FILES['hinh']['tmp_name'];
                    $name = $_FILES['hinh']['name'];
                    $type = $_FILES['hinh']['type'];
                    $size = $_FILES['hinh']['size'];
                }
            } else {
                $err['hinh'] = "Bạn Phải nhập file ảnh";
            }
        } else {
            $err['hinh'] = "Bạn chưa nhập file ảnh";
        }
        //ảnh

        if (empty($err)) {

            $hinh = $_FILES['hinh']['name'];
            move_uploaded_file($_FILES['hinh']['tmp_name'], $path . $hinh);

            try {
                $dataInsert = ['ma_kh' => $ma_kh, 'email' => $email, 'mat_khau' => $mat_khau, 'ten_kh' => $ten_kh,  'vai_tro' => $vai_tro,   'hinh' => $hinh];
                $last_id = user_add($dataInsert);
                $msg = "Thêm mới thành công,Mã tài khoản mới : " . $ma_kh;
            } catch (Exception $exc) {
                $MESSAGE = "Đăng ký thành viên thất bại!";
            }
        } else {
            $msg = implode('</br>', $err);
        }
    }
    return [
        'view_name' => 'user/add.php', 'new_id' => @$last_id, 'msg' => @$msg
    ];
}
function EditUser()
{
    if (isset($_POST['btn_update'])) {
        extract($_POST); //bung mảng post thành các biến tự do
        // $mat_khau = password_hash($mat_khau, PASSWORD_DEFAULT);
        //nếu k có lỗi thì ghi csdl
        if (empty($err)) {
            $up_hinh = save_file("up_hinh", IMAGE_DIR);
            $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;
            //tạo mảng tham số để lưu csdl, key của mảng là tên cột trong csdl
            $dataUpdate = [
                'ma_kh' => $ma_kh,
                'ten_kh' => $ten_kh,
                'mat_khau' => $mat_khau,
                'hinh' => $hinh,
                'email' => $email,
                'vai_tro' => $vai_tro == 1
            ];
            user_edit($dataUpdate);
            $msg = "Cập nhật thành công!";
        } else {
            $msg = implode('<br>' . $err);
        }
    }
    return [
        'view_name' => 'user/edit.php',
        'new_id' => @$last_id,
        'msg' => @$msg
    ];
}
function ListUser()
{
    $list_user = list_user();
    return [
        'view_name' => 'user/list.php',
        'list_user' => $list_user
    ];
}
