<?php
    if(file_exists('Controller/cart.php')){
        require 'Controller/cart.php';
    }else{
        die('Website đang tạm dừng');
    }