<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="server/login.php" method="post">
        <h1>Login</h1>
        <label for="user">Username</label>
        <input type="text" id="user" name="user">
        <br><br>
        <label for="pass">Password</label>
        <input type="password" id="pass" name="pass">
        <br><br>
        <button type="submit" name="btnLogin">Login</button>
    </form>
</body>
</html>