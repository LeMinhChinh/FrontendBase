<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo Upload File</title>
</head>
<body>
    <?php
        $state = $_GET['state'] ?? '';
        $nameFile = $_GET['file'] ?? '';
    ?>

    <?php if($state === 'fail'): ?>
        <h3 style="color:red;">File bị lỗi không thể upload</h3>
    <?php endif; ?>

    <?php if($state === 'errsize'): ?>
        <h3 style="color:red;">Lỗi kích thước file</h3>
    <?php endif; ?>

    <?php if($state === 'errtype'): ?>
        <h3 style="color:red;">Lỗi định dạng file</h3>
    <?php endif; ?>

    <?php if($state === 'error'): ?>
        <h3 style="color:red;">Có lỗi xảy ra khi upload</h3>
    <?php endif; ?>

    <?php if($state === 'success' && $nameFile): ?>
        <img src="uploads/images/<?= $nameFile; ?>" alt="">
    <?php endif; ?>

    <form action="server/upload.php" method="post" enctype="multipart/form-data">
        <label for="avatar">Mời chọn file</label>
        <input type="file" name="avatar" id="avatar">
        <br>
        <button type="submit" name="btnUpload"> Upload </button>
    </form>
</body>
</html>