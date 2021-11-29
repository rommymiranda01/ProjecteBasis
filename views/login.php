<?php
session_start();
include_once ('../model/Client.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>
<body>
<div class="wrapper">
    <form class="login" method="post" action="producte/registrarProducte.php">
        <p class="title">Log in</p>
        <input type="text" placeholder="Username" autofocus/>
        <i class="fa fa-user"></i>
        <input type="password" placeholder="Password" />
        <i class="fa fa-key"></i>
        <a href="client/registraClient.php">Registra</a>
        <button>
            <i class="spinner"></i>
            <span class="state">Log in</span>
        </button>
    </form>
</div>
</body>
</html>
