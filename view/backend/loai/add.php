<?php echo @$msg; ?>
<form action="" class="form-group" method="post" enctype="multipart/form-data">
    <div class="">
        <div class="">
            <label>Mã Loai</label>
            <input class="form-control" id="" name="ma_loai" value="auto_number" readonly>

        </div>

        <div class="">
            <label>Tên Loại</label>
            <input class="form-control" id="" name="ten_loai">

        </div>
    </div>
    <div class="text-center mt-4">
        <div>
            <button class="btn btn-primary" name="btnSave">Thêm mới</button>
            <button class="btn btn-primary" type="reset">Nhập lại</button>
            <a class="btn btn-primary" href="">Danh sách</a>
        </div>
    </div>
</form>