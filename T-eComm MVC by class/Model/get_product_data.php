<?php

//----------------------------------------------------------------------------------------------------------------------
// Lấy dữ liệu từ database để hiển thị:
//---------------Product_show-----------------
$product_show_data = new CRUD_Database;
$product_show_data->connect();
$data_products = $product_show_data->executeAll("SELECT * FROM product_info_show");
$i = 0;
$product_code = [];
$product_name = [];
$product_images = [];
$product_price_sale = [];
$is_hot = [];
$is_new = [];

$product = [];
foreach ($data_products as $key => $value) {
    $product_code[$i] = $value['product_code'];
    $product_name[$i] = $value['product_name'];
    $product_images[$i] = $value['product_images'];
    $product_image[$i] = explode(",", $product_images[$i]);
    $product_price_sale[$i] = $value['product_price_sale'];
    $is_hot[$i] = $value['is_hot'];
    $is_new[$i] = $value['is_new'];
    $product[$i] = "<form action='index.php' method='post'>
    <input type='hidden' name='router' value='customer'>
    <input type='hidden' name='control' value='add_to_box'>
    <input type='hidden' name='product_code' value=".$product_code[$i].">
    <img id='image_product_show' src=".$product_image[$i][0].">
    <a id='name_product_show' href='index.php?router=customer&control=watch_product&product=". $product_code[$i]."'>".$product_name[$i]."</a>
    <label id='price_product_show'>".$product_price_sale[$i]."đ</label>
    <button id='button_product_show'>Thêm vào giỏ hàng</button></form>";
    $i++;
}




?>