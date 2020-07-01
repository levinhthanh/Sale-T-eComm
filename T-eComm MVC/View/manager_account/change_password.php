<?php
$old_password_error = "";
$new_password_error = "";
$confirm_password_error = "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đổi mật khẩu T-eComm</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1vw;
        }
        form{
            border: solid 0.1vw black;
            padding: 3vw;
            width: 30%;
            margin: auto;
            margin-top: 5vw;
            background-color: darkgray;
            box-shadow: blueviolet 0vw -0.5vw 4.5vw -1vw;
        }
        input{
            width: 50%;
            padding: 0.3vw;
        }
        #btn{
            width: 8vw;
            font-size: 0.7vw;
            font-weight: bold;
        }
        input:focus{
            outline: none;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <h1>Đổi mật khẩu:</h1>
        <label>Mật khẩu hiện tại</label><br>
        <input type="text" name="old_password"><br>
        <label class="error"><?= $old_password_error ?></label><br>

        <label>Mật khẩu mới</label><br>
        <input type="text" name="new_password"><br>
        <label class="error"><?= $new_password_error ?></label><br>

        <label>Nhập lại mật khẩu mới</label><br>
        <input type="text" name="confirm_password"><br>
        <label class="error"><?= $confirm_password_error ?></label><br>

        <input id="btn" type="submit" value="Đổi mật khẩu">
    </form>
</body>

</html>