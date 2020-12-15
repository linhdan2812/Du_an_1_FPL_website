<div class="container mt-5 mb-5 ">
    <h1 class="text-center special">Thông tin & Địa Chỉ</h1>
    <h5 class="text-center"><?php echo $msg ?></h5>

    <form action="?module=frontend&controller=cart&action=pay" method="post">
        <div class="row">
            <div class="col-md-6">
                <h5 aria-label="fw-bold">Tên KH</h5>
                <input type="text" name="ten_kh" id="" value="<?= $_REQUEST['ten_kh'] ?? '' ?>" class="form-control"><br>
                <i style="color: red;"><?= $err['ten_kh'] ?? '' ?></i>
            </div>
            <div class="col-md-6">

                <h5 aria-label="fw-bold">Email</h5>
                <input type="email" name="email" id="" value="<?= $_REQUEST['email'] ?? '' ?> " class="form-control"><br>
                <i style="color: red;"><?= $err['email'] ?? '' ?></i>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h5 aria-label="fw-bold">Địa Chỉ</h5>
                <input type="text" name="dia_chi" id="" value="<?= $_REQUEST['dia_chi'] ?? '' ?> " class="form-control"><br>
                <i style="color: red;"><?= $err['dia_chi'] ?? '' ?></i>
            </div>
        </div>




        <button type="submit" name="btn_pay" class="btn btn-outline-dark">Gửi</button>
    </form>
</div>