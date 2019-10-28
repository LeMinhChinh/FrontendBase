<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 c0l-md-12 col-xl-12 col-lg-12">
                <table class="table table-hover table-striped">
                    <!-- <caption>Giỏ hàng</caption> -->
                    <thead>
                        <tr>
                            <th>MSP</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>QTY</th>
                            <th>Money</th>
                            <th colspan="2" width="20%" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($cart as $key => $item): ?>
                        <tr id="row_<?= $item['id_pd']; ?>">
                            <td>
                                <?= $item['id_pd']; ?>
                            </td>
                            <td>
                                <?= $item['name_pd']; ?>
                            </td>
                            <td>
                                <img src="<?= $item['img_pd']; ?>" alt="" width="120" height="120">
                            </td>
                            <td id="td">
                                <?= number_format($item['price_pd']); ?>
                            </td>
                            <td>
                               <input type="number" value="<?= $item['qty_pd'] ?>" name="qty" class="qty" id="qty">
                            </td>
                            <td>
                                <?= number_format($item['price_pd'] * $item['qty_pd']); ?>
                            </td>
                            <td>
                                <!-- <a id="<?= $item['id_pd']; ?>" href="" class="btn btn-primary">Update</a> -->
                                <button class="btn btn-primary update">Update</button>
                                
                            </td>
                            <td>
                            <!-- <a href="../Controller/delecart.php?id=<?= $item['id_pd'] ?>" class="btn btn-danger">Delete</a> -->
                                <button class="btn btn-danger delete">Delete</button>
                                <input type="hidden" id="idCart" class="idCart" value="<?= $item['id_pd']; ?>">
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="content">

        </div>
    </div>
    
    

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- <script>
        $(function(){
            $('.btn-primary').click(function(){
                var id = $(this).attr('id');
                var valqty = $(this).parent().parent().find('#qty').val();
                $.ajax({
                    url:"updatecart.php",
                    type:'post',
                    data:{'key':id, 'qty':valqty},
                    beforeSend:function(){

                    },
                    success: function(data){
                        $('#content').html(data);
                    }
                });
            });
        });
    </script> -->
    <script>
        $(function() {
            //Delete
            $('button.delete').click(function(){
                let idCart = $(this).next('#idCart').val().trim();
                if($.isNumeric(idCart)){
                    // ajax
                    $.ajax({
                        url:"DeleteCart.php",
                        type:"POST",
                        data:{id: idCart},
                        success : function(data){
                            data = $.trim(data);
                            if(data === 'Ok'){
                                $('#row_'+idCart).hide();
                            }
                        }
                    });
                }
            });

            // Update
            $('button.update').click(function(){
                let self = $(this);
                let qty = $(this).parent().prev().prev().find('input[type=number]').val().trim();
                let idCart = $(this).parent().next().find('input[class=idCart]').val().trim();
                if($.isNumeric(qty) && $.isNumeric(idCart)){
                    $.ajax({
                        url:"UpdateCart1.php",
                        type:"POST",
                        data:{id: idCart, qty: qty},
                        success: function(data){
                            data = $.trim(data);
                            if(data !== 'Error'){
                                console.log("sahdas");
                                
                               self.parent().prev().text(data);
                            }
                        }
                    });
                }
                
            });
        });
    </script>
</body>
</html>