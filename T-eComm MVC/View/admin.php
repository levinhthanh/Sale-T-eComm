<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-size: 1.5vw;
            font-family: 'Lato', sans-serif;
            width: 100vw;
            /* background-image: url('images/bg/background_admin.jpg'); */
    
        }
     
        

        .container{
            background-color: lightgrey;
            padding: 1vw;
        }
        h3 {
            color: blue;
            padding: 0.2vw;
            margin: 0.2vw;
        }

        a {
            text-decoration: none;
            color: darkorange;
            padding: 0.2vw;
            margin: 0.2vw;
            font-size: 1.1vw;
        }

        .selections {
            width: 20vw;
            padding: 1vw;
            margin-right: 1vw ;
            align-content: center;
            background-color: white;
        }

        .display {
            width: 80vw;
            background-color: white;
            padding: 1vw;
        }
        .header{
            width: 100vw;
        }
        img{
            padding: 1vw;
            margin-left: 7vw;
            width: 7vw;
        }
        h1{
            padding: 1vw;
            margin-left: 7vw;
            color: gold;
            text-align: center;
        }
        table{
            border: solid 1px black;
        }
        td,th{
            margin: 0.4vw;
            border: solid 1px black;
            padding: 0.2vw 0.5vw;
            font-size: 1vw;
        }
    </style>
</head>

<body>
    <div class="header" style="display: flex;">
    <div class="img">
    <img src="images/logo/logo.png" alt="logo">
    </div>
    <div class="title">
    <h1>Chào mừng Admin trang T-eComm for Watch:</h1>
    </div>
  
    </div>
    <div class="container" style="display: flex">
        <div class="selections">
                <h3>Quản lý nhân viên</h3>
                <a href="index.php?router=admin&control=add_employee">Thêm nhân viên</a><br>
                <a href="">Xóa nhân viên</a><br>
                <a href="">Chỉnh sửa nhân viên</a><br>
                <h3>Quản lý sản phẩm</h3>
                <a href="">Thêm sản phẩm</a><br>
                <a href="">Xóa sản phẩm</a><br>
                <a href="">Chỉnh sửa sản phẩm</a><br>
                <h3>Quản lý tài khoản</h3>
                <a href="">Thêm tài khoản</a><br>
                <a href="">Xóa tài khoản</a><br>
                <a href="">Chỉnh sửa tài khoản</a><br>
        </div>
        <div class="display">
            <div style="display: <?=$display?>;"><?=$table?></div>
        </div>
    </div>
</body>

</html>