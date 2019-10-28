<?php
if(isset($_POST['btnUpload'])){
    if(isset($_FILES['avatar'])){
        // Duyệt qua tất cả các file được upload lên
        $flagUpload = false;
        $viewFile = '';
        foreach ($_FILES['avatar']['error'] as $key => $file) {
            if($file == 0){
                // Thỏa mãn k file nào lỗi
                // Lấy ra tên từng file
                $nameFile = $_FILES['avatar']['name'][$key];
                $tmp_name = $_FILES['avatar']['tmp_name'][$key];

                // Upload file
                $flagUpload = move_uploaded_file($tmp_name,'../uploads/images/'.$nameFile);
                $viewFile .= ($viewFile == '') ? $nameFile : ',' .$nameFile;
                // if(!$flagUpload){
                //     break;
                // }else{
                //     break;
                // }
            }
        }
        if($flagUpload){
            header("Location:../form-upload-v2.php?state=success&name={$viewFile}");
        }else{
            header("Location:../form-upload-v2.php?state=fail");
        }
    }
}