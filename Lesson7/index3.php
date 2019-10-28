<?php
    // Khởi động session
    // Nên đặt ở đầu file trước các mã lệnh php khác
    session_start();

    // Tạo session
    // Sử dụng biến toàn cục kiểu mảng $_SESSION
    $_SESSION['myName'] = 'LMC';
    $_SESSION['myAge'] = 20;
    $_SESSION['myWork'] = 'SV';
    // myName,myAge,myWork : name của session
    // LMC,20,SV :Giá trị của session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo Session</title>
</head>
<body>
    <h1>Demo Session</h1>
    <a href="index4.php"> Go to index4.php</a>
</body>
</html>