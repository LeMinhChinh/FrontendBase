<?php
    $PassWord = "Nc10111998";
    $btPassWord = '/^([A-Z]{1}[a-z]{1}[0-9]\d{8})$/';
    if(preg_match($btPassWord, $PassWord, $match)){
        echo "Mạnh";
    }else{
        echo "Yếu";
    }
?>
