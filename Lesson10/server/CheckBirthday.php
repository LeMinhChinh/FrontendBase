<?php

if(isset($_POST['btnCheck'])){
    $birthday = $_POST['birthday'] ?? '';
    
    // Cần kiểm tra ngày sinh nhật với ngày hiện tại xem có chênh lệch như thế nào
    $arrBirthday = explode('-', $birthday);
    $monthBirthday = $arrBirthday[1] ?? '';
    $dateBirthday = $arrBirthday[2] ?? '';
    $currentYear = date('Y');
    $strBirthday = $currentYear . '-' . $monthBirthday . '-' .$dateBirthday;
    if(checkdate($monthBirthday, $dateBirthday,$currentYear)){
        // So sánh với ngày hiện tại
        $today = date('Y-m-d');
        $timeBirthday = strtotime($strBirthday);
        $timeToday = strtotime($today);
        
        if($timeBirthday > $timeToday){
            // Chưa tới-cần tính ra số ngày
            $ranTime = $timeBirthday - $timeToday;
            // ceil : hàm làm tròn số
            $day = ceil($ranTime/86400);
            header("Location:../index2.php?state=waiting&day={$day}&date={$strBirthday}");           
        }elseif($timeBirthday == $timeToday) {
            header("Location:../index2.php?state=HPBD&date={$strBirthday}");
        }else{
            header("Location:../index2.php?state=pass&date={$strBirthday}");
        }
    }else{
        header("Location:../index2.php?state=fail");
    }
}