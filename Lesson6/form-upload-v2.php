<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo multi upload file</title>
</head>
<body>
    <?php
        $state = $_GET['state'] ?? '';
        $files = $_GET['name'] ?? '';
        $arrImg = [];
        if($state === 'success' && $files){
            $arrImg = explode(',', $files);
        }
    ?>
    
    <h1>Upload file</h1>
    <form action="server/upload-v2.php" method="post" enctype="multipart/form-data">
        <label for="avatar">Mời chọn file</label>
        <input type="file" id="avatar" name="avatar[]" multiple="multiple">
        <br><br>
        <button type="submit" name="btnUpload"> Upload </button>
        <br><br>
    </form>

    <?php foreach ($arrImg as $key => $img): ?>
        <img src="uploads/images/<?= $img; ?>" width="100" height="100" alt="">
    <?php endforeach; ?>
</body>
</html>