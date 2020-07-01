<?php


function register_process($name, $birthday, $address, $phone, $email, $account, $password, $passwordRepeat)
{
    $checkForm = true;
    $register_result = [];
    // check name  
    $checkName = "/^[^0-9\`\~\!\@\#\%\^\&\*\(\)\-\=\_\+\{\}\[\]\\\|\;\:\'\"\,\.\<\>\/\?]+$/";
    $nameError = "";
    if ($name === "") {
        $nameError = "* Tên chưa được nhập!";
        $checkForm = false;
    } else {
        if (!preg_match($checkName, $name)) {
            $nameError = "* $name là tên không hợp lệ!";
            $checkForm = false;
        }
    }
    // check birthday  
    $checkBirthday = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";
    $birthdayError = "";
    if ($birthday === "") {
        $birthdayError = "* Ngày sinh chưa được nhập!";
        $checkForm = false;
    } else {
        if (!preg_match($checkBirthday, $birthday)) {
            $birthdayError = "* $birthday là ngày không hợp lệ!";
            $checkForm = false;
        }
    }
    // check address
    $checkAddress = "/^[^\`\~\!\@\#\%\^\&\*\(\)\=\{\}\[\]\\\|\;\:\'\"\<\>\?]+$/";
    $addressError = "";
    if ($address === "") {
        $addressError = "* Địa chỉ chưa được nhập!";
        $checkForm = false;
    } else {
        if (!preg_match($checkAddress, $address)) {
            $addressError = "* $address là địa chỉ không hợp lệ!";
            $checkForm = false;
        }
    }
    // check phone
    $checkPhone = "/^0[0-9]{9}$/";
    $phoneError = "";
    if ($phone === "") {
        $phoneError = "* Số điện thoại chưa được nhập!";
        $checkForm = false;
    } else {
        if (!preg_match($checkPhone, $phone)) {
            $phoneError = "* $phone là số điện thoại không hợp lệ!";
            $checkForm = false;
        }
    }
    // check email
    $checkEmail = "/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/";
    $emailError = "";
    if ($email === "") {
        $emailError = "* Email chưa được nhập!";
        $checkForm = false;
    } else {
        if (!preg_match($checkEmail, $email)) {
            $emailError = "* $email là email không hợp lệ!";
            $checkForm = false;
        }
    }
    // check account
    $checkAccount = "/^[_a-z0-9]{6,20}$/";
    $accountError = "";
    if ($account === "") {
        $accountError = "* Tài khoản chưa được nhập!";
        $checkForm = false;
    } else {
        if (!preg_match($checkAccount, $account)) {
            $accountError = "* $account là tài khoản không hợp lệ!";
            $checkForm = false;
        } else {
            $checkOldAccount = new CRUD_Database;
            $checkOldAccount->connect();
            $row = $checkOldAccount->executeOne("SELECT account_name from accounts where account_name = '$account' ");
            if (isset($row['account_name'])) {
                $accountError = "* $account là tài khoản đã tồn tại!";
                $checkForm = false;
            }
        }
    }
    // check password
    $checkPassword = "/^[a-z0-9]{6,20}$/";
    $passwordError = "";
    if ($password === "") {
        $passwordError = "* Mật khẩu chưa được nhập!";
        $checkForm = false;
    } else {
        if (!preg_match($checkPassword, $password)) {
            $passwordError = "* $password là mật khẩu không hợp lệ!";
            $checkForm = false;
        }
    }
    // check password repeat
    $passwordRepeatError = "";
    if ($passwordRepeat === "") {
        $passwordRepeatError = "* Mật khẩu xác nhận chưa được nhập!";
        $checkForm = false;
    } else {
        if ($passwordRepeat !== $password) {
            if ($password !== "") {
                $passwordRepeatError = "* Mật khẩu xác nhận chưa đúng!";
                $checkForm = false;
            }
        }
    }
    if ($checkForm) {
         // save account
         $password = MD5($password);
         $data = array("$account", "$password");
         $sql = 'INSERT INTO accounts (account_name, account_password, account_register_day) values (?,?,NOW())';
         $addAccount = new CRUD_Database;
         $addAccount->connect();
         $addAccount->insertData($sql, $data);
         // save customer
         $account_code = new CRUD_Database;
         $account_code->connect();
         $row = $account_code->executeOne("SELECT account_code FROM accounts WHERE account_name = '$account'");
         $customer_account_code = 0;
         if (isset($row['account_code'])) {
             $customer_account_code = $row['account_code'];
         }
         $d = substr($birthday, 0, 2);
         $m = substr($birthday, 3, 2);
         $y = substr($birthday, 6, 4);
         $birthdayNew = $m . "/" . $d . "/" . $y;
         $birthdayNew = strtotime("$birthdayNew");
         $birthdayNew = date('Y-m-d', $birthdayNew);
         $dataCustomer = array("$name", "$birthdayNew", "$address", "$phone", "$email", "$customer_account_code");
         $sqlCustomer = 'INSERT INTO customers (customer_fullname, customer_birthday, customer_address,
         customer_phone,customer_email,Accounts_account_code) values (?,?,?,?,?,?)';
         $addCustomer = new CRUD_Database;
         $addCustomer->connect();
         $addCustomer->insertData($sqlCustomer, $dataCustomer);
         $register_result['result'] = "success";
         return $register_result;
    }
    else{
        $register_result['result'] = "error";
        $register_result['name'] = $nameError;
        $register_result['birthday'] = $birthdayError;
        $register_result['address'] = $addressError;
        $register_result['phone'] = $phoneError;
        $register_result['email'] = $emailError;
        $register_result['account'] = $accountError;
        $register_result['password'] = $passwordError;
        $register_result['passwordRepeat'] = $passwordRepeatError;
         return $register_result;
    }
}


