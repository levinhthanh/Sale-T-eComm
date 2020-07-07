<?php

if (isset($_GET['control'])) {
    $control = $_GET['control'];
    switch ($control) {
        case 'watch_product': {
                include('Controller/Control_product.php');
                break;
            }
        case 'register': {
                include('View/customer/register_page.php');
                break;
            }
        case 'logout': {
                $hiUser = "";
                $log_in = "block;";
                $log_out = "none;";
                session_destroy();
                include('Model/get_product_data.php');
                include('View/home_page.php');
                break;
            }
        case 'change_password': {
                include('View/customer/change_password.php');
                break;
            }
        case 'forgot_password': {
                include('View/customer/forgot_password.php');
                break;
            }
    }
}

if (isset($_POST['control'])) {
    $control = $_POST['control'];
    switch ($control) {
        case "require_get_password": {

                break;
            }
        case "change_password_require": {
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
                include("View/customer/change_password.php");
                break;
            }
        case 'register_require': {
                $check_result = register_process($fullname, $birthday, $address, $phone, $email, $account, $password, $passwordRepeat);
                if ($check_result['result'] === 'success') {
                    $customer = new Customer($fullname, $birthday, $address, $phone, $email, $account, $password);
                    $customer->register_account();
                    $registerSuccess = "Chúc mừng bạn đã đăng ký thành công!";
                    $go_to_login = "block";
                    include('View/customer/register_page.php');
                } else {
                    if ($check_result['result'] === 'error') {
                        $nameError = $check_result['fullname'];
                        $birthdayError = $check_result['birthday'];
                        $addressError = $check_result['address'];
                        $phoneError = $check_result['phone'];
                        $emailError = $check_result['email'];
                        $accountError = $check_result['account'];
                        $passwordError = $check_result['password'];
                        $passwordRepeatError = $check_result['passwordRepeat'];
                        include('View/customer/register_page.php');
                    }
                }
                break;
            }
    }
}
