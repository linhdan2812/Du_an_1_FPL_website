<?php
require_once APP_PATH . '/model/loai_model.php';
require_once APP_PATH . '/model/product_model.php';
require_once APP_PATH . '/model/bl_model.php';
switch ($action) {
        // case 'chi-tiet':
        //     extract(ChiTiet());
        //     break;
    case 'info':
        extract(info());
        break;
    case 'sp_bl':
        extract(sp_bl());
        break;
    default:
        extract(TrangChu());
        break;
}

function info()
{
    $list_cate = cate_list_all();
    extract($_REQUEST);
    sp_tang_so_luot_xem([':ma_hh' => $ma_hh]); //tăng số lượt xem
    $row_sp_ma_sp = sp_dm_select_one([':ma_hh' => $ma_hh]); //lấy dl đổ vào phần thông tin
    $rows_sp_ma_dm = sp_select_all_ma_dm([':ma_loai' => $row_sp_ma_sp['ma_loai']]); //lấy dl đổ vào phần sp cùng loại
    $rows_sp_bl = bl_select_all_ma_sp([':ma_hh' => $ma_hh]); //lấy bình luận theo ma_sp
    $rows_sp_bl = array_reverse($rows_sp_bl); //đảo ngược mảng trước khi hiển thị ra view
    return [
        'row_sp_ma_sp' => $row_sp_ma_sp,
        'rows_sp_ma_dm' => $rows_sp_ma_dm,
        'rows_sp_bl' => $rows_sp_bl,
        'view_name' => 'info/info.php',
        'list_cate' => $list_cate
    ];
}
function sp_bl()
{
    extract($_REQUEST);
    if (isset($binh_luan)) {
        $param = [
            ':ma_hh' => $ma_hh,
            ':ma_kh' => $_SESSION['user']['ma_kh'],
            ':noi_dung' => $noi_dung
        ];
        try {
            bl_insert($param);
            header("location:?module=frontend&controller=info&action=info&ma_hh=$ma_hh");
        } catch (PDOException $e) {
            $msg = 'Thêm dl bảng bl thất bại ' . $e->getMessage();
        }
        return [
            '$msg' => $msg,
            'ma_hh' => $ma_hh,
            'view_name' => 'info/info.php'
        ];
    }
}
function TrangChu()
{
    $list_cate = cate_list_all();
    return [
        'view_name' => 'index/trang-chu.php',
        'list_cate' => $list_cate
    ];
}
