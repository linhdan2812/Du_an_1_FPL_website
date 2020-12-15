<!doctype html>
<html lang="en">

<head>
    <title>Bean-Shop</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- link font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="public/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="public/css/slick-theme.css" />
    <style>
        a {
            color: black;
        }

        del {
            color: grey;
        }

        ins {
            color: red;
        }

        .items {
            width: 260px;
            margin-left: 5px;
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <!-- .banner -->
    <section class="banner">
        <div class="mt-4">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src=" /public/images/banner1.jpg" class="d-block w-100" height="500" style="object-fit: cover;">
                    </div>
                    <div class="carousel-item">
                        <img src=" /public/images/banner2.jpg" class="d-block w-100" height="500" style="object-fit: cover;">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!-- End .banner -->
    <div class=" container">
        <h1 class="text-center mt-3 mb-3"> Sản Phẩm Nổi Bật</h1>
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="autoplay">
                    <?php
                    require_once APP_PATH . '/library/functions.php';
                    require_once APP_PATH . '/model/product_model.php';
                    require_once APP_PATH . '/controller/backend/products.php';
                    require_once APP_PATH . '/model/loai_model.php';
                    foreach ($list_product as $pr) : ?>
                        <div class="col-3 card-body border ml-3">
                            <div class="badge badge-danger "><span class="sale"><?= $pr['giam_gia'] ?>%</span></div>
                            <div class="product">
                                <div class="img-product">
                                    <a href="?module=frontend&controller=info&action=info&ma_hh=<?= $pr['ma_hh'] ?>">
                                        <img src=" /public/images/<?= $pr['hinh'] ?> " height=" 210">
                                    </a>
                                </div>
                                <div class="text-center box-text grid-style-2">
                                    <div class=" title-wrapper  ">
                                        <a href="?module=frontend&controller=info&action=info&ma_hh=<?= $pr['ma_hh'] ?>" id="name-pro"><?= $pr['ten_hh'] ?></a>
                                    </div>
                                    <div class="price-sale px-5">
                                        <span id="sale" class="font-weight-light">
                                            <del><?= $pr['don_gia'] ?>đ</del>
                                        </span>
                                        <span id="origin-price" class="font-weight-bold">
                                            <ins><?= $pr['don_gia'] * (1 - ($pr['giam_gia'] / 100))  ?>đ</ins>
                                        </span>
                                    </div>
                                    <br>
                                    <div class="add-to-cart-btn">
                                        <a href="?module=frontend&controller=info&action=info&ma_hh=<?= $pr['ma_hh'] ?>">
                                            <button type="button" class="btn btn-outline-danger btn-sm" >Chi tiết</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class=" container">
        <h1 class="text-center mt-3 mb-3"> Sản Phẩm</h1>
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="row">
                    <?php
                    require_once APP_PATH . '/library/functions.php';
                    require_once APP_PATH . '/model/product_model.php';
                    require_once APP_PATH . '/controller/backend/products.php';
                    if (isset($_GET['timkiem'])) {
                        $keyword = $_GET['keyword'];
                        $list_product1 = product_select_keyword($keyword);
                    } else {
                        $list_product1 = product_list_all();
                    }
                    foreach ($list_product1 as $pr) : ?>
                        <div class=" items border ml-3 mt-3 ">
                            <div class="badge badge-danger ">-<span class="sale"><?= $pr['giam_gia'] ?>%</span></div>
                            <div class="product">
                                <div class="img-product">
                                    <a href="?module=frontend&controller=info&action=info&ma_hh=<?= $pr['ma_hh'] ?>">
                                        <img class="fluid" src=" /public/images/<?= $pr['hinh'] ?> " height=" 210">
                                    </a>
                                </div>
                                <div class="text-center box-text grid-style-2">
                                    <div class=" title-wrapper  ">
                                        <a href="?module=frontend&controller=info&action=info&ma_hh=<?= $pr['ma_hh'] ?>" id="name-pro"><?= $pr['ten_hh'] ?></a></div>
                                    <div class="price-sale px-5">
                                        <span id="sale" class="font-weight-light">
                                            <del><?= $pr['don_gia'] ?>đ</del>
                                        </span>
                                        <br>
                                        <span id="origin-price" class="font-weight-bold">
                                            <ins><?= $pr['don_gia'] * (1 - ($pr['giam_gia'] / 100))  ?>đ</ins>
                                        </span>
                                    </div>
                                    <br>
                                    <div class="add-to-cart-btn pb-2">
                                        <a href="?module=frontend&controller=info&action=info&ma_hh=<?= $pr['ma_hh'] ?>" id="name-pro">
                                            <button type="button" class="btn btn-outline-danger btn-sm">Chi tiết</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="public/js/slick.min.js"></script>
    <script>
        $('.autoplay').slick({
            slidesToShow: 4,
            slidesToScroll: 3,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    </script>
</body>

</html>