<?php
if (!isset($_SESSION)){
    session_start();
}
include_once '../services/client/ClientsServiceImpl.php';

$con = new ClientsServiceImpl();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="<?=base_url();?>/views/img/shop.png">
    <link rel="stylesheet" href="<?=base_url();?>/views/css/main.css">

    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="<?=base_url();?>/views/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url();?>/views/css/owl.theme.default.min.css">

    <title>Botiga RM</title>
</head>
<body>



<header class="header">
    <a href="../controllers/portadaController.php" class="logo">
        <img src="<?=base_url();?>/views/img/shop.png" alt="shop" class="logoNav">
        Botiga RM</a>
    <?php
    include 'templates/navbar.php';
    ?>
</header>
    <main>
        <?php
        include $view;
        ?>

    </main>
<!-- javascript -->
<script src="<?=base_url();?>/views/js/jquery.min.js"></script>
<script src="<?=base_url();?>/views/js/owl.carousel.js"></script>

<script src="../views/js/main.js" type="text/javascript"></script>
<script src="../views/js/index.js" type="text/javascript"></script>
</body>
</html>