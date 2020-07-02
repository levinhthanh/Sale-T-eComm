<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T - eComm</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/fontawesome/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="tele_mail" style="display: flex;">
            <div class="teleMail1">
                <i id="teleIcon" class="fas fa-phone-square-alt"></i>
                <label id="teleNum"> +84-914-800-124 </label>
            </div>
            <div class="teleMail2">
                <i id="letterIcon" class="fas fa-envelope-square"></i>
                <label id="email"> T-eComm@gmail.com </label>
            </div>
            <div class="helloUser">
                <label id="helloUser"><?= $hiUser ?></label>
            </div>
        </div>

        <div class="search" style="display: flex;">
            <div class="logo"><img id="logo" src="../images/logo/logo.png" alt="logo"></div>
            <form class="search_product" style="display: flex;" action="" method="post">
                <label id="show">Tất cả</label>
                <input id="inputProduct" type="text" name="search" placeholder="Từ khóa tìm kiếm...">
                <div id="btn-cover">
                    <img id="btnImg" src="../images/logo/search.png">
                    <input id="btn" type="submit" value="">
                </div>
            </form>
            <div class="others" style="display: flex;">
                <div class="logIn" style="display: <?= $log_in ?>">
                    <i id="login" class="fas fa-user"></i><br>
                    <a href="index.php?control=login">Đăng nhập</a>
                </div>
                <div class="logOut" style="display: <?= $log_out ?>">
                    <i id="logout" class="fas fa-sign-out-alt"></i><br>
                    <a href="index.php?control=logout">Đăng xuất</a>
                </div>
                <div class="register" style="display: <?= $log_in ?>">
                    <i id="login" class="fas fa-key"></i><br>
                    <a href="index.php?control=register">Đăng ký</a>
                </div>
                <div class="changePass" style="display: <?= $log_out ?>">
                    <i id="logout" class="fas fa-exchange-alt"></i><br>
                    <a href="index.php?control=change_password">Đổi mật khẩu</a>
                </div>
                <div class="productsList">
                    <i id="box" class="fas fa-shopping-cart"></i><br>
                    <a href="">Giỏ hàng</a>
                </div>
            </div>
        </div>

        <div class="toolbar" style="display: flex;">
            <div class="home_page">
                <i id="icon_homepage" class="fas fa-home"></i>
                <a id="home_page" href="">Trang chủ</a>
            </div>
            <div class="product_list">
                <label>Danh mục sản phẩm</label>
                <i id="icon_dropdown" class="fas fa-angle-down"></i>
            </div>
            <div class="product_new">
                <label>Sản phẩm mới</label>
                <i id="icon_dropdown" class="fas fa-angle-down"></i>
            </div>
            <div class="product_hot">
                <label>Sản phẩm hot</label>
                <i id="icon_dropdown" class="fas fa-angle-down"></i>
            </div>
            <div class="promotion">
                <label>Khuyến mãi</label>
                <i id="icon_dropdown" class="fas fa-angle-down"></i>
            </div>
            <div class="connect">
                <label>Liên hệ</label>
                <i id="icon_connect" class="far fa-handshake"></i>
            </div>
        </div>

        <div class="main">
            <div class="selections">
                <h3>Danh mục dòng cá</h3>
            </div>
            <div class="show_products">
                <h3>Danh mục cá</h3>
            </div>
            <div class="advertise">
                <h3>Giỏ hàng</h3>
            </div>
        </div>
        <div class="footer"></div>
    </div>
    </div>
</body>

</html>