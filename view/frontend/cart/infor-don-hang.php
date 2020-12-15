<div class="container mt-5 mb-5">
    <h2 class="text-center special">Thông tin đơn hàng</h2>
    <table class="table table-hover">
        <thead class="table-dark ">
            <tr>
                <th>stt</th>
                <th>tên</th>
                <th>ảnh</th>
                <th>giá</th>
                <th>số lượng</th>
                <th>thành tiền</th>
            </tr>
        </thead>
        <tbody>
            <?php $count = 0;
            $sum = 0;
            foreach ($infor_don_hang as $don_hang) {
                extract($don_hang);
                $sum += $don_gia * $so_luong; ?>
                <tr>
                    <td><?= ++$count ?></td>
                    <td><?= $ten_hh ?></td>
                    <td>
                        <img src="<?= BASE_URL . '/public/images/products/' . $hinh ?>" alt="" width="100">
                    </td>
                    <td><?= $don_gia ?></td>
                    <td><?= $so_luong ?></td>
                    <td><?= $don_gia * $so_luong ?></td>
                </tr>
            <?php } ?>
            <tr>
                <th></th>
                <th>Tổng tiền : </th>
                <th></th>
                <th></th>
                <th></th>
                <th><?= $sum ?> đ</th>
            </tr>
        </tbody>
    </table>


    <a class="btn btn-dark card-link text-white" href="?controller=index&action=trang-chu">Trang Chủ</a>

</div>