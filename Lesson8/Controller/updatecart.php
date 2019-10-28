<?php
session_start();

$id = $_POST['key'] ? $id = $_POST['key']: "";
$qty = $_POST['qty'] ?? "";
unset($_SESSION['cart'][$id]['qty_pd']);
$_SESSION['cart'][$id]['qty_pd'] = $qty;