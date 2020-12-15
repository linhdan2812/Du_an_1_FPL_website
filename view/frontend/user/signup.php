        <!doctype html>
        <html lang="en">

        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
            <link rel="stylesheet" href="    /public/css/login.css">
            <title>Đăng ký</title>
            <style>
                a {
                    color: black;
                }
            </style>
        </head>

        <body>
            <div class="container login-container">
                <div class="row">
                    <div class="col-md-6 ads">
                        <h1><span id="fl">Bean</span><span id="sl"> shop</span></h1>
                        <span>Là con gái phải xinh</span>
                        <div class="d-flex justify-content-center mt-3">
                            <img id="logo" src="    /public/images/son.png" class="img-fluid" width="150px">
                        </div>
                    </div>
                    <div class="col-md-6 login-form">
                        <div class="d-flex justify-content-center mt-3">
                            <img id="logo" src="    /public/images/logo.png" class="img-fluid">
                        </div>
                        <h1 class="text-center">Đăng Ký</h1>

                        <form class="signup-form" method="post" enctype="multipart/form-data">
                            <div class="form-group d-flex justify-content-center">
                                <!--<input type="text" class="form-input " name="ma_kh" placeholder="Username">-->
                                <input type="text" id="" class="form-input" name="ma_kh" placeholder="Username">
                            </div>
                            <div class="form-group d-flex justify-content-center">
                                <!--<input type="text" class="form-input " name="ma_kh" placeholder="Username">-->
                                <input type="text" id="" class="form-input" name="ten_kh" placeholder="Họ và tên">
                            </div>
                            <div class="form-group d-flex justify-content-center">
                                <!--<input type="text" class="form-input " name="ma_kh" placeholder="Username">-->
                                <input type="email" id="email" class="form-input" name="email" placeholder="Email">
                            </div>
                            <div class="form-group d-flex justify-content-center">
                                <!--<input type="password" class="form-input" name="mat_khau" placeholder="Mật khẩu">-->
                                <input type="password" id="password" class="form-input" name="mat_khau" placeholder="Mật khẩu">
                            </div>
                            <div class="form-group d-flex justify-content-center">
                                <!--<input type="password" class="form-input" name="mat_khau" placeholder="Mật khẩu">-->
                                <input type="password" id="re-password" class="form-input" name="mat_khau2" placeholder="Nhập lại mật khẩu">
                            </div>
                            <div class="form-group">
                                <label for="re-password" class="form-label">Avatar</label>
                                <input type="file" class="form-input" name="hinh">
                            </div>

                            <div class="d-flex justify-content-center">
                                <button class="form-submit btn btn-primary">Signup</button>
                            </div>
                            <div class="d-flex justify-content-center mt-3">
                                <p style="color: white;" class="signup-already forget-password"><a href="?controller=user&action=login" class="signup-already-link">Đăng nhập</a>
                                </p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
            </script>

            <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
        </body>

        </html>
        <!--HẾT TEST-->
        </form>
        </div>