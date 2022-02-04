<?php
session_start();
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
<header class="header">
    <a href="" class="logo">Botiga RM</a>
    <?php
    include 'templates/navbar.php';
    ?>
</header>

<!--Slider-->
<div class="slideshow-container">

    <?php
    foreach ($rankProductes as $r) {
        ?>
        <div class="containerCards">
            <div class="card">
                <img src="<?= base_url(); ?>/views/img/<?php echo $prod['imatge'] ?>" alt="img" style="width:100%">
                <div class="containerCard">
                    <p class="card-title"><strong>Referencia: </strong><?php echo $prod['referencia'] ?></p>
                    <p class="card-text"><strong>Titol: </strong><?php echo $prod['titol'] ?></p>
                    <p class="card-text"><strong>Descripcio: </strong><?php echo $prod['descripcio'] ?></p>
                </div>
            </div>
        </div>

        <?php
    }
    ?>

    <!--    <div class="mySlides fade">-->
    <!--        <div class="numbertext">1 / 2</div>-->
    <!--        <img src="img/Bandera-Suiza.jpg" style="width:100%">-->
    <!--    </div>-->
    <!---->
    <!--    <div class="mySlides fade">-->
    <!--        <div class="numbertext">2 / 2</div>-->
    <!--        <img src="img/logo.png" style="width:100%">-->
    <!--    </div>-->
    <!---->
    <!--    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>-->
    <!--    <a class="next" onclick="plusSlides(1)">&#10095;</a>-->

</div>
<br>
<!--Fi Slider-->

<script src="js/main.js"></script>

</body>
<footer>
    <p>Rommy Miranda</p>
</footer>
</html>