<?php
echo "Hello world";
// file index.php được gọi là file root, default tự động chạy dp server apache của xampp cấu hình

echo "<br/>";
// Khai báo biến trong PHP
$myName = 'LMC';
echo $myName;
echo "<br/>";

// Biến k hợp lệ : $1Name = 10; $ age = 10 => sai cú pháp:$ và age k có khoảng trắng

// Các chuẩn style coding khai báo biến
// 1 - Chữ cái đầu viết thường, sau viết hoa $myAge = 20;
// 2 - Các chữ cái đầu tiên đều viết hoa $MyTown = "ND";
// 3 - Các chữ cái viết thường và cách nhau bởi dấu _ $my_name = "LMC";
// php phân biệt chữ hoa chữ thường
$money = 100;
$Money = 100;
// $money khác $Money

// Sự khác biệt giữa $ và $$
// $:Định nghĩa biến
// $$ : tham chiếu đến giá trj của 1 biến khác (k dùng để định nghĩa biến)
$a = 'Heo ML';
$b = 'a';
echo $$b;

// Khai báo hằng số
define('PI', 3.14);
const MY_PI = 3.14;
// Tất cả các từ viết hoa và cách nhau bởi dấu _
echo "<br/>";
echo PI . ' -- và -- ' .MY_PI;

// define và const :chỉ dùng const để định nghĩa hằng số trong class .còn define k dùng được
$n = 10;
$m = '20';
$t = true;
$u = [];
$v = null;
$k;
echo "<br/>";
echo gettype($n);
echo "<br/>";
echo gettype($m);
echo "<br/>";
echo gettype($t);
echo "<br/>";
echo gettype($u);
echo "<br/>";
echo gettype($v);

settype($m, 'integer'); //Chuyển đổi kiểu dữ liệu cho biến
echo "<br/>";
echo gettype($m);

$numberFloat = 20.14575; //Lấy phần nguyên
echo "<br/>";
echo intval($numberFloat);
echo "<br/>";
echo strval($numberFloat); //Lấy phần chuỗi

// Biến rỗng? =>Chỉ quan tâm đến giá trị, Bỏ qua kiểu dữ kiêu 0 = false = ' ' = null
echo "<br/>";
$val = '';
$val2 = false;
$val3 = 0;
$val4 = null;
// $val5 = true;
if(empty($val5)){
    echo 'Yes';
}else{
    echo 'No';
}

//Biến đã tồn tại?
echo "<br/>";
$checkNumber = null;
if(isset($checkNumber)){
    echo 'Yes';
}else{
    echo 'No';
}

echo "<br/>";
$idPost = '123456'; //chuỗi số (trong chuỗi chỉ chứa số)
$idPost2 = 10111998;
echo $idPost + $idPost2;
echo "<br/>";
if(is_numeric($idPost)){
    echo 'OK';
}else{
    echo 'Fail';
}

echo "<br/>";
if(is_int($idPost)){
    echo 'OK';
}else{
    echo 'Fail';
}

echo "<br/>";
$i = 10;
$j = 9;
$j = (($i-$j) % $i > $j) ? $i : $j;
echo $j;

echo "<br/>";
$i = $number ?? $j;
// $i = isset($number) ? $number : $j;
echo $i;

echo "<br/>";
$t1 = 100;
$t2 = 200;
$res = $t1<=>$t2;
echo $res;

echo "<br/>";
$t3 = (++$t1) - ($t2++) + ($t1--) + (++$t2) - (--$t2);
echo $t3;
?>