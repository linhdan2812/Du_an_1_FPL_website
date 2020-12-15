<?php
require_once APP_PATH . '/model/product_model.php';
require_once APP_PATH . '/model/don_hang_model.php';
switch ($action) {
    case 'add':
        extract(add());
        break;
    case 'delete':
        extract(delete());
        break;
    case 'update':
        extract(update());
        break;
    case 'view':
        extract(view());
        break;
    case 'order':
        extract(order());
        break;
    case 'pay':
        extract(pay());
        break;
    default:
        break;
}
function view()
{
    extract($_REQUEST);
    if (!empty($_SESSION['cart'])) {
        $string = implode(',', array_keys($_SESSION['cart'])); //lấy ma_hh

        try {
            $rows_cart = product_select_cart([], $string); //lấy dl sản phẩm trong giỏ hàng để view ra
            $msg = '';
        } catch (PDOException $e) {
            $msg = 'lỗi' . $e->getMessage();
        }
    } else {
        $msg = 'Giỏ hàng của bạn chưa có sản phẩm' . '<br> <a href = "?controller=index&action=trang-chu">Trở lại mua hàng</a>';
        $rows_cart = [];
    }
    return [
        'msg' => $msg,
        'rows_cart' => $rows_cart,
        'view_name' => 'cart/add.php'
    ];
}

function add()
{

    extract($_REQUEST);
    // var_dump($quantity);
    // die;
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    if (!empty($so_luong)) {

        foreach ($so_luong as $ma_hh => $so_luong) {
            if ($so_luong > 0) {
                if (isset($_SESSION['cart'][$ma_hh])) {
                    $_SESSION['cart'][$ma_hh] += $so_luong;
                } else {
                    $_SESSION['cart'][$ma_hh] = $so_luong;
                }
            }
        }
        if (!empty($_SESSION['cart'])) {
            $string = implode(',', array_keys($_SESSION['cart'])); //lấy ma_hh

            try {
                $rows_cart = product_select_cart([], $string); //lấy dl sản phẩm trong giỏ hàng để view ra
                $msg = '';
            } catch (PDOException $e) {
                $msg = 'lỗi' . $e->getMessage();
            }
        }
    } else {
        header("location: ?module=frontend");
    }
    return [
        'msg' => $msg,
        'rows_cart' => $rows_cart,
        'view_name' => 'cart/add.php'
    ];
}
function delete()
{
    extract($_REQUEST);
    if (isset($ma_hh)) {
        unset($_SESSION['cart'][$ma_hh]);
        if (!empty($_SESSION['cart'])) {
            $string = implode(',', array_keys($_SESSION['cart'])); //lấy ma_sp

            try {
                $rows_cart = product_select_cart([], $string); //lấy dl sản phẩm trong giỏ hàng để view ra
                $msg = '';
            } catch (PDOException $e) {
                $msg = 'lỗi' . $e->getMessage();
            }
        } else {
            header('location:?module=frontend&controller=cart&action=view');
        }
    } else {
        header('location:?module=frontend&controller=cart&action=view');
    }

    return [
        'msg' => $msg,
        'rows_cart' => $rows_cart,
        'view_name' => 'cart/add.php'
    ];
}
function update()
{
    extract($_REQUEST);
    if (!empty($so_luong)) {

        foreach ($so_luong as $ma_hh => $so_luong) {
            if ($so_luong > 0) {

                $_SESSION['cart'][$ma_hh] = $so_luong;
            } else {
                unset($_SESSION['cart'][$ma_hh]);
            }
        }
        if (!empty($_SESSION['cart'])) {
            $string = implode(',', array_keys($_SESSION['cart'])); //lấy ma_sp

            try {
                $rows_cart = product_select_cart([], $string); //lấy dl sản phẩm trong giỏ hàng để view ra
                $msg = 'Cập nhập thành công giỏ hàng';
            } catch (PDOException $e) {
                $msg = 'lỗi' . $e->getMessage();
            }
        } else {
            header("location: ?module=frontend&controller=cart&action=view");
        }
    } else {
        header("location: ?module=frontend&controller=cart&action=view");
    }
    return [
        'msg' => $msg,
        'rows_cart' => $rows_cart,
        'view_name' => 'cart/add.php'
    ];
}
function order()
{
    extract($_REQUEST);
    if (!empty($_SESSION['cart'])) {
        $string = implode(',', array_keys($_SESSION['cart'])); //lấy ma_hh

        try {
            $rows_cart = product_select_cart([], $string); //lấy dl sản phẩm trong giỏ hàng để view ra
            $msg = '';
        } catch (PDOException $e) {
            $msg = 'lỗi' . $e->getMessage();
        }
    } else {
        $msg = 'Giỏ hàng của bạn chưa có sản phẩm';
        $rows_cart = [];
    }
    return [
        'msg' => $msg,
        'rows_cart' => $rows_cart,
        'view_name' => 'cart/don-hang.php'
    ];
}

function pay()
{
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    extract($_REQUEST);
    if (isset($_POST['btn_pay'])) {
        // view giỏ hàng ra
        if (!empty($_SESSION['cart'])) {
            $string = implode(',', array_keys($_SESSION['cart'])); //lấy ma_hh

            try {
                $rows_cart = product_select_cart([], $string); //lấy dl sản phẩm trong giỏ hàng để view ra
                $msg = '';
            } catch (PDOException $e) {
                $msg = 'lỗi' . $e->getMessage();
            }
        } else {
            $msg = 'Giỏ hàng của bạn chưa có sản phẩm';
            $rows_cart = [];
        }
        // validate cho thông tin kh
        $err = ['ten_kh' => '', 'dia_chi' => '', 'email' => ''];
        if (empty($ten_kh)) {
            $err['ten_kh'] = 'Tên khách hàng không được bỏ trống !!';
        }
        if (empty($email)) {
            $err['email'] = 'Email không được bỏ trống !!';
        }
        if (empty($dia_chi)) {
            $err['dia_chi'] = 'Địa chỉ khách hàng không được bỏ trống !!';
        }

        if (!array_filter($err)) {

            //    insert dl vào bảng don_hang và chi_tiet_don_hang
            // tính tổng tiền hàng
            $tong_tien = 0;
            foreach ($rows_cart as $hh_cart) {
                extract($hh_cart);
                $tong_tien += $don_gia * $_SESSION['cart'][$ma_hh];
            }
            $params = [
                ':ten_kh' => $ten_kh, ':email' => $email, ':dia_chi' => $dia_chi, ':tong_tien' => $tong_tien
            ];
            //, ':ma_kh' => 42
            try {
                $ma_don_hang = order_insert($params); //lấy id đơn hàng sau khi insert
                // $ma_don_hang = select_don_hang_one([':ma_don_hang' => $ma_don_hang]); //lấy thông tin đơn hàng trong csdl

                foreach ($rows_cart as $hh_cart) {
                    extract($hh_cart);
                    $params = [
                        ':ma_don_hang' => $ma_don_hang, ':ma_hh' => $ma_hh, ':gia_don_hang' => $don_gia, ':so_luong' => $_SESSION['cart'][$ma_hh]
                    ];
                    order_detail_insert($params);
                }
                $infor_don_hang = order_detail_select_id_order([':ma_don_hang' => $ma_don_hang]);
                $custom_don_hang = select_order_one([':ma_don_hang' => $ma_don_hang]);
                unset($_SESSION['cart']);
                $msg = 'Tạo đơn hàng thành công, check mail để xem thông tin chi tiết đơn hàng';
                return [
                    'msg' => $msg,
                    'custom_don_hang' => $custom_don_hang,
                    'infor_don_hang' => $infor_don_hang,
                    'view_name' => 'cart/infor-don-hang.php',
                ];
            } catch (PDOException $e) {
                $msg = 'lỗi ' . $e->getMessage();
            }
        } else {
            $msg = '';
        }

        return [
            'msg' => $msg,
            'err' => $err,
            'rows_cart' => $rows_cart,
            'view_name' => 'cart/don-hang.php'
        ];
    } else {
        header('location:?module=frontend&controller=cart&action=view');
    }
}
