<?php
//---------------------------------------------------------------------------------------------------------------------
// Khai báo ban đầu
$name = "";
$birthday = "";
$address = "";
$phone = "";
$email = "";
$account = "";
$password = "";
$passwordRepeat = "";

$registerSuccess = "";
$go_to_login = "none";

$nameError = "";
$birthdayError =  "";
$addressError =  "";
$phoneError =  "";
$emailError =  "";
$accountError =  "";
$passwordError =  "";
$passwordRepeatError =  "";

$controlGet = "";
$controlPost = "";

$hiUser = "";
$log_in = "block;";
$log_out = "none;";

$old_password = "";
$new_password = "";
$confirm_password = "";
$change_password = "";
//----------------------------------------------------------------------------------------------------------------------
// Nhận dữ liệu từ người dùng và lưu vào Session:
//---------------log_in-----------------
if (!isset($_SESSION["account"])) {
    session_start();
}
if (isset($_POST['account']) && !isset($_POST['name'])) {
    $account = $_POST['account'];
    $password = $_POST['password'];
    $_SESSION["account"] = $account;
    $_SESSION["password"] = $password;
    $_SESSION["hiUser"] = "";
}
//---------------register-----------------
if (isset($_POST['name']) && isset($_POST['birthday'])) {
    $name = $_POST['name'];
    $birthday = $_POST['birthday'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $account = $_POST['account'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['passwordRepeat'];
}
//---------------change_password-----------------
if (isset($_POST['old_password'])) {
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
}

// Kiểm tra phiên phiên làm việc:
if (isset($_SESSION["account"]) && isset($_SESSION["password"])) {
    $hiUser = $_SESSION['hiUser'];
    $log_in = "none;";
    $log_out = "block;";
}


//----------------------------------------------------------------------------------------------------------------------


// Điều khiển GET :

if (isset($_GET['control'])) {
    $controlGet = $_GET['control'];
    switch ($controlGet) {
        case "login": {
                $error_login = "";
                include('View/manager_account/login.php');
                break;
            }
        case "logout": {
                $hiUser = "";
                $log_in = "block;";
                $log_out = "none;";
                session_destroy();
                include('View/home.php');
                break;
            }
        case "change_password": {
                include('View/manager_account/change_password.php');
                break;
            }
        case "register": {
                include("View/manager_account/register.php");
            }
    }
} else {
    // Điều khiển POST :
    if (isset($_POST['control'])) {
        $controlPost = $_POST['control'];
        switch ($controlPost) {
            case "change_password_require": {
                    include('Model/CRUD_Database.php');
                    include('Model/manager_account/change_password_process.php');
                    $account = $_SESSION['account'];
                    $changepassword_array = change_password($account, $old_password, $new_password, $confirm_password);
                    if ($changepassword_array[0] === 'success') {
                        $_SESSION['password'] = $new_password;
                        $change_password = "Đổi mật khẩu thành công!";
                        $go_to_login = "block";
                    }
                    if ($changepassword_array[0] === 'error') {
                        $change_password = $changepassword_array[1];
                    }
                    include("View/manager_account/change_password.php");
                    break;
                }
            case "login_require": {
                    if ($account = 'admin' && $password = 'levinhthanh') {
                        include('View/admin.php');
                    } else {
                        include('Model/CRUD_Database.php');
                        include('Model/manager_account/login_process.php');
                        $arrayResult = login_process($account, $password);
                        if ($arrayResult[0] === 'success') {
                            $hiUser = $arrayResult[1];
                            $_SESSION['hiUser'] = $hiUser;
                            $log_in = "none;";
                            $log_out = "block;";
                            include('View/home.php');
                        }
                        if ($arrayResult[0] === 'error') {
                            $error_login = $arrayResult[1];
                            include("View/manager_account/login.php");
                        }
                    }
                    break;
                }
            case "register_require": {
                    include('Model/CRUD_Database.php');
                    include('Model/manager_account/register_process.php');
                    $resultRegister = register_process($name, $birthday, $address, $phone, $email, $account, $password, $passwordRepeat);
                    if ($resultRegister['result'] === "success") {
                        $registerSuccess = "Chúc mừng bạn đã đăng ký thành công!";
                        $go_to_login = "block";
                    }
                    if ($resultRegister['result'] === "error") {
                        $nameError = $resultRegister['name'];
                        $birthdayError = $resultRegister['birthday'];
                        $addressError = $resultRegister['address'];
                        $phoneError = $resultRegister['phone'];
                        $emailError = $resultRegister['email'];
                        $accountError = $resultRegister['account'];
                        $passwordError = $resultRegister['password'];
                        $passwordRepeatError = $resultRegister['passwordRepeat'];
                    }
                    include("View/manager_account/register.php");
                    break;
                }
        }
    } else {
        include('View/home.php');
    }
}
