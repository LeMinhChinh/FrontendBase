<?php

// Giúp báo lỗi khi khai báo cú pháp PHP7
declare(strict_types=1); 

echo "Hello Heo ML";
// Khi trong file chỉ chứa mã lệnh php thì không cần thẻ đóng

// Định nghĩa hàm trong php
// Định nghĩa hàm chạy được với mọi phiên bản php
// Cú pháp : function nameFunction(param1, param2, ...){}
function myFunction(){
    echo "<br/>";
    echo 'Hello';
}
myFunction();
echo "<br/>";

function sumNumber($n1, $n2){
    return $n1 + $n2;
}
$res = sumNumber(10,15);
echo $res;

// Biến toàn cục và biến cục bộ khi làm việc với hàm
$money = 100;
echo "<br/>";   
function getMoney(){
    global $money;
    // Muốn sử dụng biến toàn cục cần khai báo trong hàm
    $n = $money / 2;
    return $n;
}

$kq = getMoney();
echo $kq;

echo "<br/>";
// Tham chiếu - Tham trị
// 1 - Tham trị
// Biến truyền vào hàm đi ra khỏi hàm k bị thay đổi giá trị
$m = 10;
function testThamTri($m){
    ++$m;
    return $m;
}

echo $m;
echo "<br/>";
$k = testThamTri($m);
echo $k;
echo "<br/>";
echo $m;
// 2 - Tham chiếu
// Biến truyền vào hàm, đi ra hàm bị thay đổi
$n = 10;

function testThamChieu(&$n){
    ++$n;
    return $n;
}
echo "<br/>";
echo $n;
echo "<br/>";
$h = testThamChieu($n);
echo $h;
echo "<br/>";
echo $n;
echo "<br/>";

// Biến tĩnh(static) trong hàm
function testStatic (){
    // Khai báo 1 biến static
    static $count = 1;
    $count++;
    echo $count;
    
}

testStatic();
echo "<br/>";
testStatic();
echo "<br/>";
testStatic();
echo "<br/>";
testStatic();
echo "<br/>";

// Gọi hàm trong hàm
function test1($a){
    if($a%2==0){
        return true;
    }
    return false;
}

function tongSoChan($n,$m){
    $sum = 0;
    for($i=$n; $i <=$m; $i++){
        if(test1($i)){
            $sum+=$i;
        }       
    }
    return $sum;
}

echo "<br/>";
$gt = tongSoChan(1,100);
echo $gt;

/* Function PHP7 */
/* Định nghĩa hàm theo cú pháp của PHP7 */

function tinhTongHaiSo(int $a, int $b) : int{
    return $a + $b;
}

$sum = tinhTongHaiSo(10,20);
echo "<br/>";
echo $sum;

function tinhGiaiThua(int $q) : int{
    $gt = 1;
    for($i=1; $i<=$q; $i++){
        $gt *= $i;
    }
    return $gt;
}

$l = tinhGiaiThua(4);
echo "<br/>";
echo $l;

// Viêt hàm kiểm tra việc quy đổi hạnh kiểm của hs từ điểm trung bình
// Dữ liệu đầu vào là điểm của 3 môn T V A
// Tính điểm trung binhd
// Điểm trung bình dưới 5 là Yếu, 5-7 :Khá, >7 : Giỏi

function tinhDTB(float $t, float $v, float $a){
    $dtb = ($t +$v + $a)/3;
    if($dtb<5){
        echo "Yếu";
    }elseif($dtb>5 && $dtb<7){
        echo "Trung bình";
    }else{
        echo "Giỏi";
    }
}
echo "<br/>";
tinhDTB(7,8,6);


























