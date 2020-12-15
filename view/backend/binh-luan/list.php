<h3 class="mt-5">Thống Kê Bình Luận</h3>
<form action="" method="post" enctype="multipart/form-data">
    <table class="table table-hover text-center">
        <thead>
            <tr>
                <th>Sản Phẩm</th>
                <th>Số Bình Luận</th>
                <th>Mới Nhất</th>
                <th>Cũ Nhất</th>
                <th>Hành Động</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($bl as $row_bl) {
                extract($row_bl) ?>
                <tr>
                    <td><?= $ten_hh ?></td>
                    <td><?= $so_bl ?></td>
                    <td><?= date_format(date_create($moi_nhat), 'd-m-Y') ?></td>
                    <td><?= date_format(date_create($cu_nhat), 'd-m-Y') ?></td>
                    <td><a class="btn btn-primary" href="?module=backend&controller=binh-luan&action=bl_detail&ma_hh=<?= $ma_hh ?>">xem chi tiết</a></td>
                </tr>
            <?php } ?>

        </tbody>

    </table>
</form>