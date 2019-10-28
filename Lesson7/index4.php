<?php 
    session_start();
    // Phải khởi động session
    $name = $_SESSION['myName'] ?? '';
    $age = $_SESSION['myAge'] ?? '';
    $work = $_SESSION['myWork'] ?? '';
    // Lấy giá trị của session thì sử dụng biến toàn cục $_SESSION
    // Key truyền vào chính là key bên phía session được tạo ra ban đầu
    // Luôn luôn có thao tác kiểm tra session có tồn tai hay k?
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
    <p>Name : <?= $name; ?></p>
    <p>Age : <?= $age; ?></p>
    <p>Work : <?= $work; ?></p>
    <br><br>
    <a href="index5.php">Xóa session</a>
</body>
</html>