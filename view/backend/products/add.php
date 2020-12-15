<h1 class="">Thêm Hàng Hóa</h1>
<?php echo @$msg;
require_once APP_PATH . '/model/product_model.php';
require_once APP_PATH . '/model/loai_model.php';
$loai_select_list = cate_list_all();
?>
<form action="" method="post" id="form" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col-6">
            <label class="mt-3">MÃ Hàng Hóa</label>
            <input class="form-control" name="ma_hh" readonly value="auto number">
        </div>
        <div class="form-group col-6">
            <label class="mt-3">TÊN Hàng Hóa</label>
            <input class="form-control" name="ten_hh" id="">

        </div>
        <div class="form-group col-6">
            <label class="mt-3">Giảm giá</label>
            <input class="form-control" name="giam_gia" id="">
        </div>
        <div class="form-group col-6">
            <label class="mt-3">Đơn giá</label>
            <input class="form-control" name="don_gia" id="">

        </div>
        <div class="form-group col-6">
            <label class="mt-3">Mã Loại</label>
            <select class="form-control" name="ma_loai">
                <?php
                foreach ($loai_select_list as $loai) {
                    echo '<option value="' . $loai['ma_loai'] . '">' . $loai['ma_loai'] . '</option>';
                }
                ?>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="form-group ">
                <label class="mt-3">Hình Ảnh</label>
                <div class="bg-light py-2 px-3 border rounded">
                    <input name="hinh" id="hinh" type="file">
                </div>

            </div>
            <div class="form-group">
                <label class="mt-3">Số Lượt Xem</label>
                <input class="form-control" name="so_luot_xem" readonly value="0">
            </div>
        </div>
    </div>
    <div>
        <div class="form-group">
            <label class="mt-3">Mô Tả</label>
            <textarea class="form-control" name="mo_ta" id="" rows="4"></textarea>
        </div>
        <div class="mt-4 text-center">
            <button class="btn btn-primary mr-3" name="btnSave">Thêm mới</button>
            <button class="btn btn-primary mr-3" type="reset">Nhập lại</button>
            <a class="btn btn-primary" href="?module=backend&controller=products&action=list">Danh sách</a>
        </div>
    </div>
</form>