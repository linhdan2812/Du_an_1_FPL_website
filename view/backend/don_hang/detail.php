<div class="right__content">
    <div class="right__title">Bảng điều khiển</div>
    <p class="right__desc">Thống Kê Bình Luận</p>
    <div class="right__table">
        <div class="right__tableWrapper">
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th>tên sp</th>
                        <th>Mã đơn hàng</th>
                        <th>số lượng</th>
                        <th>thành tiền</th>
                        <th>Xóa</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $count = 0;
                    foreach ($detail_order as $order) {
                        extract($order); ?>
                        <tr>
                            <td><?= $ten_hh ?></td>
                            <td><?= $ma_don_hang ?></td>
                            <td><?= $so_luong ?></td>
                            <td><?= $gia_don_hang ?></td>
                            <td><a class="btn btn-primary" onclick="return confirm('Bạn muốn xóa đơn hàng')" href="?module=backend&controller=don_hang&action=delete&ma_don_hang=<?= $ma_don_hang ?>">Xóa</a></td>
                        </tr>

                    <?php  } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>