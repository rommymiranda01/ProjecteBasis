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
    <form action="../controllers/usuarisController.php?action=save" enctype="multipart/form-data" method="post">
        <div class="user-box">
            <input type="text" name="dni" id="dni" required="">
            <label>Dni</label>
        </div>
        <div class="user-box">
            <input type="text" name="nom" id="nom" required="">
            <label>Nom</label>
        </div>
        <div class="user-box">
            <input type="text" name="adreca" id="adreca" required="">
            <label>Adreça</label>
        </div>
        <div class="user-box">
            <input type="text" name="codPostal" id="codPostal" required="">
            <label>Cod Postal</label>
        </div>
        <div class="user-box">
            <input type="text" name="poble" id="poble" required="">
            <label>Poble</label>
        </div>
        <div class="user-box">
            <input type="text" name="email" id="email" required="">
            <label>Email</label>
        </div>
        <div class="user-box">
            <input type="text" name="telefon" id="telefon" required="">
            <label>Telefon</label>
        </div>
        <div class="user-box">
            <input type="file" class="feedback-input" id="foto" name="foto" value="<?php echo $_SESSION['dades']['foto'] ?? '' ?>"><br>
            <label>Foto</label>
        </div>
        <div class="user-box">
            <input type="password" name="password" id="password" required="">
            <label>Password</label>
        </div>
        <input type="submit" class="registra" value="Registra">
        <!--        <a href="login.php">-->
<!--            Registra-->
<!--        </a>-->
    </form>
</div>
</body>
</html>