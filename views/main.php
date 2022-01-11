<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>Main</title>
</head>
<body>
<header><h1>Web</h1></header>
<nav>
    <?php
    include 'templates/navbar.php';
    ?>
</nav>

<!--Slider-->

<div class="slideshow-container">

    <div class="mySlides fade">
        <div class="numbertext">1 / 2</div>
        <img src="img/Bandera-Suiza.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 2</div>
        <img src="img/logo.png" style="width:100%">
    </div>

</div>
<br>

<div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
</div>

<!--Fi Slider-->

<script src="js/main.js"></script>

</body>
<footer>
    <p>Rommy Miranda</p>
</footer>
</html>