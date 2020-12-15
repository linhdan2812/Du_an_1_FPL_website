<?php

// 1 hàm insert dl vào bảng order
function order_insert($params)
{
    $sql = "INSERT INTO don_hang( ten_kh, email, dia_chi, tong_tien) VALUES (:ten_kh, :email, :dia_chi, :tong_tien)";
    // return pdo_excute($sql, $params);
    return pdo_excute_lastId($sql, $params);
}
//  hàm insert dl vào bảng order_detail
function order_detail_insert($params)
{
    $sql = "INSERT INTO chi_tiet_don_hang( ma_don_hang, ma_hh, so_luong, gia_don_hang) VALUES (:ma_don_hang, :ma_hh, :so_luong, :gia_don_hang)";

    // return pdo_excute($sql, $params);
    return pdo_excute_lastId($sql, $params);
}
// hàm lấy dl từ bảng order theo id_order
function select_order_one($params)
{
    $sql = "SELECT * FROM don_hang WHERE ma_don_hang =:ma_don_hang";
    return pdo_query_one($sql, $params);
}
// hàm lấy sp theo mã đơn hàng trong bảng order_detail
function order_detail_select_id_order($params = [])
{
    $sql = "SELECT * FROM chi_tiet_don_hang od INNER JOIN hang_hoa hh ON od.ma_hh=hh.ma_hh WHERE ma_don_hang=:ma_don_hang";
    return pdo_query1($sql, $params);
}
// hàm lấy dl từ bảng order
function order_select_all()
{
    $sql = "SELECT * FROM don_hang ";
    return pdo_query1($sql);
}
// xóa dl bảng order theo id_order
function order_delete_id_order($params)
{
    $sql = "DELETE FROM don_hang WHERE ma_don_hang=:ma_don_hang";
    pdo_excute($sql, $params);
}
