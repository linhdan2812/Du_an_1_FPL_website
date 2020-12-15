<style>
a {
    color: black;
}
</style>

<div class="container">
    <div class="row">
        <!-- phần sản phẩm -->

        <!-- phần mua hàng -->
        <div class="row mr-1">
            <!-- ảnh sản phẩm -->
            <div class="col-4">
                <img src="/public/images/<?= $row_sp_ma_sp['hinh'] ?>" alt="ảnh sản phẩm" width="100%">
            </div>
            <!-- thông tin và nút nhấn để mua hàng -->
            <div class="col-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Trang Chủ</li>
                        <li class="breadcrumb-item"><a href="#">3CE</a></li>
                    </ol>
                </nav>
                <!-- thông tin sản phẩm -->
                <div>
                    <h5><?= $row_sp_ma_sp['ten_hh'] ?></h5>
                    <span id="sale" class="font-weight-light">
                        <del class="text-danger"><?= $row_sp_ma_sp['don_gia'] ?><sup>₫</sup></del>
                    </span>
                    <span id="origin-price" class="font-weight-bold">
                        <ins>
                            <?= $row_sp_ma_sp['don_gia'] * (1 - ($row_sp_ma_sp['giam_gia'] / 100))  ?><sup>₫</sup></ins>
                    </span>
                    <p><?= $row_sp_ma_sp['mo_ta'] ?></p>
                </div>
                <!-- buttion group -->
                <div class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-primary mr-2"><i
                                class="fab fa-facebook-messenger mr-1"></i>Chat
                            Facebook</button>
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="btn btn-info" style="width:180px"><i
                                class="fab fa-instagram mr-1"></i>Chat
                            Insatgram</button>
                    </div>
                </div>
                <div class="mt-2">
                    <form action="?module=frontend&controller=cart&action=add" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <input aria-label="so_luong" class="input-qty" max="15" min="1"
                                    name="so_luong[<?= $row_sp_ma_sp['ma_hh'] ?>]" type="number" value="1"
                                    style="width:150px">
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-outline-danger"><i
                                        class="fas fa-shopping-cart"></i>Thêm
                                    vào giỏ hàng</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--Thông tin chi tiết sản phẩm -->
        <div class="border-top border-bottom mt-3">
            <h2 class="text-center">Thông tin sản phẩm</h2>
            <!-- nội dung thông tin sản phẩm -->
            <div>
                <div class="d-flex justify-content-center">
                    <img src="https://lisa.vn/wp-content/uploads/2020/08/3ce-mickey-do-6-510x510.jpg?v=1597143934"
                        alt="Thông tin sản phảm">
                </div>
                <p>Đồng hành bên cạnh cây son 3CE Mickey vỏ xanh màu đỏ lạnh chính là
                    em son 3CE Mickey vỏ đỏ màu
                    cam san hô trẻ trung, dành tặng cho những cô nàng năng động, cá tính. Cùng Lisa Cosmetics tìm
                    hiểu xem, em son thần thánh này có gì nổi bật mà lại khiến dân tình bấn loạn đến thế! Rõ ràng
                    không phải là thiết kế độc nhất vô nhị, thế nhưng 3CE Luztic lại ăn điểm toàn diện trên mọi góc
                    cạnh. Thế mới thấy sức hút của những thỏi son mang thương hiệu 3CE chưa bao giờ là vô hình với
                    Hội mê son Châu Á. Chưa kể đây lại là cú bắt tay đầy ẩn ý của “Ba chị em” với hãng Disney lừng
                    danh. Chỉ tính riêng “fan ruột” của em chuột Mickey xinh xắn đủ đủ thấy một lực lượng vô cùng
                    hùng hậu. Thỏi son 3CE Disney 233 có thiết kế thon dài, nhỏ gọn, dễ dàng mang theo bên mình.
                    Trên thân son có hình họa chuột Mickey siêu dễ thương, tạo nên dấu ấn cực kỳ thú vị. Tên thương
                    hiệu 3CE được lồng ghép tinh tế phía dưới giúp nàng nhận diện; đầu cọ son thiết kế vát chéo quen
                    thuộc, giúp nàng điều tiết lượng son lấy ra và đánh viền môi dễ dàng.
                    Nếu nàng nghĩ vỏ son màu đỏ thì màu son bên trong cũng đỏ thì nhầm to rồi nhé! 3CE Luztic có màu
                    cam san hô, vừa tươi vừa ngọt, đích thực là cứu tinh cho nhan sắc nhợt nhạt, kém xinh. Em này
                    lên môi giống như bầu trời tỏa nắng, cho nàng khuôn mặt rạng ngời sức sống, không cần makeup đậm
                    đà cũng đẹp quên sầu quên muộn.
                </p>
            </div>
        </div>
        <!-- bình luận -->
        <div class="comment p-3 mt-4" style="background-color: white;">
            <h2>BÌNH LUẬN</h2>
            <div class="comment-user mb-4 mt-4">

                <?php foreach ($rows_sp_bl as $row_bl) {
                        extract($row_bl) ?>
                <li class='list-group-item rounded-pill mb-3' style="background-color: rgb(247, 247, 247);">
                    <?= $noi_dung ?> <i class='pull-right float-right'><b><?= $ma_kh ?></b>,
                        <?= date_format(date_create($ngay_bl), "d-m-Y") ?></i></li>
                <?php } ?>
            </div>
            <form class="row" action="?module=frontend&controller=info&action=sp_bl&ma_hh=<?= $row_sp_ma_sp['ma_hh'] ?>"
                method="post">
                <div class="form-group col-md-10">
                    <input type="text" name="noi_dung" class="form-control">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary mb-2" name="binh_luan">Gửi</button>
                </div>
            </form>
        </div>

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>