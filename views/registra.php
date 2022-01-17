<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <title>Registre</title>
</head>
<body>
<div class="login-box">
    <h2>Registre</h2>
<!--    <form action="../../controllers/usuarisController.php?action=editSave" enctype="multipart/form-data" method="post">-->
    <form action="../controllers/usuarisController.php?action=add" method="post">
        <div class="user-box">
            <input type="text" name="" required="">
            <label>Nom</label>
        </div>
        <div class="user-box">
            <input type="password" name="" required="">
            <label>Password</label>
        </div>
        <a href="login.php">
            Registra
        </a>
    </form>
</div>
</body>
</html>