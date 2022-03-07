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
    <form id="login-form" class="form" action="../controllers/usuarisController.php?action=checkLogin" method="post">
        <div class="user-box">
            <input type="text" name="email" id="email" required="">
            <label>Email</label>
        </div>
        <div class="user-box">
            <input type="password" name="password" id="password" required="">
            <label>Password</label>
        </div>

        <button type="submit">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Inicia sessió
        </button>
    </form>

    <form id="login-form" class="form" action="registra.php" method="post">
        <button type="submit">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Registra
        </button>
    </form>

</div>
</body>
</html>