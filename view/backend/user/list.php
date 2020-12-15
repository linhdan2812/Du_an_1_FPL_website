<div class="container mt-5">
    <h1> Quản lý người dùng </h1>
    <form action="index.php" method="post">
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th>MÃ KH</th>
                    <th>HỌ VÀ TÊN</th>
                    <th>ĐỊA CHỈ EMAIL</th>
                    <th>HÌNH ẢNH</th>
                    <th>VAI TRÒ?</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($list_user as $row) {
                ?>
                    <tr>
                        <td><?= $row['ma_kh'] ?></td>
                        <td><?= $row['ten_kh'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td>
                            <img width="100" class="img-fluid" src="/public/images/<?= $row['hinh'] ?>" alt="photo">
                        </td>
                        <td><?= $row['vai_tro'] ? 'Nhân viên' : 'Khách hàng' ?></td>
                        <td>
                            <a class="btn btn-outline-secondary" href="?module=backend&controller=user&action=edit&ma_kh=<?= $row['ma_kh'] ?>">Sửa</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </form>
</div>