<?php

session_start();

$cart = $_SESSION['cart'] ?? [];


require '../View/showcart_view.php';