<?php

$data = [
    [
        'id' => 1,
        'name' => 'Kenny You',
        'image' => 'https://i.ytimg.com/vi/NixFuDsJO2s/maxresdefault.jpg'
    ],
    [
        'id' => 2,
        'name' => 'Black Bi',
        'image' => 'https://zmp3-photo-fbcrawler.zadn.vn/avatars/f/9/f99889b83e2d9170ac6f3477a2ae09fa_1427270870.jpg'
    ],
    [
        'id' => 3,
        'name' => 'G.D',
        'image' => 'http://static2.yan.vn/YanNews/2167221/201710/20171013-122655-f7e0ca6ac72c9ef2b1336eca66586757-big-bang-kpop.jpg'
    ],
    [
        'id' => 4,
        'name' => 'TOP',
        'image' => 'https://znews-photo.zadn.vn/w660/Uploaded/qfssu/2017_12_16/bigbangtop25.jpg'
    ]
];

// Nhận dữ liệu từ index5.php gửi lên
$keyword = $_POST['key'] ?? '';
$keyword = trim(strip_tags($keyword));

$infor = [];
foreach ($data as $key => $value) {
    if($value['name'] == $keyword || $value['id'] == $keyword){
        $infor = $value;
    }
}

// print_r($infor);

// Nhúng 1 file php khác vào đây
// Trả về cho phía index5.php cả 1 file html
require '../view/show.php';