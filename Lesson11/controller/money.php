<?php
    require '../api/service.php';
    $money = $_POST['money'] ?? '';
    $data = getDataMoney($money);
    if($data){
        $time = isset($data['items'][0]) ? $data['items'][0]['v11'] : '';
        $title = $data['items'][1]['v11'] ?? '';

        $header = $data['items'][2] ?? [];

        $main = (isset($data['items'])) ? array_slice($data['items'], 3) : [];
        
        require '../view/money_view.php';
    }else{
        require '../view/404_view.php';
    }
?>