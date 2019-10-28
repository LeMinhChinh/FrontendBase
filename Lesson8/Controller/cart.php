<?php

// Nhúng model database
require 'Model/cart_model.php';

$product = getAllDataProduct();

// Nhúng view - hiển thị dữ liểu

require 'View/cart_view.php';