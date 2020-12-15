<?php
require_once APP_PATH . '/model/user_model.php';
require_once APP_PATH . '/model/loai_model.php';
switch ($action) {
    case 'login':
        extract(DangNhap());
        break;
    case 'signup':
        extract(DangKy());
        break;
    case 'update_tk':
        extract(UpdateTk());
        break;
    case 'doi_mk':
        extract(DoiMatKhau());
        break;
    case 'logout':
        extract(DangXuat());
        break;
    case 'quen_mk':
        extract(QuenMK());
        break;
    default:
        break;
}
// viết các hàm xử lý
function DangNhap()
{
    $list_cate = cate_list_all();
    $msg = "Hàm đăng nhập";
    if (isset($_POST['ma_kh'])) {
        //Lấy dữ liệu khi người dùng bấm nút gửi dạng post

        $msg .= '<br> xin chào ' . $_POST['ma_kh'];
        $mat_khau = $_POST['mat_khau'];
        $userInfo = user_get_one1(['ma_kh' => $_POST['ma_kh']]);
        if (empty($userInfo))
            $msg = "không tồn tại tài khoản" . $_POST['ma_kh'];
        else {
            if ($mat_khau == $userInfo['mat_khau']) {
                $_SESSION["user"] = $userInfo;
                $msg = "Đăng nhập thành công!";
                header('location:http://beanshop.cf/');
            } else {
                $msg = "Sai Password";
            }
        }
    }

    return [
        'view_name' => 'user/login.php', 'msg' => $msg,
        'list_cate' => $list_cate

    ];
}
function DangKy()
{
    $list_cate = cate_list_all();
    $err = []; //Mảng Chứa lỗi
    $msg = "";
    if (isset($_POST['ma_kh'])) {
        extract($_POST); //bng mảng post thành các biến tự do
        //validate:
        if (empty($ma_kh)) {
            $err['ma_kh'] = "Bạn Cần Nhập Username";
        }
        if (users_exist($ma_kh)) {
            $err['ma_kh'] = 'Mã này đã được sử dụng';
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
        if (empty($err)) {

            $hinh = $_FILES['hinh']['name'];
            move_uploaded_file($_FILES['hinh']['tmp_name'], $path . $hinh);


            $dataInsert = ['ma_kh' => $ma_kh, 'email' => $email, 'ten_kh' => $ten_kh,  'mat_khau' => $mat_khau, 'hinh' => $hinh];
            user_add_signup($dataInsert);
            $msg = "Thêm mới thành công,Mã tài khoản mới : " . $ma_kh;
        } else {
            $msg = implode('</br>', $err);
        }
    }
    return [
        'view_name' => 'user/signup.php', 'msg' => $msg,
        'list_cate' => $list_cate
    ];
}
function DoiMatKhau()
{
    $list_cate = cate_list_all();
    $msg = "";
    if (isset($_POST['ma_kh'])) {
        extract($_POST);
        //Lấy dữ liệu khi người dùng bấm nút gửi dạng post
        $user = user_get_one1(['ma_kh' => $_POST['ma_kh']]);

        if ($user['mat_khau'] == $mat_khau_cu) {
            try {
                $dataInsert = ['mat_khau_moi' => $mat_khau_moi];
                user_change_password($dataInsert);
                $msg = "Đổi mật khẩu thành công!";
            } catch (Exception $exc) {
                $msg = "Đổi mật khẩu thất bại !";
            }
        } else {
            $msg = "Sai mật khẩu!";
        }
    }
    return [
        'view_name' => 'user/doi_mk.php', 'msg' => $msg,
        'list_cate' => $list_cate

    ];
}
function UpdateTk()
{
    $list_cate = cate_list_all();
    $msg = "";

    $err = []; //Mảng Chứa lỗi

    if (isset($_POST['btn_update'])) {
        extract($_POST); //bng mảng post thành các biến tự do
        //validate:

        //ảnh

        if (empty($err)) {

            $path = "public/images/";
            $hinh = $_POST['up_hinh'];
            if ($_FILES['hinh']['size']  > 0) {
                $hinh = $_FILES['hinh']['name'];
            } else {
                $err[] = "Bạn Chưa chọn ảnh";
            }

            move_uploaded_file($_FILES['hinh']['tmp_name'], $path . $hinh);
            try {
                $dataInsert = ['email' => $email, 'ten_kh' => $ten_kh,  'hinh' => $hinh];
                user_update2($dataInsert);
                $msg = "Cập nhật thành công, : ";
            } catch (Exception $exc) {
                $MESSAGE = "Cập nhật thành viên thất bại!";
            }
        } else {
            $msg = implode('</br>', $err);
        }
    }
    return [
        'view_name' => 'user/update_tk.php', 'msg' => $msg,
        'list_cate' => $list_cate

    ];
}
function QuenMK()
{
    $list_cate = cate_list_all();
    $msg = " ";

    if (isset($_POST['ma_kh'])) {
        extract($_POST);
        $user = user_get_one2();
        //Lấy dữ liệu khi người dùng bấm nút gửi dạng post

        if ($user['email'] == $email) {

            $msg .= '<h5>' . 'Mật Khẩu của bạn là: ' . $user['mat_khau'] . '</h6>';
        } else {
            $msg = "Sai Địa Chỉ Email";
        }
    }
    return [
        'view_name' => 'user/quen_mk.php', 'msg' => $msg,
        'list_cate' => $list_cate

    ];
}
function DangXuat()
{
    $list_cate = cate_list_all();

    session_unset();
    header('location:?controller=user&action=login');
    if (isset($_SERVER['HTTP_REFERER']))
        header("location: " . $_SERVER['HTTP_REFERER']);
    $ma_kh = get_cookie("ma_kh");
    $mat_khau = get_cookie("mat_khau");
    return [
        'view_name' => 'frontend/nav1.php',
        'list_cate' => $list_cate

    ];
}
