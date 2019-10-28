<?php
// Mảng trong PHP
// 1 - Cú pháp
$fruits = array(); //Mảng rỗng
$fruits2 = []; //Mảng rỗng
$arr = array('a','b',1,2);
$arr2 = ['a','b',1,2];
// Hiển thị giá trị  và chỉ số phần tử của mảng
echo "<pre>";
print_r($arr2);
// mảng arr và arr2 là mảng tuần tự(mảng đơn)
// key(chỉ số của phần tử) được tự đông tạo ra và sắp xếp tăng dần

$animal = [
    'name' => 'Tom',
    'age' => 2,
    'color' => 'grey'
];
// Mảng đơn - mảng k tuần tự
// key (chỉ số của phần tử) không được sắp xếp theo trình tự
echo "<pre>";
print_r($animal);
// "<pre>" : giúp in mảng theo kiểu cây thư mục

// Mảng đa chiều
$student = [
    [1,2,3,4],
    ['a','b','c'],
    ['name' => 'Chinh', 'age' => 20]
];
echo "<pre>";
print_r($student);

// Truy cập vào 1 phần tử trong mảng

// Cú pháp: nameArray[nameKey];
echo $arr[2];
echo "<br/>";
echo $student[2]['name'];
// nameKey kp số thì phải dùng dấu ''

// Duyệt tất cả các phần tử
$person = [
    [
        'id' => 1,
        'name' => 'Chính',
        'addres' => 'NĐ',
        'age' => 20
    ],
    [
        'id' => 2,
        'name' => 'Nghĩa',
        'addres' => 'NB',
        'age' => 20
    ],
    [
        'id' => 3,
        'name' => 'Kiên',
        'addres' => 'HN',
        'age' => 20
    ]
];

foreach ($person as $key => $item) {
    echo "<br/>";
    echo $key . '---' . $item['id'];
    echo "<br/>";
}

$numberArr = [1,2,3,4,5,6,7];
foreach ($numberArr as $key => $value) {
    echo $value;
    echo "<br/>";
}

// Lưu ý với mảng
// 1 - Gán thêm phần tử vào mảng
$football = [];
$football['name'] = 'Ronaldo';
$football['club'] = 'Juve';
$football['danh hiệu'] = [
    'quả bóng vàng',
    'thánh tạ'
];
echo "<pre>";
print_r($football);

// 2 - Xử lí các vòng lặp lồng nhau và gán giá trị vào mảng trong vòng lặp
$rooms = [
    [
        'id_p' => 100,
        'name_p' => 'Tổ chức',
        'tp' => 'Nguyễn Văn Tấn',
        'tl' => '18-8-2017'
    ],
    [
        'id_p' => 101,
        'name_p' => 'Nhân sự',
        'tp' => 'Nguyễn Văn Xuân',
        'tl' => '20-8-2017'
    ],
    [
        'id_p' => 102,
        'name_p' => 'Kế toán',
        'tp' => 'Nguyễn Thanh Hải',
        'tl' => '20-8-2017'
    ]
];

$staffs = [
    [
        'id_st' => 1001,
        'name_st' => 'A',
        'phone_st' => 0123,
        'luong_st' => 2000000,
        'id_p' => 100,
        'id_r' => 3
    ],
    [
        'id_st' => 1002,
        'name_st' => 'B',
        'phone_st' => 45566,
        'luong_st' => 100000000,
        'id_p' => 101,
        'id_r' => 1
    ],
    [
        'id_st' => 1003,
        'name_st' => 'C',
        'phone_st' => 8946,
        'luong_st' => 10000000,
        'id_p' => 102,
        'id_r' => 2
    ],
    [
        'id_st' => 1004,
        'name_st' => 'D',
        'phone_st' => 45465,
        'luong_st' => 5000000,
        'id_p' => 101,
        'id_r' => 3 
    ]
];

$ranks = [
    [
        'id_r' => 1,
        'name_r' => 'Giám đốc'
    ],
    [
        'id_r' => 2,
        'name_r' => 'Trưởng phòng'
    ],
    [
        'id_r' => 3,
        'name_r' => 'Nhân viên'
    ]
];

// Gán giá trị tên phòng sang mảng nhân viên 1 cách tương ứng với từng nhân viên đó
foreach ($staffs as $key => $staff) {
    foreach ($rooms as $key2 => $room) {
        // Kiểm tra mã phòng trong mảng staffs có bằng mã phòng trong mảng rooms không?
        if($staff['id_p'] == $room['id_p']){
            // Lấy tên phòng từ mảng rooms gán sang mảng staffs
            // tạo 1 key trong mảng staffs để lưu trừ
            $staffs[$key]['name_room'] = $room['name_p'];
        }       
    }
}

foreach ($staffs as $key => $staff) {
    foreach ($ranks as $key3 => $rank) {
        if($staff['id_r'] == $rank['id_r']){
            $staffs[$key]['name_rank'] = $rank['name_r'];
        }
    }
}

echo "<pre>";
print_r($staffs);


$myNumber = [1,2,3,4,5,6,7,8,9,22,23,25,38];
// Viết hàm xử lí lấy ra tất cả các số chẵn
function sochan($arrnb){
    $addNumber = [];
    foreach ($arrnb as $key => $number) {
        if($number % 2 == 0){
            $addNumber[] = $number;
        }
    }
    return $addNumber;
};

$gt = sochan($myNumber);
print_r($gt);

// Viêt hàm xử lí xóa hết các số lẻ trong mảng trên
// Kết quả trả về là mảng chứa toàn số chẵn

function mangchan(&$arr){
    foreach ($arr as $key => $number) {
        if($number % 2 != 0){
            unset($arr[$key]);
        }
    }
    return $arr;
};

// echo "<pre>";
// print_r($myNumber);
$rs = mangchan($myNumber);
print_r($rs);











