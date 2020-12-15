<style>
/* .items {
    width: 260px;
    margin-left: 5px;
    margin-right: 5px;
}

.items a {
    color: black;
}

.items a:hover {
    text-decoration: none;
}

.nav ul li a {
    color: black;
} */

.line-1 {
    position: relative;
    width: 30%;
    bottom: -42px;
    border-top: 1px solid gray;
}

.line-2 {
    position: relative;
    width: 30%;
    float: right;
    bottom: -42px;
    border-top: 1px solid gray;
}
</style>
<div class="signup container">
    <?php $user = user_get_one_session(); ?>
    <div class="line-1">
    </div>
    <div class="line-2">
    </div>
    <div class="title text-center mt-3 mb-3">
        <h1 class="title-danhmuc"> CẬP NHẬT TÀI KHOẢN</h1>
    </div>
    <?php echo '<p>' . $msg . '</p>' ?>
    <div class="border rounded p-3 ">
        <form action="" class="signup-form" method="POST" enctype="multipart/form-data">
            <div class="form-group row">
                <div class="col-md-6 d-flex justify-content-end">
                    <label for="name" class="form-label">Họ Tên</label>
                </div>
                <div class="col-md-6">
                    <input type="text" name="ten_kh" class="form-input" value="<?= $user['ten_kh'] ?>" id="name">
                </div>
            </div>

            <div class=" form-group row">
                <div class="col-md-6 d-flex justify-content-end">
                    <label for="name" class="form-label">Địa Chỉ Email</label>
                </div>
                <div class="col-md-6">
                    <input type="text" value="<?= $user['email'] ?>" name="email" class="form-input" id="name">
                </div>
            </div>
            <div class="form-group row ">
                <div class="col-md-4 d-flex justify-content-end">
                    <label class="form-label">Avatar</label>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <input name="up_hinh" type="hidden" value="<?= $user['hinh'] ?>">
                    <input type="file" class="form-input" name="hinh">
                </div>
                <div class="col-md-4 ">
                    <img class="img-fluid border" width="150px" src="public/images/<?= $user['hinh'] ?>" alt="">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" name="btn_update" class="form-submit btn btn-info ">Cập Nhật</button>
            </div>

        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
</script>