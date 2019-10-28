<?php
// Định nghĩa mảng dữ liệu

function getAllDataProduct(){
    $data = [
        [
            'id' => 1,
            'name' => 'Iphone 6',
            'price' => 5000000,
            'image' => 'https://cdn.tgdd.vn/Products/Images/42/114115/iphone-x-64gb-21-200x200.jpg',
            'qty' => 6
        ],
        [
            'id' => 2,
            'name' => 'Iphone 7',
            'price' => 7000000,
            'image' => 'https://cdn.tgdd.vn/Products/Images/42/78124/iphone-7-plus-32gb-gold-200x200.jpg',
            'qty' => 7
        ],
        [
            'id' => 3,
            'name' => 'Sam sung A20',
            'price' => 4000000,
            'image' => 'https://cdn.tgdd.vn/Products/Images/42/200331/samsung-galaxy-a20e-1-200x200.jpg',
            'qty' => 5
        ],
        [
            'id' => 4,
            'name' => 'Sam sung A50',
            'price' => 5500000,
            'image' => 'https://cdn.tgdd.vn/Products/Images/42/200294/samsung-galaxy-a50-128gb-blue-200x200.jpg',
            'qty' => 6
        ]
    ];
    return $data;
}