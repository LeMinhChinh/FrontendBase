<?php
session_start();

$id = $_POST['id'] ?? '';
$id = is_numeric($id) ? $id : 0;
// xóa

if(isset($_SESSION['cart'][$id])){
    unset($_SESSION['cart'][$id]);
    echo "Ok";
}else{
    echo "Error";
}