<div class="right__content mt-5">

    <p class="right__desc">Danh sách mua hàng</p>
    <div class="right__table">
        <div class="right__tableWrapper">
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th>mã đơn hàng</th>
                        <th>tên khách hàng</th>
                        <th>email</th>
                        <th>địa chỉ</th>
                        <th>tổng tiền</th>
                        <th>ngày thêm</th>
                        <th>chi tiết</th>
                        <th>Xóa</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($rows_don_hang as $row_don_hang) {
                        extract($row_don_hang);
                    ?>
                        <tr>
                            <td><?= $ma_don_hang ?></td>
                            <td><?= $ten_kh ?></td>
                            <td><?= $email ?></td>
                            <td><?= $dia_chi ?></td>
                            <td><?= $tong_tien ?></td>
                            <td><?= date_format(date_create($ngay_thang), 'd-m-Y') ?></td>
                            <td>
                                <a class="btn btn-secondary" href="?module=backend&controller=don_hang&action=detail&ma_don_hang=<?= $ma_don_hang ?>">xem</a>
                            </td>
                            <td>
                                <a class="btn btn-primary" onclick="return confirm('Bạn muốn xóa đơn hàng')" href="?module=backend&controller=don_hang&action=delete&ma_don_hang=<?= $ma_don_hang ?>"> Xóa</a>
                            </td>
                        </tr>

                    <?php  } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>