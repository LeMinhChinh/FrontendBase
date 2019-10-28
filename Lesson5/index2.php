<?php
// Nhận dữ liệu từ index.php truyền sang
// php cung cấp 1 biến toàn cục kiểu mảng $_GET
$name = $_GET['name'] ?? '';
//$name = isset($_GET['name']) ? $_GET['name'] : '';
$age = $_GET['age'] ?? 0;
$address = $_GET['add'] ?? '';
echo "my name :{$name} - my age : {$age} - my address : {$address}";