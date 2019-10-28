<?php
// Kiểm tra xem người dùng bấm login chưa
// (Có tồn tai method post truyền sang hay k)
/*
if(isset($_POST['login'])){
    // $_POST là biến toàn cục kiểu mảng để nhận dữ liệu bằng method POST
    // echo "<pre>";
    // print_r($_POST);

    $user = $_GET['user'] ?? '';
    $pass = $_GET['pass'] ?? '';

    echo $user . ' --- ' . $pass;
}
*/
if(isset($_REQUEST['login'])){
    // echo "<pre>";
    // print_r($_POST);

    $user = $_REQUEST['user'] ?? '';
    $pass = $_REQUEST['pass'] ?? '';

    echo $user . ' --- ' . $pass;
}