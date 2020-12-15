<div class="container mt-5 mb-5">
    <h1 class="text-center special">Giỏ Hàng</h1>
    <h5 class="text-center special"><?php echo $msg ?></h5>
    <?php if (count($rows_cart) > 0) { ?>
    <form action="?module=frontend&controller=cart&action=update" method="post">
        <table class="table table-hover">
            <thead style="background-color:#FFA6A8">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên Sản Phẩm</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Đơn giá</th>
                    <th scope="col">Số lượng (SP)</th>
                    <th scope="col">Thành Tiền</th>
                    <th scope="col">Hành Động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $count = 0;
                    $sum = 0;
                    foreach ($rows_cart as $cart) {

                        ++$count;
                        extract($cart);

                        $sum += $don_gia * $_SESSION['cart'][$ma_hh];  ?>
                <tr>
                    <td><?= $count ?></td>
                    <td><?= $ten_hh ?></td>
                    <td>
                        <img src="<?= BASE_URL . '/public/images/products/' . $hinh ?>" alt="" width="100">
                    </td>
                    <td>
                        <?= $don_gia ?> đ
                    </td>
                    <td>
                        <input type="number" name="so_luong[<?= $ma_hh ?>]" id=""
                            value="<?= $_SESSION['cart'][$ma_hh] ?>">
                    </td>
                    <td>
                        <?= $don_gia * $_SESSION['cart'][$ma_hh] ?> đ
                    </td>
                    <td>
                        <a class="card-link text-dark" onclick="return confirm('Bạn muốn xóa sản phẩm này')"
                            href="?module=frontend&controller=cart&action=delete&ma_hh=<?= $ma_hh ?>">Xóa</a>
                    </td>
                </tr>
                <?php } ?>

                <tr>



                    <th>

                    </th>
                </tr>

            </tbody>
        </table>
        <div class="row">
            <div class="col-md-6">
                <button type="submit" name="btn_update" class="btn btn-outline-info">Cập nhật</button>
            </div>
            <div class="col-md-3">
                <h5 class="justify-content-end special">Tổng : <?= $sum ?> đ</h5>
            </div>
            <div class="col-md-3">
                <button class="btn btn-info " type="button">
                    <a class="card-link text-white" href="?controller=index&action=trang-chu">Mua Thêm</a>
                </button>
                <button class="btn btn-info" type="button">
                    <a class="card-link text-white" href="?module=frontend&controller=cart&action=order">Thanh Toán</a>
                </button>
            </div>
        </div>






        <div>

        </div>

    </form>
    <?php } ?>
</div>