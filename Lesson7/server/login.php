<?php
    session_start();
    if(isset($_POST['btnLogin'])){
        $user = $_POST['user'] ?? '';
        $user = strip_tags($user);

        $pass = $_POST['pass'] ?? '';
        $pass = strip_tags($pass);

        if($pass === '123' & $user === 'admin'){
            // đăng nhập thành công
            // Chuyển sang trang home.php
            // Lưu lại session
            $_SESSION['user'] = $user;
            header("Location:../home.php");
        }else{
            // Đăng nhập k thành công
            header("Location:../login_view.php?state=fail");
        }
    }
?>