<h1>SỬA Loại</h1>
<?php echo @$msg;
$cate = cate_get_one();
?>
<form action="" class="form-group" method="post" enctype="multipart/form-data">
    <div class="">
        <div class="">
            <label>MÃ Loại</label>
            <input class="form-control" id="" name="ma_loai" readonly value="<?= $cate['ma_loai'] ?>">

        </div>

        <div class="">
            <label>TÊN Loại</label>
            <input class="form-control" id="" name="ten_loai" value="<?= $cate['ten_loai'] ?>">

        </div>
    </div>
    <div class="text-center mt-4">
        <div>
            <button class="btn btn-primary mr-3" name="btn_update">Cập nhật</button>
            <button class="btn btn-primary mr-3" type="reset">Nhập lại</button>
            <a class="btn btn-primary mr-3" href="">Danh sách</a>
        </div>
    </div>
</form>