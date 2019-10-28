<?php
    // Nhận cookie: lấy ra giá trị của cookie bên index.php
    $myCookie = $_COOKIE['lphp1903e'] ?? '';
    // $myCookie = isset($_COOKIE['lphp1903e']) ? $_COOKIE['lphp1903e'] : '';
    // Để lấy ra giá trị của cookie -php cung cấp 1 biến toàn cục kiểu mảng là $_COOKIE
    // Key truyền vào biến $_COOKIE chính là tên cookie được tạo ra
    // Luôn luôn ktra cookie có tồn tại hay k thì mới lấy giá trị

    // Xóa cookie
    setcookie('lphp1903e','',time()-300,'/','',0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo Cookie</title>
</head>
<body>
    <h2>cookie : <?= $myCookie; ?></h2>
</body>
</html>