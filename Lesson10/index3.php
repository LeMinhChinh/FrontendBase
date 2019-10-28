<?php
// Biểu thức chính quy - Regular Expression
// là 1 chuỗi
// Chuỗi : mô tả tập luật - bộ quy tắc sử dụng cho công việc nào đó
// tập luật - bộ quy tắc : có cách quy định hay cú pháp riêng

$btcq = '/^[a-z]{3}$/'; // '/^a$/' :tuyệt đối
$input = 'abc';
// kiểm tra input có khớp hay tuân thủ hay k
// if(preg_match($btcq, $input)){
//     echo "Yes";
// }else{
//     echo "No";
// }

$btcq2 = '/^[1-9][0-9][0,5]$/';
// $number = '123';
// if(preg_match($btcq2, $number)){
//     echo "Yes";
// }else{
//     echo "No";
// }

$btcq3 = '/[1-9][0,2,4,6,8][1,3,5,7,9][0,5]\9/';
// 1,3,5,7,9 = ^0,2,4,6,8
$number1 = '123';
// if(preg_match($btcq3, $number1)){
//     echo "Yes";
// }else{
//     echo "No";
// }

// Viết biếu thức chính quy kiểm tra sdt 10 số của nhà mạng viettel
$phone = '0389854365';
// 096 - 097 - 098
// 032 - 039
$btcpPhone = '/^09[6-8]\d{7}$|^03[2-9]\d{7}$/';
if(preg_match($btcpPhone, $phone, $match)){
    echo "<pre>";
    print_r($match);
}else{
    echo "Err";
}

// Viết biểu thức chính quy kiểm tra định dạng ngày tháng : dd/mm/yyyy
$date = "29/02/2020";
$btcpDate = '/^(0[1-9]|1\d|2\d|3[0,1])\/(0[1-9]|1[1-2])\/([1-9]\d{3})$/';
if(preg_match($btcpDate, $date, $match)){
    if($match){
        // Kiểm tra tháng 2
        $month = $match[2] ?? '';
        $month = (int) $month;
        if($month ===2 ){
            $day = $match[1] ?? '';
            $day = (int) $day;
            if($day >=1 && $day <=28){
                echo "Ok";
            }else if($day === 29){
                //Đi kiểm tra năm
                $year = $match[3] ?? '';
                $year = (int) $year;
                if($year % 400 ==0){
                    echo "Yes";
                }else if($year % 4 == 0 && $year % 100 != 0){
                    echo "Yes";
                }else{
                    echo "No";
                }
            }else{
                echo "Fail";
            }
        }
    }
}else{
    echo "Err";
}
echo "</br>";
// Biểu thức chính quy kiểm tra biển số xe - địa điểm
$vehicle = '18F1-41838';
$btcpVehicle = '/^(18)(F[1]|G[1]|B[1])-(\d{5})$/';
if(preg_match($btcpVehicle, $vehicle, $match)){
    echo "<pre>";
    print_r($match);
    if($match){
        $name = $match[2];
        switch ($name) {
            case 'F1':
                echo "Xuân Trường";
                break;
            case 'G1':
                echo "Hải Hậu";
                break;
            case 'B1':
                echo "TP Nam Định";
                break;
            default:
                # code...
                break;
        }
    }
}else{
    echo "Err";
}

// Viết BTCQ Kiểm tra mật khẩu người dùng
// Kiểm tra độ mạnh yếu của mật khẩu
// Mạnh : 8 kí tự trở lên, có ít nhất 1 chữ thường, 1 chữ hoa, 1 số