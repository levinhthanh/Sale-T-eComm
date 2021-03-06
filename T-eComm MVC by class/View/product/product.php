<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T - eComm for Watch</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/box_style.css">
    <link rel="stylesheet" href="../css/fontawesome/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/product/one_product.css">
</head>

<body>
    <div class="container">
        <div class="tele_mail" style="display: flex;">
            <div class="teleMail1">
                <i id="teleIcon" class="fas fa-phone-square-alt"></i>
                <label id="teleNum"> +84-914-800-124 </label>
            </div>
            <div class="teleMail2">
                <i id="letterIcon" class="fas fa-envelope-square"></i>
                <label id="email"> T-eCommforwatch@gmail.com </label>
            </div>
            <div class="helloUser">
                <label id="helloUser"><?= $hiUser ?></label>
            </div>
        </div>

        <div class="search" style="display: flex;">
            <div class="logo"><img id="logo" src="../images/logo/logo.png" alt="logo"></div>
            <form class="search_product" style="display: flex;" action="" method="post">
                <label id="show">Tất cả</label>
                <input id="inputProduct" type="text" name="search" placeholder="Từ khóa tìm kiếm...">
                <div id="btn-cover">
                    <img id="btnImg" src="../images/logo/search.png">
                    <input id="btn" type="submit" value="">
                </div>
            </form>
            <div class="others" style="display: flex;">
                <div class="logIn" style="display: <?= $log_in ?>">
                    <a href="index.php?control=login">
                        <i id="login" class="fas fa-user"></i>
                    </a><br>
                    <a href="index.php?control=login">Đăng nhập</a>
                </div>
                <div class="logOut" style="display: <?= $log_out ?>">
                    <a href="index.php?router=customer&control=logout">
                        <i id="logout" class="fas fa-sign-out-alt"></i>
                    </a><br>
                    <a href="index.php?router=customer&control=logout">Đăng xuất</a>
                </div>
                <div class="register" style="display: <?= $log_in ?>">
                    <a href="index.php?router=customer&control=register">
                        <i id="login" class="fas fa-key"></i>
                    </a><br>
                    <a href="index.php?router=customer&control=register">Đăng ký</a>
                </div>
                <div class="changePass" style="display: <?= $log_out ?>">
                    <a href="index.php?router=customer&control=change_password">
                        <i id="logout" class="fas fa-exchange-alt"></i>
                    </a><br>
                    <a href="index.php?router=customer&control=change_password">Đổi mật khẩu</a>
                </div>
                <div class="productsList">
                    <a href="index.php?router=customer&control=show_box">
                        <i id="box" class="fas fa-shopping-cart"></i>
                    </a><br>
                    <a href="index.php?router=customer&control=show_box">Giỏ hàng</a>
                </div>
            </div>
        </div>

        <div class="toolbar" style="display: flex;">
            <div class="home_page">
                <a href="index.php">
                    <i id="icon_homepage" class="fas fa-home"></i>
                </a>
                <a id="home_page" href="index.php">TRANG CHỦ</a>
            </div>
            <div class="product_list">
                <label id="label_tool">DANH MỤC SẢN PHẨM</label>
                <i id="icon_dropdown" class="fas fa-angle-down"></i>
            </div>
            <div class="product_new">
                <a id="label_tool" href="index.php?router=customer&control=new_product_list">SẢN PHẨM MỚI</a>
                <i id="icon_dropdown" class="fas fa-angle-down"></i>
            </div>
            <div class="product_hot">
                <a id="label_tool" href="index.php?router=customer&control=hot_product_list">SẢN PHẨM HOT</a>
                <i id="icon_dropdown" class="fas fa-angle-down"></i>
            </div>
            <div class="promotion">
                <label id="label_tool">KHUYẾN MÃI</label>
                <i id="icon_dropdown" class="fas fa-angle-down"></i>
            </div>
            <div class="connect">
                <label id="label_tool">LIÊN HỆ</label>
                <i id="icon_connect" class="far fa-handshake"></i>
            </div>
        </div>

        <div class="main">
            <div class="selections">
                <label id="lable_product_line">~ CÁC HÃNG ĐỒNG HỒ ~</label>
                <a id="watch_line" href="index.php?router=customer&control=watch_product&product_line=rado">Rado</a>
                <a id="watch_line" href="index.php?router=customer&control=watch_product&product_line=casio">Casio</a>
                <a id="watch_line" href="index.php?router=customer&control=watch_product&product_line=seiko">Seiko</a>
                <a id="watch_line" href="index.php?router=customer&control=watch_product&product_line=citizen">Citizen</a>
                <a id="watch_line" href="index.php?router=customer&control=watch_product&product_line=apple_watch">Apple watch</a>
                <a id="watch_line" href="index.php?router=customer&control=watch_product&product_line=bulova">Bulova</a>
                <a id="watch_line" href="index.php?router=customer&control=watch_product&product_line=candino">Candino</a>
                <a id="watch_line" href="index.php?router=customer&control=watch_product&product_line=claude_bernard">Claude Bernard</a>
                <a id="watch_line" href="index.php?router=customer&control=watch_product&product_line=fossil">Fossil</a>
                <a id="watch_line" href="index.php?router=customer&control=watch_product&product_line=orient">Orient</a>
                <a id="watch_line" href="index.php?router=customer&control=watch_product&product_line=movado">Movado</a>
                <a id="watch_line" href="index.php?router=customer&control=watch_product&product_line=police">Police</a>
                <a id="watch_line" href="index.php?router=customer&control=watch_product&product_line=teintop">Teintop</a>
                <a id="watch_line" href="index.php?router=customer&control=watch_product&product_line=rolex">Rolex</a>
                <a id="watch_line" href="index.php?router=customer&control=watch_product&product_line=omega">Omega</a>

            </div>
            <div class="show_products">
                <label id="lable_product_list" style="font-style: italic;">Chi tiết sản phẩm</label>
                <div class="one_product">
                    <div class="one_product_left">
                        <div class="slide_one_product">
                            <img class="img_slide" src="<?= $product_image1 ?>">
                            <img class="img_slide" src="<?= $product_image2 ?>">
                            <img class="img_slide" src="<?= $product_image3 ?>">
                            <button class="button_one_product_left" onclick="plusDivs(-1)">&#10094;</button>
                            <button class="button_one_product_right" onclick="plusDivs(1)">&#10095;</button>
                        </div>
                    </div>
                    <div class="one_product_right">
                        <label id="one_product_name"><?= $one_product_name ?></label>
                        <div class="one_product_price_sale">
                            <label id="price_sale_title">Giá sản phẩm:</label>
                            <label id="price_sale_title"><?= $one_product_price_sale ?>đ</label>
                        </div>
                        <div class="hot_new">
                            <img id="hot_lable" src="images/hot.gif" style="display: <?= $display_hot ?>;">
                            <img id="new_lable" src="images/new.gif" style="display: <?= $display_new ?>;">
                        </div>
                        <form action="index.php" method="post">
                            <input type="hidden" name="router" value="customer">
                            <input type="hidden" name="control" value="add_to_box">
                            <input type='hidden' name='product_code' value='<?= $product_code ?>'>
                            <button id="btn_buy_product">MUA NGAY</button>
                        </form>
                        <form action="" method="post">
                            <button id="btn_advisory">LIÊN HỆ ĐỂ ĐƯỢC TƯ VẤN</button>
                        </form>
                    </div>
                </div>
                <div class="comments">
                    <div class="comment_out">
                        <div id="comment_title">Đánh giá của khách hàng:</div>
                        <div class="content_comment">
                            <?= $show_comments ?>
                        </div>
                    </div>
                    <div class="comment_in">
                        <div id="comment_title">Bình luận của bạn:</div>
                        <form class="new_comment" action="index.php" method="post">
                            <input type="hidden" name="router" value="customer">
                            <input type="hidden" name="control" value="require_add_comment">
                            <input type="hidden" name="product" value="<?= $product_code ?>">
                            <textarea id="comment_content" name="comment_content" cols="50" rows="10" placeholder="Nội dung bình luận"></textarea><br>
                            <a style="display:<?= $login_to_comment ?>;" id="login_to_comment" href="index.php?control=login">Bạn cần đăng nhập để bình luận!</a>
                            <label style="display:<?= $comment_success ?>;" id="comment_success">Bạn đã bình luận thành công!</label>
                            <input id="button_add_comment" type="submit"><br>

                        </form>
                    </div>
                </div>
            </div>

            <div class="advertise">
                <label id="lable_product_box">~ GIỎ HÀNG ~</label>
                <div>
                    <label class="box_product_name" style="display: <?= $label_empty_display ?>;">Giỏ hàng rỗng !</label>
                    <?= $box_products_show ?>
                </div>
                <form action="index.php" method="get">
                    <input type="hidden" name="router" value="customer">
                    <input type="hidden" name="control" value="show_box">
                    <button id="btn_buy" style="display: <?= $btn_buy_display ?>;">MUA HÀNG</button>
                </form>
            </div>
        </div>
        <div class="footer">
            <div class="footer_left">
                <label id="label_footer">T-eComm FOR WATCH - ĐỒNG HỒ CHÍNH HÃNG</label>
                <label id="label_footer_content">Địa chỉ : 28 Nguyễn Tri Phương , Phú Hội , Huế</label>
                <div id="label_footer_content">
                    <label id="label_footer_left">Hotline : </label>
                    <label id="label_footer_right"> 0999.999.999 hoặc 0989.999.999</label>
                </div>
                <div id="label_footer_content">
                    <label id="label_footer_left">Email : </label>
                    <label id="label_footer_right"> T-eCommforwatch@gmail.com</label>
                </div>
                <label id="label_footer_bottom">T-eComm RẤT HÂN HẠNH KHI PHỤC VỤ QUÝ KHÁCH !</label>
            </div>
            <div class="footer_center">
                <label id="label_footer">CHÍNH SÁCH CHUNG</label>
                <label id="label_footer_content">- Sản phẩm chính hãng</label>
                <label id="label_footer_content">- Giao hàng nhanh chóng</label>
                <label id="label_footer_content">- Bảo hành uy tín</label>
                <label id="label_footer_content">- Tận tình phục vụ</label>
            </div>
            <div class="footer_right">
                <label id="label_footer">MẠNG XÃ HỘI</label>
                <div class="icon_footer">
                    <i id="icon_footer" class="fab fa-facebook-square"></i>
                    <i id="icon_footer" class="fab fa-youtube-square"></i>
                    <i id="icon_footer" class="fab fa-instagram-square"></i>
                    <i id="icon_footer" class="fab fa-twitter-square"></i>
                    <i id="icon_footer" class="fab fa-viber"></i>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
<script src="js/slide_show.js"></script>

</html>