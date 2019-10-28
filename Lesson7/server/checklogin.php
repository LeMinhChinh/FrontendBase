<?php
    session_start();
    
    $user = $_SESSION['user'] ?? '';

    if(empty($user)){
        // quay về trang login
        header("Location:login_view.php");
        die; //Dừng chương trình 
    }
?>