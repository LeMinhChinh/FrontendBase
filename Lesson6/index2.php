<?php
// hỗ trợ định dạng hiển thị ngoài trình duyệt
header('Content-Type: text/html; charset=utf-8');

// Được phép sử dụng luôn $a
require "index.php";
// include chạy và k báo lỗi
// require khi có lỗi thì dừng chương trình và báo lỗi

$b =20;
$sum = $a + $b;
// echo "<br/>";
// echo $sum;

// Điều hướng trang :Header
if($sum == 40){
    // header("Location:https://facebook.com");
}else{
    // header("Location:https:../Lesson5/index.php");
}

echo "hoc hành concac";
echo "<br/>";

$email = "stormshadow1110@gmail.com";
// Kiểm tra xem đây có đúng địnk dạng email k?
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    // FILTER_VALIDATE_EMAIL :giúp ktra định dạng email
    echo "Yes";
}else{
    echo "No";
}

$url = "http://facebook.com";
echo "<br/>";
// Kiểm tra có phải định dạng của URL k?

if(filter_var($url, FILTER_VALIDATE_URL)){
    // FILTER_VALIDATE_EMAIL :giúp ktra định dạng email
    echo "Ok";
}else{
    echo "Fail";
}

echo "<br/>";
$true = true;
// Kiểm tra xem biến này có phải là boolean hay k?
if(filter_var($true, FILTER_VALIDATE_BOOLEAN)){
    // FILTER_VALIDATE_EMAIL :giúp ktra định dạng email
    echo "Yes";
}else{
    echo "No";
}

$email2 = "chinh1011 ủl@gmail.com";
echo "<br/>";
// Loại bỏ những kí tự bất hợp pháp - k hợp lệ trong định dạng chuẩn của 1 email
$newEmail = filter_var($email2, FILTER_SANITIZE_EMAIL);
echo $newEmail;

echo "<br/>";
$url2 = "http://ả á ơ gunny.com";
$newUrl = filter_var($url2, FILTER_SANITIZE_URL);
echo $newUrl;

echo "<br/>";
$string = "<h1><i>Chính</i></h1>";
$newString = filter_var($string, FILTER_SANITIZE_STRING);
echo $newString;

echo "<br/>";
$number = "bac+123ád46as4d4as6d4sa64das";
$newNumber = filter_var($number, FILTER_SANITIZE_NUMBER_INT);
echo $newNumber;












