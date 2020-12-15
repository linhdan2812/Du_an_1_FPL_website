<?php
function product_get_one($params = [])
{
    $id = $_GET['id'];
    $sql = "SELECT * FROM hang_hoa WHERE ma_hh='$id'";
    foreach ($params as $field_name => $value)
        $sql .= "AND {$field_name} = :{$field_name} ";
    return pdo_query_one($sql, $params);
}
function product_add($params = [])
{
    //cải tiến câu lệnh SQL cho phù hợp với truy vấn,nêú cột nào muốn insert dữ liệu vào thì viết tên cột vào câu lệnh SQL tương ứng(Sửa phần chữ màu đỏ)
    // Upload file
    $sql = "INSERT INTO hang_hoa(ten_hh,don_gia,giam_gia,hinh,ma_loai,so_luot_xem,mo_ta )VALUES (:ten_hh,:don_gia,:giam_gia,:hinh,:ma_loai,:so_luot_xem,:mo_ta )";
    return pdo_execute($sql, $params); //Trả về ID khi thêm mới
}
function product_edit($params = [])
{
    //Update

    $id = $_GET['id'];
    $sql = "UPDATE hang_hoa SET ten_hh=:ten_hh,don_gia=:don_gia,giam_gia=:giam_gia,hinh=:hinh,ma_loai=:ma_loai,so_luot_xem=:so_luot_xem,mo_ta=:mo_ta WHERE ma_hh=$id";
    return pdo_execute($sql, $params);
}
function product_delete($params = [])
{

    $sql = "DELETE FROM hang_hoa WHERE ma_hh=:ma_hh";
    return pdo_execute($sql, $params);
}
function product_delete_multi($str_ma_hh)
{
    $sql = "DELETE FROM hang_hoa WHERE ma_hh IN ($str_ma_hh)";
    return pdo_execute($sql, []);
}
function product_list_all()
{
    $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh";
    return pdo_query($sql);
}
//chi tiết sản phẩm
function sp_select_one($param)
{
    $sql = "SELECT * FROM hang_hoa WHERE ma_hh=:ma_hh";
    return pdo_select_one($sql, $param);
}
function sp_dm_select_one($params)
{
    $sql = "SELECT * FROM hang_hoa hh INNER JOIN loai l ON hh.ma_loai=l.ma_loai WHERE ma_hh=:ma_hh";
    return pdo_select_one($sql, $params);
}
function sp_tang_so_luot_xem($params)
{
    $sql = "UPDATE hang_hoa SET so_luot_xem=so_luot_xem + 1 WHERE ma_hh=:ma_hh";
    pdo_execute($sql, $params);
}

function sp_select_all_ma_dm($params)
{
    $sql = "SELECT * FROM hang_hoa WHERE ma_loai=:ma_loai";
    return pdo_query_all($sql, $params);
}

function product_select_keyword($keyword)
{
    $sql = "SELECT * FROM hang_hoa hh JOIN loai l ON l.ma_loai=hh.ma_loai WHERE ten_hh LIKE '%$keyword%' OR ten_loai LIKE '%$keyword%' ";

    return pdo_query($sql);
}
function product_add_cart($ma_hh)
{
    $sql = "SELECT * FROM tb_hang_hoa WHERE ma_hh IN ($ma_hh)";
    return pdo_query($sql, []);
}

function product_select_cart($params, $string)
{
    $sql = "SELECT * FROM hang_hoa WHERE ma_hh IN ($string)";
    return pdo_query1($sql, $params);
}
