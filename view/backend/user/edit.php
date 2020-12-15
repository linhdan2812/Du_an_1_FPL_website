<h1>Sửa Khách Hàng</h1>
<?php echo @$msg; ?>
<form action="" id="form" class="form-group" method="post" enctype="multipart/form-data">
    <div class="row">
        <?php $user = user_get_one(['ma_kh' => $_GET['ma_kh']]); ?>
        <div class="col-6">
            <label>MÃ KHÁCH HÀNG</label>
            <input class="form-control" id="" name="ma_kh" value="<?= $user['ma_kh'] ?>">
            <?php echo isset($err['ma_kh']) ? $error['ma_kh'] : ''; ?>
        </div>

        <div class="col-6">
            <label>HỌ VÀ TÊN</label>
            <input class="form-control" id="" name="ten_kh" value="<?= $user['ten_kh'] ?>">
            <?php echo isset($err['ten_kh']) ? $error['ten_kh'] : ''; ?>
        </div>


        <div class="col-6">
            <label class="mt-3">MẬT KHẨU</label>
            <input class="form-control" id="" name="mat_khau" type="password" value="<?= $user['mat_khau'] ?>">
            <?php echo isset($err['mat_khau']) ? $error['mat_khau'] : ''; ?>
        </div>

        <div class=" col-6">
            <label class="mt-3">XÁC NHẬN MẬT KHẨU</label>
            <input class="form-control" id="" name="mat_khau2" type="password">
            <?php echo isset($err['mat_khau2']) ? $error['mat_khau'] : ''; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="">
                <label class="mt-3"> EMAIL</label>
                <input class="form-control" type="email" id="" name="email" value="<?= $user['email'] ?>">
                <?php echo isset($err['email']) ? $error['email'] : ''; ?>
            </div>
            <div class="">
                <label class="mt-3">VAI TRÒ</label>
                <div class="form-control">
                    <label><input name="vai_tro" value="0" class="mr-2" type="radio">Khách hàng</label>
                    <label><input name="vai_tro" class="ml-5 mr-2" value="1" type="radio" checked>Nhân viên</label>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="col-md-6">
                <div class="form-group">
                    <label>HÌNH ẢNH</label>
                    <input name="hinh" type="hidden" value="<?= $user['hinh'] ?>">
                    <input class="form-control" name="up_hinh" type="file"> (<?= $user['hinh'] ?>)
                    <img class="img-fluid" width="150px" src="public/images/<?= $user['hinh'] ?>" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <div>
            <button class="btn btn-primary" name="btn_update">cập nhật </button>
            <button class="btn btn-primary" type="reset">Nhập lại</button>
            <a class="btn btn-primary" href="?module=backend&controller=user&action=list">Danh sách</a>
        </div>
    </div>
</form>