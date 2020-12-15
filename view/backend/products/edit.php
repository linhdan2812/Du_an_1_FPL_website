<h1>Thêm Hàng Hóa</h1>
<?php echo @$msg;
require_once APP_PATH . '/model/product_model.php';
require_once APP_PATH . '/model/loai_model.php';
$product = product_get_one();
$loai_select_list = cate_list_all();
?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col-6">
            <labelclass="mt-3">Mã Hàng Hóa</labelclass=>
                <input class="form-control" name="ma_hh" readonly value="auto number" value="<?= $product['ma_hh'] ?>">
        </div>
        <div class="form-group col-6">
            <label class="mt-3">Tên Hàng Hóa</label>
            <input class="form-control" name="ten_hh" id="" value="<?= $product['ten_hh'] ?>">

        </div>
        <div class="form-group col-6">
            <label class="mt-3">Giảm Giá</label>
            <input class="form-control" name="giam_gia" id="" value="<?= $product['giam_gia'] ?>">

        </div>
        <div class="form-group col-6">
            <label class="mt-3">ĐƠN GIÁ</label>
            <input class="form-control" name="don_gia" id="" value="<?= $product['don_gia'] ?>">

        </div>
        <div class="form-group col-6">
            <label class="mt-3">Mã Loại</label>
            <select class="form-control" name="ma_loai">
                <?php
                foreach ($loai_select_list as $loai) {
                    if ($loai['ma_loai'] == $product['ma_loai']) {
                        echo '<option selected value="' . $loai['ma_loai'] . '">' . $loai['ten_loai'] . '</option>';
                    } else {
                        echo '<option value="' . $loai['ma_loai'] . '">' . $loai['ten_loai'] . '</option>';
                    }
                }
                ?>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="form-group ">
                <label class="mt-3">HÌNH ẢNH</label>
                <div class="bg-light py-2 px-3 border rounded">
                    <input name="hinh" type="hidden" value="<?= $product['hinh'] ?>">
                    <input type="file" name="up_hinh" class="form-control">(<?= $product['hinh'] ?>)
                </div>

            </div>
            <div class="form-group">
                <label class="mt-3">SỐ LƯỢT XEM</label>
                <input class="form-control" name="so_luot_xem" readonly value="0" value="<?= $product['so_luot_xem'] ?>">
            </div>
        </div>
        <div class="col-6 py-3 px-5">
            <label class="ml-5 text-uppercase" for="">Hình ảnh sẽ upload</label>
            <div id="result_image">
                <p id="desc" class="ml-5 mt-3 text-info">( Chưa có ảnh ! ) </p>
            </div>
        </div>
    </div>
    <div>
        <div class="form-group">
            <label class="mt-3">MÔ TẢ</label>
            <textarea class="form-control" name="mo_ta" id="" rows="4"><?= $product['mo_ta'] ?></textarea>
        </div>
        <div class="mt-4 text-center">
            <button class="btn btn-primary mr-3" name="btn_update">Cập nhật</button>
            <button class="btn btn-primary mr-3" type="reset">Nhập lại</button>
            <a class="btn btn-primary" href="?module=backend&controller=product&action=list">Danh sách</a>
        </div>
    </div>
</form>