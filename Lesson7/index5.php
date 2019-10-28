<?php
    session_start();
    
    // Xóa all
    // session_destroy();
    
    // Xóa từng session
    if(isset($_SESSION['myName'],$_SESSION['myAge'],$_SESSION['myWork'])){
        unset($_SESSION['myName']);
        unset($_SESSION['myAge']);
        unset($_SESSION['myWork']);
   } 
?>

<a href="index4.php"> Go to index4.php</a>