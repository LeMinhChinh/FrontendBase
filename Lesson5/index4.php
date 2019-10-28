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
?>


<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>
    </head>
    <body>
        <table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center">
            <thead>
                <tr>
                    <th>MSP</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>QTY</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($product as $key => $item): ?>
                <tr>
                    <td>
                        <?= $item['id']; ?>
                    </td>
                    <td>
                        <a href="detail.php?id=<?= $item['id']; ?>">
                            <img src="<?= $item['image']; ?>" width="80" height="80" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="detail.php?id=<?= $item['id']; ?>">
                            <?= $item['name']; ?>
                        </a>
                    </td>
                    <td>
                        <?= number_format($item['price']); ?>
                    </td>
                    <td>
                        <?= $item['qty']; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>
