<?php
// Kiểm tra xem người dùng đã upload file hay chưa?
// xem có method post gửi lên chưa
define('UPLOAD_PATH', '../uploads/images/');
if(isset($_POST['btnUpload'])){
    // Kiếm tra xem người có chọn file hay k?
    if(isset($_FILES['avatar'])){
        // Kiểm tra thông tin file
        // $_FILES : là biến toàn cục lưu trữ thông tin về file gửi lên server - biến kiểu mảng
        
        // Kiểm tra file có lỗi hay k
        if($_FILES['avatar']['error'] == 0){
            // file k có lỗi
            // Lấy tên file
            $nameFile = $_FILES['avatar']['name'];
            // Đường dẫn tạm thời đang chứa file
            $tmp = $_FILES['avatar']['tmp_name'];
            // Upload file
            // Kiểm tra ảnh có định dạng gì :gif, png, jpg, jepg và ảnh k quá 3MB
            $typeFile = $_FILES['avatar']['type'];
            $sizeFile = $_FILES['avatar']['size'];
            if(checkTypeFile($typeFile)){
                if(checkSizeFile($sizeFile)){
                    $up = move_uploaded_file($tmp, UPLOAD_PATH . $nameFile);
                    if($up){
                        header("Location:../form-upload.php?state=success&file={$nameFile}");
                    }else{
                        header("Location:../form-upload.php?state=error");
                    }
                }else{
                    header("Location:../form-upload.php?state=errsize");
                }     
            }else{
                header("Location:../form-upload.php?state=errtype");
            }    
        }else{
            header("Location:../form-upload.php?state=fail");
        }
    }
}

function checkTypeFile($typeFile){
    $arrImgAllow = ['image/png','image/gif','image/jpg','image/jpeg'];
    if(in_array($typeFile, $arrImgAllow)){
        return true;
    }
    return false;
}

function checkSizeFile($sizeFile){
    // $sizeFile : byte
    $maxSize = 3*1024*1024;
    if($sizeFile < $maxSize){
        return true;
    }
    return false;
}