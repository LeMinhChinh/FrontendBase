<?php
// Nơi đây tiếp nhận dữ liệu từ form
// xử í logic và hồi đáp lại cho index.php

// Kiểm tra xem người dùng đã bấm nút login chưa
// Kiểm tra xem có tồn tại Methods GET gửi data lên k?
if(isset($_GET['login'])){
    // echo "<pre>";
    // print_r($_GET);
    $user = $_GET['user'] ?? '';
    $pass = $_GET['pass'] ?? '';

    echo $user . ' --- ' . $pass;
}