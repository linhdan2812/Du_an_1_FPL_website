<?php
// 1 hàm tính tổng số lượng bậc rank
function l_sum_l($param)
{
    $sql = "SELECT COUNT(*) as tong_loai FROM loai";
    return pdo_query_one($sql, $param);
}
// 2 hàm tính tổng số lượng sản phẩm
function tk_sum_hh($param)
{
    $sql = "SELECT COUNT(*) as tong_hh FROM hang_hoa";
    return pdo_query_one($sql, $param);
}
// 3 hàm thống kê sản phẩm theo bậc rank
function tk_hh($param)
{
    $sql = "SELECT lo.ma_loai,ten_loai,COUNT(*) tong_hh,MAX(don_gia) gia_cao_nhat,MIN(don_gia) gia_thap_nhat,AVG(don_gia) gia_trung_binh FROM loai lo INNER JOIN hang_hoa hh ON lo.ma_loai=hh.ma_loai GROUP BY lo.ma_loai,ten_loai 
    ";
    return pdo_query_all($sql, $param);
}
function tk_bl_ten_hh($param)
{
    $sql = "SELECT hh.ma_hh, ten_hh,COUNT(*) so_bl,MAX(ngay_bl) moi_nhat,MIN(ngay_bl) cu_nhat FROM binh_luan bl INNER JOIN hang_hoa hh ON bl.ma_hh=hh.ma_hh GROUP BY hh.ma_hh, ten_hh ORDER BY hh.ma_hh DESC";
    return pdo_query_all($sql, $param);
}
