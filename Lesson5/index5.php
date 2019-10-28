<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo Ajax - JQuery</title>
</head>
<body>
    <div>
        <input type="text" id="txtKeyword" placeholder="Nhập tên bài hát hoặc ca sĩ">
        <button type="button" id="btnSearch">Search</button>
        <img src="img/giphy.gif" alt="" width="40" height="40" id="loading" style="display:none;">
        <br><br>
        <!-- Đổ dữ liệu từ server Ajax vào đây -->
        <div id="content">

        </div>
    </div>

    <script src="JS/jquery-3.4.1.js"></script>
    <script>
        $(function() {
            //bắt sự kiện cho button
            $('#btnSearch').click(function(){
                // Lấy dữ liệu mà người dùng nhập vào ô text
                let keyword = $('#txtKeyword').val().trim();
                // alert(keyword);
                if(keyword.length > 0){
                    // Tiến hành gửi dư liệu bằng ajax
                    $.ajax({
                        url: "server/ajax.php",
                        // url giống như action của form
                        type: "post",
                        // typr giống method của form
                        data: {key : keyword},
                        // bên phía server sẽ nhận thong key của object data
                        beforeSend: function(){
                            // trước khi chờ đợi kết quả trả về thông báo cho người dùng biết là đang làm 1 hành động gì đó
                            // Hiển thị ảnh loading data
                            $('#loading').show();
                        },
                        success:function(data){
                            // Hàm cho đợi kết quả từ server trả về
                            // ẩn ảnh loading data
                            $('#loading').hide();
                            // kết quả bên phía server trả về sẽ được lưu vào result
                            $('#content').html(data);
                        }
                    });
                }else{
                    alert('Vui lòng nhập từ khóa');
                }
            });
        });
    </script>
</body>
</html>