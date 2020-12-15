<script src="https://kit.fontawesome.com/yourcode.js"></script>
<div class=" col-2 d-flex align-items-center">
    <div class="row">
        <?php $user = $_SESSION['user']  ?>
        <div class="col-4">
            <span class="navbar-text m-auto">
                <a href="?module=frontend&controller=cart&action=view"><i class="fas fa-shopping-cart"
                        style="width: 80px; font-size: 20px;"></i>
                </a>
            </span>
        </div>
        <div class="col-4">
            <img width="50px" height="50px" src="public/images/<?= $user['hinh'] ?>" alt="">
        </div>

        <div class="dropdown col-4">
            <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">

            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#"><?= $_SESSION['user']['ma_kh'] ?></a>
                <a class="dropdown-item" href=" ?controller=user&action=update_tk">Cập nhật
                    Tài Khoản</a>
                <a class="dropdown-item" href=" ?controller=user&action=doi_mk">Đổi Mật
                    Khẩu</a>
                <a class="dropdown-item" href="?module=backend&controller=user&action=list">Trang Quản Trị </a>
                <a class="dropdown-item" href=" ?controller=user&action=logout">Đăng xuất</a>
            </div>
        </div>


    </div>
</div>