<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Demo send data method GET</h1>
    <a href="index2.php?age=20&name=abc&add=NamDinh">Send Data to Index2</a>
    <br><br>
    <form action="server/login.php" method="get">
        <label for="user">User</label>
        <input type="text" name="user" id="user">
        <br><br>
        <label for="pass">Password</label>
        <input type="password" name="pass" id="pass">
        <br><br>
        <button name="login" type="submit">Login</button>
    </form>
    <br><br>
    <h3>Logi form with method POST</h3>
    <form action="server/login_post.php" method="post">
        <label for="user">User</label>
        <input type="text" name="user" id="user">
        <br><br>
        <label for="pass">Password</label>
        <input type="password" name="pass" id="pass">
        <br><br>
        <button name="login" type="submit">Login</button>
    </form>
</body>
</html>