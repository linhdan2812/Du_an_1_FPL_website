<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="   /public/css/quan-tri.css">
    <script src="   /js/jquery.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <script src="   /public/js/all.js"></script>

    <style>
        a {
            text-decoration: none;
            color: #F0FFFF;
        }

        div.view-form {
            overflow: scroll;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <!-- sidebartop -->
        <div class="sidebar__top">
            <div class="top">
                <h2>Dashboard</h2>
            </div>
        </div>
        <!--sidebar navigation -->
        <div class="sidebar__nav">
            <h5>Navigation</h5>
            <ul class="sidebar__menu">
                <a href="<?= BASE_URL ?>">
                    <li class="sidebar__menu--item">
                        <span>Trang chủ</span>
                    </li>
                </a>
                <div>
                    <a href="?module=backend&controller=user&action=list">
                        <li class="sidebar__menu--item">
                            <span>Users</span>
                        </li>
                    </a>
                    <ul>
                        <a href="?module=backend&controller=user&action=add">
                            <li class="sidebar__menu--item">
                                <span>Add Users</span>
                            </li>
                        </a>
                    </ul>
                </div>
                <div>
                    <a href="?module=backend&controller=loai&action=list">
                        <li class="sidebar__menu--item">
                            <span>Categories</span>
                        </li>
                    </a>
                    <ul>
                        <a href="?module=backend&controller=loai&action=add">
                            <li class="sidebar__menu--item">
                                <span>Add Categories</span>
                            </li>
                        </a>
                    </ul>
                </div>
                <div>
                    <a href="?module=backend&controller=products&action=list">
                        <li class="sidebar__menu--item">
                            <span>Products</span>
                        </li>
                    </a>
                    <ul>
                        <a href="?module=backend&controller=products&action=add">
                            <li class="sidebar__menu--item">
                                <span>Add Products</span>
                            </li>
                        </a>
                    </ul>
                </div>
                <a href="?module=backend&controller=thong-ke&action=list">
                    <li class="sidebar__menu--item">
                        <span>Analytics</span>
                    </li>
                </a>
                <a href="?module=backend&controller=binh-luan&action=list">
                    <li class="sidebar__menu--item">
                        <span>Comment</span>
                    </li>
                </a>
                <a href="?module=backend&controller=don_hang">
                    <li class="sidebar__menu--item">
                        <span>Order</span>
                    </li>
                </a>
            </ul>
        </div>
        <!-- sidebar profile -->
        <div class="sidebar__profile">
            <div class="avatar">
                <img src="https://cdna.artstation.com/p/assets/images/images/032/198/074/large/dave-greco-dk2.jpg?1605738391" alt="">
            </div>

        </div>
    </div>
    <div class="view-form container">
        <?php require_once APP_PATH . '/view/' . $module . '/' . $view_name; ?>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>
        void(function() {
            console.clear();
            document.getElementsByClassName('sidebar__menu--item')[0]
        })();

        const menuItems = Array.from(document.querySelectorAll('.sidebar__menu--item'))
        menuItems.forEach(item => {
            item.addEventListener('click', (e) => {
                menuItems.forEach(item => {
                    item.classList.remove('is-active')
                })
                e.currentTarget.classList.add('is-active');
            })
        });
    </script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>