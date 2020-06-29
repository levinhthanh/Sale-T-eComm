<?php

if(!isset($_SESSION['name'])){
    session_start();
    $nameUser = "";
    $log_in = "block;";
    $log_out = "none;";
    $online = false;
}
// log in
if(isset($_GET['name']) && $_GET['name'] !== ""){
    $_SESSION['name'] = $_GET['name'];
    $_SESSION['account'] = $_GET['account'];
    $_SESSION['password'] = $_GET['password'];
    $nameUser = $_SESSION['name'];
    $log_in = "none;";
    $log_out = "block;";
    $online = true;
}
// log out
if(isset($_GET['name']) && $_GET['name'] === ""){
    session_destroy();
    $nameUser = "";
    $log_in = "block;";
    $log_out = "none;";
    $online = false;
}
// online
if($online){
    $nameUser = $_SESSION['name'];
    $log_in = "none;";
    $log_out = "block;";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T - eComm</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>

<body>
    <div class="container">
        <div class="teleMail" style="display: flex;">
            <div class="teleMail1">
                <i id="teleIcon" class="fas fa-phone-square-alt"></i>
                <label id="teleNum"> +84-914-800-124 </label>
            </div>
            <div class="teleMail2">
                <i id="letterIcon" class="fas fa-envelope-square"></i>
                <label id="email"> levinhthanh@gmail.com </label>
            </div>
            <div class="helloUser">
                <label id="helloUser"><?= $nameUser ?></label>
            </div>
        </div>

        <div class="search" style="display: flex;">
            <div class="logo"><img id="logo" src="images/logo/logo.png" alt="logo"></div>
            <form class="searchProduct" style="display: flex;" action="" method="post">
                <label id="show">Tất cả</label>
                <input id="inputProduct" type="text" name="search" placeholder="Từ khóa tìm kiếm...">
                <div id="btn-cover">
                    <img id="btnImg" src="images/logo/search.png">
                    <input id="btn" type="submit" value="">
                </div>
            </form>
            <div class="others" style="display: flex;">
                <div class="logIn" style="display: <?= $log_in ?>">
                    <i id="login" class="fas fa-user"></i><br>
                    <a href="manager_accounts/login.php">Đăng nhập</a>
                </div>
                <div class="register" style="display: <?= $log_in ?>">
                    <i id="login" class="fas fa-key"></i><br>
                    <a href="manager_accounts/register.php">Đăng ký</a>
                </div>
                <div class="productsList">
                    <i id="box" class="fas fa-shopping-cart"></i><br>
                    <a href="">Giỏ hàng</a>
                </div>
                <div class="logOut" style="display: <?= $log_out ?>">
                    <i id="logout" class="fas fa-sign-out-alt"></i><br>
                    <a href="logout.php">Đăng xuất</a>
                </div>
            </div>
        </div>

        <div class="header" style="display: flex;">
            <div class="trangchu"><a id="trangchu" href="">Trang chủ</a></div>
            <div class="header"></div>
            <div class="header"></div>
            <div class="header"></div>
            <div class="header"></div>
            <div class="header"></div>
            <div class="header"></div>
        </div>

        <div class="main">
            <div class="showProducts">

            </div>
        </div>
        <div class="footer"></div>
    </div>
    </div>
</body>

</html>