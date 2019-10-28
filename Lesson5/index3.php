<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $state = $_GET['state'] ?? '';
        $n1 = $_GET['n1'] ?? '';
        $n2 = $_GET['n2'] ?? '';
        $kq = $_GET['result'] ?? '';
    ?>

    <?php if($state === 'fail'): ?>
    <h6 style="color:red">Vui lòng nhập dữ liệu là số</h6>
    <?php endif; ?>

    <form action="server/number.php" method="post">
    <label for="hs1">Number 1</label>
    <input type="text" id="hs1" name="number1" value="<?= $n1; ?>">
    <br><br>
    <label for="hs2">Number 2</label>
    <input type="text" id="hs2" name="number2" value="<?= $n2; ?>">
    <br><br>
    <button name="sum" type="submit">Sum</button>
    <br><br>
    </form>
    <?php if($state === 'ok'): ?>
    <h3>Kết Quả: <?= $kq; ?></h3>
    <?php endif; ?>
</body>
</html>