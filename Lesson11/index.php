<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tiền tệ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 col-sm-12 col-md-12 col-xl-12 col-lg-12">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Đơn vị tiền tệ" id="money">
                    <div class="input-group-append">
                        <span class="input-group-text" id="search">Tìm kiếm</span>
                        <!-- <button class="input-group-text" id="search">Tìm kiếm</button>/ -->
                    </div>
                </div>
            </div>        
        </div>
        <div class="row mt-3">
            <div class="col-12 col-sm-12 col-md-12 col-xl-12 col-lg-12">
                <div id="data">

                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
        $(function(){
            $('#search').click(function(){
                let money = $('#money').val().trim();
                let self = $(this);
                if(money){
                    $.ajax({
                       url: "controller/money.php",
                       type: "post",
                       data: {money: money},
                       beforeSend: function(){
                           self.text('Loading ...')
                       },
                       success: function(result){
                           self.text('Tìm kiếm');
                            $('#data').html(result);
                       }
                    });
                }
            });
        });
    </script>
</body>
</html>