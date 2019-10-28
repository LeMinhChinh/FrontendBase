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
                        <?php foreach($product as $key => $item): ?>
                        <tr>
                            <td>
                                <?= $item['id']; ?>
                            </td>
                            <td>
                                <?= $item['name']; ?>
                            </td>
                            <td>
                                <img src="<?= $item['image']; ?>" alt="">
                            </td>
                            <td>
                                <?= number_format($item['price']); ?>
                            </td>
                            <td>
                                <?= $item['qty']; ?>
                            </td>
                            <td>
                                <?= number_format($item['price'] * $item['qty']); ?>
                            </td>
                            <td>
                                <a href="Controller/addcart.php?id=<?= $item['id'] ?>" class="btn btn-primary">Add cart</a>
                            </td>
                            <td>
                            <a href="#" class="btn btn-success">Buy now</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>