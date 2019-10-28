<?php
    function getDataMoney($money){
        // Sử dụng CURL lấy dữ liệu từ api
        $urlApi = "https://tygia.com/tygia-all.json?currency={$money}";
        // Khởi tạo CURL
        $ch = curl_init();

        // Cấu hình các thông số

        // Giúp truy cập vào api
        curl_setopt($ch, CURLOPT_URL, $urlApi);
        
        // Không hiển thị kết quả ngay khi thiết lập vào api mà đợi excec CURL mới hiển thị kqua về
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        // set thời gian tối đa để gửi request lên api - đợi kqua trả về
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);

        // thực thi
        $result = curl_exec($ch);

        // Đóng - ngắt CURL
        curl_close($ch);

        // Lưu ý:
        // Vì api đang trả về dữ liệu theo kiểu chuỗi JSON - convert về array php để làm việc
        $data = json_decode($result, true);
        return $data;
    }
?>