<?php
function StopWebsite()
{
    die("STOP");
}
function khach_hang_select_all()
{
    $sql = "SELECT * FROM khach_hang";
    return pdo_query($sql);
}
function hang_hoa_select_all()
{
    $sql = "SELECT * FROM hang_hoa";
    return pdo_query($sql);
}
function save_file($fieldname, $target_dir)
{
    $file_uploaded = $_FILES[$fieldname];
    $file_name = basename($file_uploaded["name"]);
    $target_path = $target_dir . $file_name;
    move_uploaded_file($file_uploaded["tmp_name"], $target_path);
    return $file_name;
}
function users_exist($ma_kh)
{
    $sql = "SELECT count(*) FROM khach_hang WHERE ma_kh='$ma_kh'";
    return pdo_query_value($sql, $ma_kh) > 0;
}
function CheckACL($module, $controller, $action)
{
    $arr_public = [
        'frontend' => [
            //module
            'index' => ['index', 'lien-he1'], //controller =>action
            'user' => ['login', 'logout', 'signup']
        ]
    ];
    // kiểm tra module
    if (!in_array($module, array_keys($arr_public))) {
        // Module này không có trong danh sách tên module public ==> yêu cầu đăng nhập 
        if (empty(isset($_SESSION['user']))) {
            // chưa đăng nhập
            header("Location:" . BASE_URL . '/?controller=user&action=login');
            exit();
        } else {
            // kiểm tra controller
            // ở đâ đã đăng nhập rồi thì thôi không cần kiểm tra controller nữa
        }
    } else {
        // module truy cập đang là public
        // kiểm tra controller ở trong module hiển tại
        if (!in_array($controller, array_keys($arr_public[$module]))) {
            // trong module public, nhưng controller không được liệt kê là public ==> yêu cầu đăng nhập
            if (empty(isset($_SESSION['user']))) {
                // chưa đăng nhập
                header("Location:" . BASE_URL . '/?cotroller=user&action=login');
                exit();
            }
        } else {
            // controller là public, kiểm tra action
            if (!in_array($action, $arr_public[$module][$controller])) {
                // action là private thì yêu cầu đăng nhập
                if (empty(isset($_SESSION['user']))) {
                    // chưa đăng nhập
                    header("Location:" . BASE_URL . '/?controller=user&action=login');
                    exit();
                }
            }
        }
    }
}
function checkACL_V2($module, $controller, $action)
{
    $arr_public = [
        'frontend.index.index',
        'frontend.index.lien-he',
        'frontend.user.login',
        'frontend.user.signup',
        'frontend.user.quen_mk',
        'frontend.loai_hang.detailcategory',
        'frontend.info.info'
    ];
    //thông tin đường dẫn hiện tại đang truy cập
    $current_path = "$module.$controller.$action";
    if (in_array($current_path, $arr_public)) {
        return true; //nếu là public thì thôi không kiểm tra return true luôn
    }
    //thông tin đường dẫn hiện tại đang truy cập 
    $current_path = "$module.$controller.$action";
    if (in_array($current_path, $arr_public)) {
        return true; //nếu là public thì thôi không kiểm tra return true luôn
    }
    //kiểm tra đăng nhập hay chưa
    if (empty(isset($_SESSION['user']))) {
        //chưa đăng nhập 
        header("Location:" . BASE_URL . '/?controller=user&action=login');
        exit();
    }
    //chặn quyền theo module:
    $user_info = $_SESSION['user'];
    if ($module == 'backend') {
        if (!isset($user_info['vai_tro']) || $user_info['vai_tro'] != 1) {
            die("bạn không có quyền truy cập chức năng này");
        }
        //else:không làm gì cả thì sẽ vào truy cập như thường
    } else {
        //không làm gì cả thì cho truy cập vào thôi
    }
}
/**
 * Lưu file upload vào thư mục
 * @param string $fieldname là tên trường file
 * @param string $target_dir thư mục lưu file
 * @return tên file upload
 */
