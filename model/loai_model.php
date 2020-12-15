<?php
function cate_add($params = [])
{
    //cải tiến câu lệnh sql cho phù hợp với truy vấn , nếu cột nào trống
    $sql = "INSERT INTO loai(ten_loai) VALUES (:ten_loai)";
    return pdo_execute($sql, $params); //trả về id khi thêm mới
}
function cate_edit($params = [])
{
    $id = $_GET['id'];
    //cải tiến câu lệnh sql cho phù hợp với truy vấn , nếu cột nào trống
    $sql = "UPDATE loai SET ten_loai=:ten_loai WHERE  ma_loai=$id";
    return pdo_execute($sql, $params); //trả về id khi thêm mới
}
function cate_delete($params = [])
{
    $sql = "DELETE FROM loai WHERE ma_loai=:ma_loai";
    return pdo_execute($sql, $params);
}

function cate_list_all()
{
    $sql = "SELECT * FROM loai ORDER BY ma_loai ASC";
    return pdo_query($sql);
}
/**
 * hàm dùng để lấy thông tin của 1 bản ghi có thể dùng để đăng nhập, dùng cho chức năng sửa
 * 
 */
function cate_get_one($params = [])
{
    $id = $_GET['id'];
    $sql = "SELECT * FROM loai WHERE ma_loai=$id";
    //ghép nối các tham số vào câu lệnh sql
    foreach ($params as $field_name => $value)
        $sql .= " AND {$field_name} = :{$field_name} ";
    //vd: $sql.= "AND username=:username " ;
    return pdo_query_one($sql, $params); //trả về ID khi thêm mới
}
function chitietloaihang($ma_loai)
{
    $sql = "SELECT * FROM hang_hoa where ma_loai=$ma_loai order by ma_hh desc ";
    return pdo_query($sql, $ma_loai);
}
