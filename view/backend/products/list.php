<body>
    <div class="container mt-5">
        <h3>QUẢN LÝ HÀNG HÓA</h3>
        <form method="POST" enctype="multipart/form-data">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th></th>
                        <th>MÃ HH</th>
                        <th>TÊN HH</th>
                        <th>ĐƠN GIÁ</th>
                        <th>GIẢM GIÁ</th>
                        <th>HÌNH ẢNH</th>
                        <th>LƯỢT XEM</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($list_product as $row) {
                    ?>
                        <tr>
                            <th><input type="checkbox" name="ma_hh[]" value="<?= $ma_hh ?>"></th>
                            <td><?= $row['ma_hh'] ?></td>
                            <td><?= $row['ten_hh'] ?></td>
                            <td><?= $row['don_gia'] ?>đ</td>
                            <td><?= $row['giam_gia'] * 1 ?>%</td>
                            <td>
                                <img width="100" class="img-fluid" src="/public/images/<?= $row['hinh'] ?>" alt="photo"></td>
                            <td><?= $row['so_luot_xem'] ?></td>
                            <td>
                                <a class="btn btn-outline-secondary" href="?module=backend&controller=products&action=edit&id=<?= $row['ma_hh'] ?>">Sửa</a>
                                <a class="btn btn-outline-danger" href="?module=backend&controller=products&action=delete&id=<?= $row['ma_hh'] ?>">Xóa</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="8">
                            <a class="btn btn-outline-success" id="check-all" type="button">Chọn tất cả</a>
                            <a class="btn btn-outline-danger" id="clear-all" type="button">Bỏ chọn tất cả</a>
                            <button onclick="return confirm('Bạn có muốn xóa  không ?')" class="btn btn-outline-success" id="btn-delete" name="btn-delete-multi">Xóa các mục chọn</button>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </div>