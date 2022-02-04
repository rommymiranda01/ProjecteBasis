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
            <input type="text" name="dni" id="dni">
            <label>Dni</label>
        </div>
        <div class="user-box">
            <input type="text" name="nom" id="nom">
            <label>Nom</label>
        </div>
        <div class="user-box">
            <input type="text" name="adreca" id="adreca">
            <label>Adreça</label>
        </div>
        <div class="user-box">
            <input type="text" name="codPostal" id="codPostal">
            <label>Cod Postal</label>
        </div>
        <div class="user-box">
            <input type="text" name="poble" id="poble">
            <label>Poble</label>
        </div>
        <div class="user-box">
            <input type="text" name="email" id="email">
            <label>Email</label>
        </div>
        <div class="user-box">
            <input type="text" name="telefon" id="telefon">
            <label>Telefon</label>
        </div>
        <div class="user-box">
            <input type="file" class="feedback-input" id="foto" name="foto" value="<?php echo $_SESSION['dades']['foto'] ?? '' ?>"><br>
            <label>Foto</label>
        </div>
        <div class="user-box">
            <input type="password" name="password" id="password">
            <label>Password</label>
        </div>
        <button type="submit">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Registra
        </button>
    </form>
    <form action="login.php">
        <button type="submit">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Torna
        </button>
    </form>
</div>
</body>
</html>