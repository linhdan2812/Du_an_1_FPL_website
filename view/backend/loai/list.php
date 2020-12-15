<!DOCTYPE html>
<html>

<body>
    <div class="heading">
    </div>
    <div class="form-input">
        <form action="" method="post" enctype="multipart/form-data">
            <table class="table table-hover">
                <thead>
                    <tr class="text-center">
                        <th></th>
                        <th>Mã Loại</th>
                        <th>TÊN Loại</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <?php foreach ($list_cate as $row) : ?>
                    <tbody>
                        <tr class="text-center">
                            <th><input type="checkbox" name="ma_loai[]" value="<?= $row['ma_loai'] ?>"></th>
                            <td><?= $row['ma_loai'] ?></td>
                            <td><?= $row['ten_loai'] ?></td>
                            <td>
                                <a class="btn btn-outline-secondary" href="?module=backend&controller=loai&action=edit&id=<?= $row['ma_loai'] ?>">Sửa</a>
                                <a class="btn btn-outline-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="?module=backend&controller=loai&action=delete&id=<?= $row['ma_loai'] ?>">
                                    Xóa
                                </a>
                            </td>
                        </tr>

                    </tbody>
                <?php endforeach; ?>
                <tfoot>
                    <tr>
                        <td colspan="4">
                            <button class="btn btn-outline-success" id="check-all" type="button">Chọn tất cả</button>
                            <button class="btn btn-outline-danger" id="clear-all" type="button">Bỏ chọn tất cả</button>
                            <button class="btn btn-outline-success" id="btn-delete" name="btn_delete">Xóa các mục chọn</button>
                        </td>
                    </tr>
                </tfoot>

            </table>
        </form>
    </div>

</body>

</html>