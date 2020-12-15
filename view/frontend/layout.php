<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="/public/css/layout.css">

</head>

<body>
    <div class="header">
        <div class="border" style="background-color: #FFA6A8  ;">
            <div class="container ">
                <div class="row ">
                    <div class="col-9">
                        <ul class="nav">
                            <li>Bean - Hệ Thống Phân Phối Mỹ Phẩm</li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="menu" href="?action=lien-he">Liên Hệ</a>
                            </li>
                            <li class="social-icons nav-item">
                                <a class="icons" href="https://www.facebook.com/Bean-Shop-106594651277688/"><i class="fab fa-facebook-f" style="color:#4267b2;"></i></a>
                                <a class="icons" href="https://www.instagram.com/linhdan.zyl/"><i class="fab fa-instagram" style="color:#bb4a56;"></i></a>
                                <a class="icons" href="https://twitter.com/home"><i class="fab fa-twitter" style="color:#1DA1F2;"></i></a>
                                <a class="icons" href="#"><i class="fab fa-youtube" style="color:#ff0000;"></i></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="border">
            <div class="container">
                <div class="row">
                    <div class="col-4 d-flex align-items-center">
                        <!-- Search form -->

                        <form class="form-inline my-2 my-lg-0">
                            <div class=" sm-form mt-0 ">
                                <button class="btn my-2 my-sm-0" type="submit" name="timkiem"><i class="fas fa-search"></i></button>
                                <input class=" form-control mr-sm-2" name="keyword" type="text" placeholder="Tìm kiếm sản phẩm..." aria-label="Search">
                            </div>
                        </form>
                    </div>
                    <div class="col-6  d-flex align-text-center ">
                        <img id="logo" src="/public/images/logo.png" class="img-fluid">
                    </div>
                    <?php
                    if (isset($_SESSION['user'])) {
                        require_once "nav1.php";
                    } else {
                        require_once "nav.php";
                    } ?>
                    <div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border" style="background-color: #FFA6A8; ">
            <div class="container cate">
                <div class="row">
                    <div class="nav">
                        <ul class="nav">
                            <li class="px-sm-4">
                                <a class="menu" href="http://beanshop.cf/">Trang Chủ</a>
                            </li>
                            <?php foreach ($list_cate as $ca) : ?>
                                <li class="px-sm-4 text-body">
                                    <a href="?controller=loai_hang&action=detailcategory&id=<?= $ca['ma_loai'] ?>"><?= $ca['ten_loai'] ?></a>
                                </li>
                            <?php endforeach; ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <?php require_once APP_PATH . '/view/' . $module . '/' . $view_name; ?>
    <hr>
    <div class="footer">
        <div style="background-color: #FFA6A8  ;">
            <div class="container" id="footer">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-4">
                        <ul class="nav d-flex align-items-center">
                            <li class="pr-4 "><i class="fas fa-shipping-fast fa-3x fa-flip-hori" style="color:red;"></i>
                            </li>
                            <li>
                                <p>
                                    <strong>Miễn Phí Ship Toàn Quốc</strong>
                                    <br>
                                    <span style="font-size: 90%;">
                                        Đối với đơn hàng trên 500k</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <ul class="nav d-flex align-items-center mr-auto flip">
                            <li class="pr-4"><i class="far fa-check-circle fa-3x" style="color:red;"></i></li>
                            <li>
                                <p>
                                    <strong>Sản phẩm chính hãng</strong>
                                    <br>
                                    <span style="font-size: 90%;">
                                        Có giấy chứng nhận chính hãng</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
        </div>
        <section class="footer-section">
            <div class="section-content container">
                <div class="row">
                    <div class="col-4">
                        <strong>Về Chúng Tôi : </strong>
                        <p>
                            <span> <strong>Bean</strong> là một shop bán mỹ phẩm online. Ở đây chúng tôi có đa dạng các
                                loại son đến từ các thương hiệu nổi tiếng khác nhau</span>
                            <br>
                            <span><strong>Email:</strong>beanvn@gmail.com</span>
                            <br>
                            <span><strong>Địa Chỉ:</strong>Fpoly - Trịnh Văn Bô - Từ Liêm - Hà Nội</span>
                            <p>
                    </div>
                    <div class="col-4">
                        <strong>Các Thương Hiệu Nổi Bật</strong>
                        <ul>
                            <li class="nav">
                                <a class="menu" href="?controller=loai_hang&action=detailcategory&id=1">3CE</a>
                            </li>
                            <li class="nav">
                                <a class="menu" href="?controller=loai_hang&action=detailcategory&id=13">Mac</a>
                            </li>
                            <li class="nav">
                                <a class="menu" href="?controller=loai_hang&action=detailcategory&id=14">Son
                                    Innisfree</a>
                            </li>
                            <li class="nav">
                                <a class="menu" href="?controller=loai_hang&action=detailcategory&id=15">Black Rouge</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <div>
                            <strong>Theo Dõi Chúng Tôi</strong>
                        </div>
                        <br>
                        <div>
                            <ul>
                                <li class="social-icons nav-item">
                                    <a class="icons" href="https://www.facebook.com/Bean-Shop-106594651277688/"><i class="fab fa-facebook-f fa-2x" style="color:#4267b2;"></i></a>
                                    <a class="icons" href="https://www.instagram.com/linhdan.zyl/"><i class="fab fa-instagram fa-2x" style="color:#bb4a56;"></i></a>
                                    <a class="icons" href="https://twitter.com/home"><i class="fab fa-twitter fa-2x" style="color:#1DA1F2;"></i></a>
                                    <a class="icons" href="#"><i class="fab fa-youtube fa-2x" style="color:#ff0000;"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm">
                            <div id="fb-root"></div>
                            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0" nonce="aotWXC6u">
                            </script>
                            <div class="fb-page" data-href="https://www.facebook.com/Bean-Shop-106594651277688" data-tabs="272" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                <blockquote cite="https://www.facebook.com/Bean-Shop-106594651277688" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Bean-Shop-106594651277688">SG-Shop</a>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
    </div>
    </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script> -->
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/usm/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>