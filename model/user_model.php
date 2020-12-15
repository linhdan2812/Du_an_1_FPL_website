<?php
function user_get_one($params = [])
{
    $ma_kh = $_GET['ma_kh'];
    $sql = "SELECT * FROM khach_hang WHERE ma_kh='$ma_kh'";
    foreach ($params as $field_name => $value)
        $sql .= "AND {$field_name} = :{$field_name} ";
    return pdo_query_one($sql, $params);
}
function user_add($params = [])
{
    //cải tiến câu lệnh SQL cho phù hợp với truy vấn,nêú cột nào muốn insert dữ liệu vào thì viết tên cột vào câu lệnh SQL tương ứng(Sửa phần chữ màu đỏ)
    // Upload file
    $sql = "INSERT INTO khach_hang(ma_kh,email,mat_khau,ten_kh,vai_tro,hinh)VALUES (:ma_kh,:email,:mat_khau,:ten_kh,:vai_tro,:hinh )";
    return pdo_execute($sql, $params); //Trả về ID khi thêm mới
}
function user_edit($params = [])
{
    //Update

    // $ma_kh = $_GET['ma_kh'];
    $sql = "UPDATE khach_hang SET ma_kh=:ma_kh, email=:email,mat_khau=:mat_khau,ten_kh=:ten_kh,vai_tro=:vai_tro,hinh=:hinh WHERE ma_kh=:ma_kh";
    return pdo_execute($sql, $params);
}
function list_user()
{
    $sql = "SELECT * FROM khach_hang ORDER BY ma_kh";
    return pdo_query($sql);
}
function user_delete($ma_kh)
{
    $sql = "DELETE FROM khach_hang WHERE ma_kh = '$ma_kh'";
    return pdo_execute($sql);
}
function user_get_one1($params = [])
{
    $sql = "SELECT * FROM khach_hang WHERE 1 ";
    foreach ($params as $field_name => $value) {
        $sql .= " AND {$field_name} = :{$field_name} ";
        return pdo_query_one($sql, $params);
    }
}

function user_add_signup($params = [])
{
    //cải tiến câu lệnh SQL cho phù hợp với truy vấn,nêú cột nào muốn insert dữ liệu vào thì viết tên cột vào câu lệnh SQL tương ứng(Sửa phần chữ màu đỏ)

    // Upload file

    $sql = "INSERT INTO khach_hang(ma_kh,email,mat_khau,ten_kh,hinh)VALUES (:ma_kh,:email, :mat_khau, :ten_kh, :hinh)";
    return pdo_execute($sql, $params); //Trả về ID khi thêm mới
}

function user_change_password($params = [])
{
    $ma_kh = $_POST['ma_kh'];
    $sql = "UPDATE khach_hang SET mat_khau=:mat_khau_moi WHERE ma_kh='$ma_kh'";
    pdo_execute($sql, $params);
}
function user_get_one2($params = [])
{
    $ma_kh = $_POST['ma_kh'];
    $sql = "SELECT * FROM khach_hang WHERE ma_kh='$ma_kh'";
    //ghép nối các tham số vào câu lệnh sql
    foreach ($params as $field_name => $value)
        $sql .= " AND {$field_name} = :{$field_name} ";
    //vd: $sql.= "AND username=:username " ;
    return pdo_query_one($sql, $params); //trả về ID khi thêm mới
}

function user_update2($params = [])
{
    $user =   $_SESSION['user'];
    $ma_kh = $user['ma_kh'];
    // Upload file
    $sql = "UPDATE khach_hang SET email=:email,ten_kh=:ten_kh,hinh=:hinh WHERE ma_kh='$ma_kh'";
    return pdo_execute($sql, $params); //Trả về ID khi thêm mới
}
function user_get_one_session($params = [])
{
    $user =   $_SESSION['user'];
    $ma_kh = $user['ma_kh'];
    $sql = "SELECT * FROM khach_hang WHERE ma_kh='$ma_kh'";
    //ghép nối các tham số vào câu lệnh sql
    foreach ($params as $field_name => $value)
        $sql .= " AND {$field_name} = :{$field_name} ";
    //vd: $sql.= "AND username=:username " ;
    return pdo_query_one($sql, $params); //trả về ID khi thêm mới
}