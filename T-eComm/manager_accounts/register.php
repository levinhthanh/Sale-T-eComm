<?php
include('save_to_database.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký tài khoản</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        h1 {
            color: white;
            text-align: center;
        }
        .div-form {
            margin-top: 2vw;
            margin-bottom: 5vw;
            margin-left: 30%;
            padding: 0.5%;
            background-color: black;
            width: 40%;
            box-shadow: dimgray 0.3vw 0.3vw;
        }
        form {
            padding: 1vw 3vw;
            background-color: lightsteelblue;
        }
        input {
            width: 100%;
            padding: 1%;
            background-color: white;
        }
        label {
            margin: 1%;
            color: black;
        }
        input:focus,
        input:hover {
            outline: none;
            cursor: pointer;
        }
        #btn {
            box-shadow: darkorange 1px 1px;
            font-weight: bold;
            margin-bottom: 2vw;
            width: 103%;
        }
        #btn:hover {
            background-color: black;
            color: white;
            cursor: pointer;
        }
        .error {
            color: red;
            font-size: 90%;
        }
        #registerSuccess{
            color: darkred;
            font-weight: bold;
        }
        a{
            text-decoration: none;
            color: darkorange;
            margin: 1%;
        }
    </style>
</head>

<body>
    <div class="div-form">
        <h1>Đăng ký tài khoản</h1>
        <form action="" method="post">
            <label id="registerSuccess"><?=$registerSuccess?></label>
            <a href="login.php" style="display:<?=$go_to_login?>;">Đến trang đăng nhập</a>
            <br>
            <label>Tên</label><br>
            <input type="text" name="name" value="<?= $nameInput ?>"><br>
            <label class="error"><?= $nameError ?></label><br>

            <label>Ngày sinh</label><br>
            <input type="text" name="birthday" value="<?= $birthdayInput ?>"><br>
            <label class="error"><?= $birthdayError ?></label><br>

            <label>Địa chỉ</label><br>
            <input type="text" name="address" value="<?= $addressInput ?>"><br>
            <label class="error"><?= $addressError ?></label><br>

            <label>Điện thoại</label><br>
            <input type="text" name="phone" value="<?= $phoneInput ?>"><br>
            <label class="error"><?= $phoneError ?></label><br>

            <label>Email</label><br>
            <input type="text" name="email" value="<?= $emailInput ?>"><br>
            <label class="error"><?= $emailError ?></label><br>

            <label>Tên tài khoản</label><br>
            <input type="text" name="account" value="<?= $accountInput ?>"><br>
            <label class="error"><?= $accountError ?></label><br>

            <label>Mật khẩu</label><br>
            <input type="password" name="password" value="<?= $passwordInput ?>"><br>
            <label class="error"><?= $passwordError ?></label><br>

            <label>Nhập lại mật khẩu</label><br>
            <input type="password" name="passwordRepeat" value="<?= $passwordRepeatInput ?>"><br>
            <label class="error"><?= $passwordRepeatError ?></label><br>

            <input id="btn" type="submit" value="Đăng ký"><br>
        </form>
    </div>
</body>

</html>