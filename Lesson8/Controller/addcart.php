<?php
// Khởi động session

session_start();

// Nhúng model
require '../Model/cart_model.php';

$idPd = $_GET['id'] ?? '';
$idPd = is_numeric($idPd) ? $idPd : 0;

$inforPd = [];
$listPd = getAllDataProduct();
foreach ($listPd as $key => $value) {
    if($value['id'] == $idPd){
        $inforPd = $value;
    }
}

if($inforPd){
    // add giỏ hàng
    // Kiểm tra giỏ hàng đã tồn tại hay chưa
    if(isset($_SESSION['cart'])){
        // Đã tồn tại
        // check sản phẩm thêm mới đã tồn tại hay chưa
        if(isset($_SESSION['cart'][$idPd])){
            // Đã tồn tại sản phẩm trong giỏ hàng
            // Update số lượng
            $_SESSION['cart'][$idPd]['qty_pd'] += 1;
        }else{
            // Sản phẩm chưa có và thêm mới
            $_SESSION['cart'][$idPd]['name_pd'] = $inforPd['name'];
            $_SESSION['cart'][$idPd]['img_pd'] = $inforPd['image'];
            $_SESSION['cart'][$idPd]['price_pd'] = $inforPd['price'];    
            $_SESSION['cart'][$idPd]['qty_pd'] = 1;
            $_SESSION['cart'][$idPd]['id_pd'] = $idPd;
        }
    }else{
        // Chưa tồn tại
        // Tạo giỏ hành và thêm mới sản phẩm
        $_SESSION['cart'][$idPd]['name_pd'] = $inforPd['name'];
        $_SESSION['cart'][$idPd]['img_pd'] = $inforPd['image'];
        $_SESSION['cart'][$idPd]['price_pd'] = $inforPd['price'];    
        $_SESSION['cart'][$idPd]['qty_pd'] = 1;
        $_SESSION['cart'][$idPd]['id_pd'] = $idPd;   
    }

    header("Location:showcart.php");
}else{
    header("Location:../index.php");
}