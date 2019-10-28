<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Funny Birthday</title>
    <style>
        h3{
            color:red;
        }
    </style>
</head>
<body>
    <?php
        $state = $_GET['state'] ?? '';
        $day = $_GET['day'] ?? '';
        $date = $_GET['date'] ?? '';
    ?>
    <?php if($state === 'waiting'): ?>
        <h3>Waiting <?= $day ?> days,please!!!</h3>
    <?php elseif($state === 'HPBD'): ?>
        <h3>Happy Birthday To You!!!</h3>
    <?php elseif($state === 'pass'): ?>
        <h3>Your birthday is over!!!</h3>
    <?php endif; ?>
    <form action="server/CheckBirthday.php" method="post">
        <label for="birthday">Nhập ngày sinh của bạn</label>
        <input type="date" name="birthday" id="birthday" value="<?= $date ?>">
        <br><br>
        <button type="submit" name="btnCheck"> Checking </button>
    </form>
</body>
</html>
