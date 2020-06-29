<?php
//pass admin01 levinhthanh1992
$registerSuccess = "";
$nameError = "";
$name = "";
$nameInput = "";
$birthdayError =  "";
$birthday = "";
$birthdayInput = "";
$addressError =  "";
$address = "";
$addressInput = "";
$phoneError =  "";
$phone = "";
$phoneInput = "";
$emailError =  "";
$email = "";
$emailInput = "";
$accountError =  "";
$account = "";
$accountInput = "";
$passwordError =  "";
$password = "";
$passwordInput = "";
$passwordRepeatError =  "";
$passwordRepeat = "";
$passwordRepeatInput = "";
$newAccount = "";
$newPassword = "";
$checkForm = true;
$go_to_login = "none";

if (!isset($connect)) {
    $connect = new PDO('mysql:dbname=db_sale_ecomm;host=localhost', 'vinhthanhle', 'thanh12345');
}

if (!isset($_COOKIE["name"])) {
    setcookie('name', "", time() + 3600);
    setcookie('birthday', "", time() + 3600);
    setcookie('address', "", time() + 3600);
    setcookie('phone', "", time() + 3600);
    setcookie('email', "", time() + 3600);
    setcookie('account', "", time() + 3600);
    setcookie('password', "", time() + 3600);
    setcookie('passwordRepeat', "", time() + 3600);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // check name  
    $checkName = "/^[^0-9\`\~\!\@\#\%\^\&\*\(\)\-\=\_\+\{\}\[\]\\\|\;\:\'\"\,\.\<\>\/\?]+$/";
    if (empty($_POST['name'])) {
        $nameError = "* Tên chưa được nhập!";
        $checkForm = false;
    } else {
        $name = $_POST['name'];
        if (!preg_match($checkName, $name)) {
            $nameError = "* $name là tên không hợp lệ!";
            $checkForm = false;
        }
    }
    $_COOKIE["name"] = $name;
    $nameInput = $_COOKIE["name"];
    // check birthday  
    $checkBirthday = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";
    if (empty($_POST['birthday'])) {
        $birthdayError = "* Ngày sinh chưa được nhập!";
        $checkForm = false;
    } else {
        $birthday = $_POST['birthday'];
        if (!preg_match($checkBirthday, $birthday)) {
            $birthdayError = "* $birthday là ngày không hợp lệ!";
            $checkForm = false;
        }
    }
    $_COOKIE["birthday"] = $birthday;
    $birthdayInput = $_COOKIE["birthday"];
    // check address
    $checkAddress = "/^[^\`\~\!\@\#\%\^\&\*\(\)\=\{\}\[\]\\\|\;\:\'\"\<\>\?]+$/";
    if (empty($_POST['address'])) {
        $addressError = "* Địa chỉ chưa được nhập!";
        $checkForm = false;
    } else {
        $address = $_POST['address'];
        if (!preg_match($checkAddress, $address)) {
            $addressError = "* $address là địa chỉ không hợp lệ!";
            $checkForm = false;
        }
    }
    $_COOKIE["address"] = $address;
    $addressInput = $_COOKIE["address"];
    // check phone
    $checkPhone = "/^0[0-9]{9}$/";
    if (empty($_POST['phone'])) {
        $phoneError = "* Số điện thoại chưa được nhập!";
        $checkForm = false;
    } else {
        $phone = $_POST['phone'];
        if (!preg_match($checkPhone, $phone)) {
            $phoneError = "* $phone là số không hợp lệ!";
            $checkForm = false;
        }
    }
    $_COOKIE["phone"] = $phone;
    $phoneInput = $_COOKIE["phone"];
    // check email
    $checkEmail = "/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/";
    if (empty($_POST['email'])) {
        $emailError = "* Email chưa được nhập!";
        $checkForm = false;
    } else {
        $email = $_POST['email'];
        if (!preg_match($checkEmail, $email)) {
            $emailError = "* $email là email không hợp lệ!";
            $checkForm = false;
        }
    }
    $_COOKIE["email"] = $email;
    $emailInput = $_COOKIE["email"];
    // check account
    $checkAccount = "/^[_a-z0-9]{6,20}$/";
    if (empty($_POST['account'])) {
        $accountError = "* Tài khoản chưa được nhập!";
        $checkForm = false;
    } else {
        $account = $_POST['account'];
        if (!preg_match($checkAccount, $account)) {
            $accountError = "* $account là tài khoản không hợp lệ!";
            $checkForm = false;
        } else {
            $checkOldAccount = $connect->prepare("SELECT account_name from accounts where account_name = '$account' ");
            $checkOldAccount->setFetchMode(PDO::FETCH_ASSOC);
            $checkOldAccount->execute();
            while ($row = $checkOldAccount->fetch()) {
                $accountError = "* $account đã tồn tại!";
                $checkForm = false;
            }
        }
    }
    $_COOKIE["account"] = $account;
    $accountInput = $_COOKIE["account"];
    // check password
    $checkPassword = "/^[a-z0-9]{6,20}$/";
    if (empty($_POST['password'])) {
        $passwordError = "* Mật khẩu chưa được nhập!";
        $checkForm = false;
    } else {
        $password = $_POST['password'];
        if (!preg_match($checkPassword, $password)) {
            $passwordError = "* $password là mật khẩu không hợp lệ!";
            $checkForm = false;
        }
    }
    $_COOKIE["password"] = $password;
    $passwordInput = $_COOKIE["password"];
    // check password repeat
    if (empty($_POST['passwordRepeat'])) {
        $passwordRepeatError = "* Mật khẩu chưa được nhập lại!";
        $checkForm = false;
    } else {
        $passwordRepeat = $_POST['passwordRepeat'];
        if ($passwordRepeat !== $password) {
            if ($password !== "") {
                $passwordRepeatError = "* Mật khẩu nhập lại chưa đúng!";
                $checkForm = false;
            }
        }
    }
    $_COOKIE["passwordRepeat"] = $passwordRepeat;
    $passwordRepeatInput = $_COOKIE["passwordRepeat"];
    if ($checkForm) {
        $registerSuccess = "Chúc mừng bạn đã đăng ký thành công!";
        // save account
        $add = $connect->prepare('INSERT INTO accounts (account_name, account_password, account_register_day) values (?,?,NOW())');
        $password = MD5($password);
        $data = array("$account", "$password");
        $add->execute($data);
        // save customer
        $account_code = $connect->prepare("SELECT account_code FROM accounts WHERE account_name = '$account'");
        $account_code->execute();
        $account_code->setFetchMode(PDO::FETCH_ASSOC);
        $row = $account_code->fetch();
        $customer_account_code = 0;
        if (isset($row['account_code'])) {
            $customer_account_code = $row['account_code'];
        }
        $addCustomer = $connect->prepare('INSERT INTO customers (customer_fullname, customer_birthday, customer_address,
        customer_phone,customer_email,Accounts_account_code) values (?,?,?,?,?,?)');
        $d = substr($birthday, 0, 2);
        $m = substr($birthday, 3, 2);
        $y = substr($birthday, 6, 4);
        $birthday = $m . "/" . $d . "/" . $y;
        $birthday = strtotime("$birthday");
        $birthday = date('Y-m-d', $birthday);
        $dataCustomer = array("$name", "$birthday", "$address", "$phone", "$email", "$customer_account_code");
        $addCustomer->execute($dataCustomer);
        $go_to_login = "block";
    }
}




