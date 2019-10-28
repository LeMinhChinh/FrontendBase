<?php
// Xử lí chuỗi trong PHP
$string = "Nghĩa Heo ML ";
$string2 = 'Là chuỗi trong PHP';

echo $string . $string2;
// echo : keyword not function
// 1 - Lồng chuỗi nháy đơn vào trong nháy đơn
// 2 - Lồng chuỗi nháy kép vào trong nháy kép
echo "<br/>";
$string3 = 'Bây giờ là \'8:02\' ngày 7/10/2019';
echo $string3;

echo "<br/>";
$string4 = "Bây giờ là \"8:02\" ngày 7/10/2019";
echo $string4;

echo "<br/>";
$string5 = "Bây giờ là '8:02' ngày 7/10/2019";
echo $string5;

echo "<br/>";
$string6 = 'Bây giờ là "8:02" ngày 7/10/2019';
echo $string6;

// Khi địng nghĩa chuỗi mà k có biến nằm bên trong thì dùng nháy đơn - ngược lại dùng nháy kép

$age = 20;
$string7 = "Tôi năm nay $age tuổi";  //có thể viết {$age}
echo "<br/>";
echo $string7;
echo "<br/>";


// Các hàm xử lí về chuỗi trong PHP
// 1 - Chuyển chuỗi về mảng
$fruits = 'apple, orange, mango';
$arrFruits = explode(',', $fruits);
print_r($arrFruits); 

// 2 - Chuyển mảng về chuỗi
$strFruits = implode('-' , $arrFruits);
echo "<br/>";
echo $strFruits;

// 3 - Đếm số kí tự của chuỗi
$countLenght = strlen($fruits);
echo "<br/>";
echo $countLenght;

$myString = "Lê Minh Chính";
// $countLenght2 = strlen($myString);
$countLenght2 = mb_strlen($myString);
echo "<br/>";
echo $countLenght2;

// 4 - Đếm số từ trong câu
$myString2 = "Lê Minh Chính";
echo "<br/>";
echo str_word_count($myString2);

// 5 - Lặp chuỗi
$myString3 = "Stranger Thing, Thing -";
echo "<br/>";
echo str_repeat($myString3, 3);

// 6 - Thay thế chuỗi
echo "<br/>";
echo str_replace('Thing', 'Things is best film', $myString3);

// 7 - Mã hóa chuỗi
$password = "123456";
echo "<br/>";
echo md5($password);

// 8 - Chuyển thực thể html sang chuỗi
$script = "<script>alert('yes')</script>";
$script2 = "<h1>alert('yes')</h1>";
echo "<br/>";
echo htmlentities($script);   
echo "<br/>";
echo htmlentities($script2);
//chuyển mã html thành kí tự
$script3 = htmlentities($script);


// 9 - chuyển kí tự lại thành các mã html
// echo html_entity_decode($script3);

// 10 - Giữ lại những thẻ cần thiết
$stripTags = "<h1><u><i>Stranger Thing</i></u></h1>";
echo "<br/>";
echo strip_tags($stripTags,'<h1>,<u>');

// 11 - Cắt chuỗi trong 1 chuỗi
$string8 = "GGD cung cap giao dien trang web";
$subStr = substr($string8,13,9);
echo "<br/>";
echo $subStr;
// 12 - Cắt từ vị trí đến sau
$strStr = strStr($string8, 'giao');
echo "<br/>";
echo $strStr;




















