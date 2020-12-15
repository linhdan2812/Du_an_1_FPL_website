<style>
    .line-1 {
        position: relative;
        width: 35%;
        bottom: -42px;
        border-top: 1px solid gray;
    }

    .line-2 {
        position: relative;
        width: 35%;
        float: right;
        bottom: -42px;
        border-top: 1px solid gray;
    }

    a {
        color: black;
    }
</style>
<div class="signup container">
    <div class="line-1">
    </div>
    <div class="line-2">
    </div>
    <div class="title text-center mt-3 mb-3">
        <h1 class="title-danhmuc">QUÊN MẬT KHẨU</h1>
    </div>
    <?php echo $msg ?>
    <form action="" class="signup-form" method="post">
        <div class="border rounded p-5 ">
            <div class="form-group row">
                <div class="col-md-6 d-flex justify-content-end">
                    <label for="name" class="form-label">Username</label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-input" name="ma_kh">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6 d-flex justify-content-end">
                    <label for="name" class="form-label">Email</label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-input" name="email" id="pass" placeholder="Nhập Email">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button class="form-submit btn btn-info">Lấy Lại Mật Khẩu</button>
                <a href="?controller=user&action=login" class="signup-already-link"><button class="ml-3 btn btn-info">Đăng
                        nhập</button></a>
            </div>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
</script>