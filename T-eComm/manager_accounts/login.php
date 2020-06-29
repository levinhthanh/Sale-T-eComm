<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            height: 90%;
            background-color: black;
        }

        .container {
            width: 100%;
            height: 100%;
            background-image: url('images/background_login.jpg');
        }

        .h1,
        .form {
            width: 27%;
            margin: 0 auto;
            background-image: url('images/background_login.jpg');
        }

        .form {
            background-image: url('images/bg-form.jpg');
            padding-top: 2vw;
        }

        h1 {
            color: white;
            text-align: center;
            padding: 2vw 0 1vw;
            font-size: 3vw;
        }

        #label {
            color: white;
            margin: 0 auto;
            text-align: center;
            font-size: 2vw;
        }

        .account,
        .password {
            width: 100%;
        }

        input {
            width: 60%;
            height: 1.5vw;
            margin: 0.8vw auto;
            padding: 0.5vw;
            padding-left: 3vw;
            font-size: 1vw;
        }

        input:focus,
        button:focus {
            outline: none;
        }

        .button {
            width: 75%;
            margin: 1vw auto;
        }

        button {
            width: 100%;
            height: 2.5vw;
            font-size: 1vw;
            font-weight: bold;
            color: white;
            background-color: darkgray;
        }

        .notRemember,
        .forgotPass {
            display: flex;
            margin: auto;
            padding-left: 6vw;
        }

        label,
        a {
            font-size: 1vw;
            margin: 0 0.3vw;
            color: white;
        }

        a {
            text-decoration: none;
        }

        .account,
        .password {
            position: relative;
        }

        #user_icon,
        #pass_icon {
            position: absolute;
            top: 1.5vw;
            left: 4.5vw;
        }

        .footer {
            width: 27%;
            margin: 1vw auto;
            text-align: right;
        }
        #errorLogin{
            color: red;
            margin: auto;
            padding-left: 6.2vw;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="h1">
            <h1>T - eComm LOGIN</h1>
        </div>
        <div class="form">
            <form action="login_process.php" method="post">
                <div class="lable">
                    <p id="label">Login Now</p>
                </div>
                <div class="account" style="display:flex">
                    <input id="user" name="account" type="text" placeholder="Account">
                    <i id="user_icon" class="fas fa-user"></i>
                </div>
                <div class="password" style="display:flex">
                    <input id="pass" name="password" type="password" placeholder="Password">
                    <i id="pass_icon" class="fas fa-lock"></i>
                </div>
                <div class="button">
                    <button>Login</button>
                </div>

                <?php
                $error = "";
                if(isset($_GET['error']))
                $error = $_GET['error'];
                ?>
                <label id="errorLogin"><?=$error?></label>

                <div class="notRemember">
                    <label style="color: white;">Not a member?</label>
                    <a href="register.php" style="color: orange;">Signup now</a>
                </div>
                <div class="forgotPass">
                    <label style="color: white;">Forgot password?</label>
                    <a href="forgot_password.php" style="color: orange;">Click here</a>
                </div>
                
                <br><br><br>
            </form>
        </div>
        <div class="footer">
            <label>T-eComm for sale 06-2020 $</label>
        </div>
    </div>
</body>

</html>