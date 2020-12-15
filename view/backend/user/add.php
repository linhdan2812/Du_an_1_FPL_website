<div class="container mt-2">
    <form action="" id="form" class="form-group" method="post" enctype="multipart/form-data">
        <div class="row container">
            <div class="col-6">
                <div class="col-9">
                    <label>MÃ KHÁCH HÀNG</label>
                    <input class="form-control" id="" name="ma_kh" value="">
                    <?php echo isset($err['ma_kh']) ? $error['ma_kh'] : ''; ?>
                </div>

                <div class="col-9">
                    <label>HỌ VÀ TÊN</label>
                    <input class="form-control" id="" name="ten_kh">
                    <?php echo isset($err['ten_kh']) ? $error['ten_kh'] : ''; ?>
                </div>

                <div class="col-9">
                    <label class="mt-3">MẬT KHẨU</label>
                    <input class="form-control" id="" name="mat_khau" type="password">
                    <?php echo isset($err['mat_khau']) ? $error['mat_khau'] : ''; ?>
                </div>

                <div class="col-9">
                    <label class="mt-3">XÁC NHẬN MẬT KHẨU</label>
                    <input class="form-control" id="" name="mat_khau2" type="password">
                    <?php echo isset($err['mat_khau2']) ? $error['mat_khau'] : ''; ?>
                </div>
                <div class="col-9">
                    <div class="">
                        <label class="mt-3"> EMAIL</label>
                        <input class="form-control" type="email" id="" name="email">
                        <?php echo isset($err['email']) ? $error['email'] : ''; ?>
                    </div>

                    <!-- <div class="">
                        <label class="mt-3">SỐ ĐIỆN THOẠI</label>
                        <input class="form-control" id="" name="so_dt">
                        
                    </div> -->
                    <div class="">
                        <label class="mt-3">VAI TRÒ</label>
                        <div class="form-control">
                            <label><input name="vai_tro" value="0" class="mr-2" type="radio">Khách hàng</label>
                            <label><input name="vai_tro" class="ml-5 mr-2" value="1" type="radio" checked>Nhân viên</label>
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    <div>
                        <label class="mt-3">HÌNH ẢNH</label>
                        <div class="bg-light py-2 px-3 border rounded">
                            <input name="hinh" id="hinh" type="file">
                            <?php echo isset($err['hinh']) ? $error['hinh'] : ''; ?>
                        </div>
                    </div>
                    <label class="mt-2 text-uppercase text-center"></label>
                    <div id="result_image">
                        <p id="desc" class="ml-5 mt-3 text-info"> </p>
                    </div>
                </div>
            </div>
            <div class="col-6"><?php echo @$msg; ?>
            </div>
        </div>


        <div class="text-center mt-4">
            <div>
                <button class="btn btn-primary" name="btn_add">Thêm mới</button>
                <button class="btn btn-primary" type="reset">Nhập lại</button>
                <a class="btn btn-primary" href="?module=backend&controller=user&action=list">Danh sách</a>
            </div>
        </div>
    </form>
</div>