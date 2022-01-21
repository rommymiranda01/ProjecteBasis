<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
<div class="login-box">
    <h2>Login</h2>
    <form id="login-form" class="form" action="../controllers/usersController.php?action=checkLogin" method="post">
        <div class="user-box">
            <input type="text" name="nom" id="nom" required="">
            <label>Nom</label>
        </div>
        <div class="user-box">
            <input type="password" name="password" id="password" required="">
            <label>Password</label>
        </div>
<!--        <a href="main.php">-->
<!--            <span></span>-->
<!--            <span></span>-->
<!--            <span></span>-->
<!--            <span></span>-->
<!--            Inicia la sessió-->
<!--        </a>-->

        <input type="submit" class="registra" value="Inicia Sessió">
    </form>
    <form id="login-form" class="form" action="registra.php" method="post">
        <input type="submit" class="registra" value="Registrar">
    </form>
</div>
</body>
</html>