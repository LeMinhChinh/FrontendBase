<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo Send Mail</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class=row>
            <div class="col-12 col-md-12 col-sm-12 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
                <h1 class="text-center" style="color: red;">Send Mail</h1>
                <form class="border mt-3 p-3" action="server/sendmail.php" method="POST">
                    <div class="form-group">
                        <label for="email" style="color: blue;"> Email </label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="subject" style="color: blue;"> Subject </label>
                        <input type="text" class="form-control" name="subject" id="subject">
                    </div>
                    <div class="form-group">
                        <label for="content" style="color: blue;"> Content </label>
                        <textarea name="content" id="content" class="form-control" rows="5"></textarea>
                    </div>
                    <button type="submit" name="btnSendMail" class="btn btn-primary" style="margin-left: 40%;"> Send Mail </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>