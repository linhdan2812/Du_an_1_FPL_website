<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- link slick -->

    <title>Document</title>
    <style>
        .items {
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
        }
    </style>
</head>

<body>
    <div class="container">
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="row">
                    <?php foreach ($ctlh as $ct) : ?>
                        <div class=" border items mt-3 ml-3">
                            <div class="badge badge-danger ">-<span class="sale"><?= $ct['giam_gia'] ?>%</span></div>
                            <div class="product">
                                <div class="img-product">
                                    <a href="?module=frontend&controller=info&action=info&ma_hh=<?= $ct['ma_hh'] ?>">
                                        <img src="  /public/images/<?= $ct['hinh'] ?> " height=" 210">
                                    </a>
                                </div>
                                <div class="text-center box-text grid-style-2">
                                    <div class=" title-wrapper  text-center">
                                        <a href="?module=frontend&controller=info&action=info&ma_hh=<?= $ct['ma_hh'] ?> id=" name-pro"><?= $ct['ten_hh'] ?></a></div>
                                    <div class="price-sale px-5">
                                        <span id="sale" class="font-weight-light text-center">
                                            <del><?= $ct['don_gia'] ?>đ</del>
                                        </span>
                                        <br>
                                        <span id="origin-price" class="font-weight-bold text-center">
                                            <ins><?= $ct['don_gia'] * (1 - ($ct['giam_gia'] / 100))  ?>đ</ins>
                                        </span>
                                    </div>
                                    <br>
                                    <div class="add-to-cart-btn pb-2">
                                        <button type="button" class="btn btn-outline-danger btn-sm">Mua Hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>