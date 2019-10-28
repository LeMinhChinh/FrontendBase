<?php

session_start();

$cart = $_SESSION['cart'];
$id = $_GET['id'];

unset($_SESSION['cart'][$id]);

header("Location:showcart.php");