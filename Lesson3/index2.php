<?php
$students = [
    [
        'id' => 1,
        'name' => 'A',
        'age' => 1998,
        'add' => 'NĐ',
        'hb' => 2000000,
        'gender' => 1        
    ],
    [
        'id' => 2,
        'name' => 'B',
        'age' => 1999,
        'add' => 'NB',
        'hb' => 5000000,
        'gender' => 0
    ],
    [
        'id' => 3,
        'name' => 'C',
        'age' => 2000,
        'add' => 'HN',
        'hb' => 4000000,
        'gender' => 0
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .chan{
            background-color:green;
        }
        .le{
            background-color:grey;
        }
    </style>
</head>
<body>
    <h1>Thông tin sinh viên</h1>
    <br>
    <table width="100%" border="1" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>Mã SV</th>
                <th>Họ Tên</th>
                <th>Giới Tính</th>
                <th>Năm Sinh</th>
                <th>Địa Chỉ</th>
                <th>Học Bổng</th>
            </tr>
        </thead>
        <tbody>
            <?php $totalMoney=0 ?>
            <?php foreach ($students as $key => $value): ?>
            <tr class="<?= ($key %2 == 0) ? 'chan' : 'le'; ?>">   
                <td>
                    <?= $value['id']; ?> 
                    <!-- ?= = echo -->
                </td>
                <td>
                    <?php echo htmlentities($value['name']); ?>
                </td>
                <!-- <td>
                    <?= $value['gender'] == 1 ? 'Nam' : 'Nữ'; ?>
                </td> -->
                <?php if($value['gender'] ==1): ?>
                <td>Nam</td>
                <?php else: ?>
                <td>Nữ</td>
                <?php endif; ?>
                <td>
                    <?= $value['age']; ?>
                </td>
                <td>
                    <?= $value['add']; ?>
                </td>
                <td>
                    <?= number_format($value['hb']); ?>
                </td>
            </tr>
                <?php $totalMoney += $value['hb']; ?>
            <?php endforeach; ?>    
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5">Tổng học bổng</td>
                <td>
                    <?= number_format($totalMoney); ?>
                </td>
            </tr>
        </tfoot>
    </table>
</body>
</html>