<!DOCTYPE html>
<html>

<head>
    <script src=""></script>


</head>

<body>
    <div class=" text-center mt-5">
        <h3 class="">THỐNG KÊ</h3>
        <form action="" method="post" enctype="multipart/form-data">
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th>HÃNG SON</th>
                        <th>SỐ LƯỢNG</th>
                        <th>GIÁ CAO NHẤT</th>
                        <th>GIÁ THẤP NHẤT</th>
                        <th>GIÁ TRUNG BÌNH</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tk as $row_tk) {
                        extract($row_tk) ?>
                        <tr>
                            <th><?= $ten_loai ?></th>
                            <th><?= $tong_hh ?></th>
                            <th><?= $gia_cao_nhat ?></th>
                            <th><?= $gia_thap_nhat ?></th>
                            <th><?= $gia_trung_binh ?></th>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a class="btn btn-primary" href="?module=backend&controller=thong-ke&action=chart">Xem biểu đồ</a>
        </form>
    </div>
</body>

</html>