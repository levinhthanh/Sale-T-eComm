<?php
$errorAccount = "";
$errorEmail = "";
$account = "";
$email = "";
$announce = "";

if (!isset($connect)) {
    $connect = new PDO('mysql:dbname=db_sale_ecomm;host=localhost', 'vinhthanhle', 'thanh12345');
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $check = true;
    $account = $_POST['account'];
    $email = $_POST['email'];
    $checkAccount = $connect->prepare("SELECT account_name,account_code FROM accounts WHERE account_name='$account'");
    $checkAccount->setFetchMode(PDO::FETCH_ASSOC);
    $checkAccount->execute();
    if(!($rowAccount = $checkAccount->fetch())){
        $check = false;
        $errorAccount = "Tài khoản bạn nhập chưa đúng!";
    }
    else{
        $account_code = $rowAccount['account_code'];
        $checkEmail = $connect->prepare("SELECT customer_email FROM customers WHERE Accounts_account_code='$account_code'");
        $checkEmail->setFetchMode(PDO::FETCH_ASSOC);
        $checkEmail->execute();
        $rowEmail = $checkEmail->fetch();
        if($email !== $rowEmail['customer_email']){
            $check = false;
            $errorEmail = "Email bạn nhập chưa đúng!";
        }else{
            
            $announce = "Mời bạn vào email để xem mật khẩu!";
        }
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm lại mật khẩu</title>
    <style>
        form {
            width: 40vw;
            margin: auto;
            border: solid 0.1vw black;
            padding: 1vw;
            background-color: cornsilk;
        }

        fieldset {
            padding: 1vw;
            background-color: floralwhite;
        }

        input {
            margin: 0.5vw;
        }

        input:focus {
            outline: none;
        }
    </style>
</head>

<body>


    </form>
    <form action="" method="post">
        <fieldset>
            <legend>Xác nhận tài khoản:</legend>
            <label>Nhập tài khoản quên mật khẩu:</label><br>
            <input type="text" name="account" value="<?=$account?>"><br>
            <label><?= $errorAccount ?></label><br>
            <label>Nhập email của bạn</label><br>
            <input type="text" name="email" value="<?=$email?>"><br>
            <label><?= $errorEmail ?></label><br>
            <input type="submit" value="Nhận email"><br>
            <label><?= $announce ?></label>
        </fieldset>
    </form>
</body>

</html>