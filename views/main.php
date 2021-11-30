<?php
session_start();
include('../model/Producte.php');
include ('../services/producte/ProductesServiceImpl.php');
$con = new ProductesServiceImpl();
$con->openConnection();
$res=$con->getAllProductes();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Main</title>
</head>
<header>
    <?php require_once ('templates/navbar.php')?>
</header>
<body>
<?php
//foreach ($_SESSION['llistaProductes'] as $prod) {
foreach ($res as $prod){
?>
<div class="w3-card-12 w3-margin">
        <img src="img/<?php echo $prod['imatge']?>" alt="img">
        <div class="w3-container w3-center">
            <p class="card-title"><?php echo $prod['referencia'] ?></p>
            <p class="card-text"><?php echo $prod['titol'] ?></p>
            <p class="card-text"><?php echo $prod['descripcio'] ?></p>
<!--            <a href="../controllers/productesController.php?action=edit">Edita</a>-->
            <form action="producte/editaProducte.php" method="post">
                <input type="hidden" name="referencia" value="<?php echo $prod['referencia'] ?>">
                <input type="submit" class="btn btn-danger" value="Edita">
            </form>
            <form action="../controllers/productesController.php?action=elimina" method="post">
                <input type="hidden" value="<?php echo $prod['referencia'] ?>" name="referencia">
                <input type="submit" class="btn btn-danger" value="Elimina">
            </form>
        </div>
</div>
<?php
}
?>
</body>
</html>