<?php

// Thiết lập giờ mặc định
date_default_timezone_set('Asia/Ho_Chi_Minh');

// Xử lí ngày tháng với php

// 1 - In ngày tháng hiện tại
$date = date('d/m/Y H:i:s');
echo $date;

$d = date('d');
echo "<br/>";
echo $d;

$D = date('D');
echo "<br/>";
echo $D;

$m = date('m');
echo "<br/>";
echo $m;

$M = date('M');
echo "<br/>";
echo $M;

$y = date('y');
echo "<br/>";
echo $y;

$Y = date('Y');
echo "<br/>";
echo $Y;

// So sánh ngày tháng trong php(Chuyển đổi ngày tháng về kiểu INT)
$yesterday = '2019-08-10';
$today = '2019-08-11';

$timeYesterday = strtotime($yesterday);
$timeToday = strtotime($today);

echo "<br/>";
echo $timeYesterday;
echo "<br/>";
echo $timeToday;
echo "<br/>";

if($timeYesterday < $timeToday){
    echo "Yes";
}else{
    echo "No";
}

// 3 - Hàm lấy ra số giây tính từ 1-1-1970 cho đến hiện tại
$myTime = time();
echo "<br/>";
echo $myTime;

// 4 - Cộng trừ ngày tháng
$date_int = mktime(0, 0, 0, 11, (20 + 12), 2019);
echo "<br/>";
echo $date_int;
echo "<br/>";
// Chuyển đỏi số giây int về dạng ngày tháng
$convertDate = date('d/m/Y', $date_int);
echo $convertDate;

$mkTime = date('Y-m-d', strtotime('+3days')); //hours => days => weeks =>years
echo "<br/>";
echo $mkTime;