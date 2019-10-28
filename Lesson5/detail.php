<?php
    $product = [
        [
            'id' => 1,
            'price' => 1000,
            'image' => 'https://cdn.tgdd.vn/Products/Images/42/202268/TimerThumb/huawei-y9-prime-2019-hpbd.jpg',
            'qty' => 10,
            'name' => 'iphone 8'
        ],
        [
            'id' => 2,
            'price' => 1200,
            'image' => 'https://cdn.tgdd.vn/Products/Images/42/161554/samsung-galaxy-s10-white-400x400.jpg',
            'qty' => 9,
            'name' => 'iphone 8 plus'
        ],
        [
            'id' => 3,
            'price' => 1500,
            'image' => 'https://cdn.tgdd.vn/Products/Images/42/200438/TimerThumb/oppo-reno-hpbd.jpg',
            'qty' => 8,
            'name' => 'samsung A10'
        ]
    ];

    // Cần bắt id của phần tử trang index4.php
    $idPd = $_GET['id'] ?? '';
    $idPd = is_numeric($idPd) ? $idPd : 0;
    $inforPd = [];

    foreach ($product as $key => $value) {
        if($value['id'] == $idPd){
            $inforPd = $value;
        }
    }
    // echo "<pre>";
    // print_r($inforPd);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Product</title>
</head>
<body>
    <?php if($inforPd): ?>
        <div>
            <img src="<?= $inforPd['image']; ?>" alt="">
            <p>Name : <?= $inforPd['name']; ?></p>
            <p>Price: <?= number_format($inforPd['price']); ?></p>
        </div>
    <?php else: ?>
        <h3>Không tìm thấy sản phẩm</h3>
    <?php endif; ?>
</body>
</html>