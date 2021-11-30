<?php
session_start();
include ('../../model/Producte.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/registrarProducte.css">
    <title>Document</title>
</head>
<body>
<div class="container">
        <form action="../../controllers/productesController.php?action=add" enctype="multipart/form-data" method="post">
        <div class="row">
            <div class="col-25">
                <label for="referencia">Referencia</label>
            </div>
            <div class="col-75">
                <input type="text" id="referencia" name="referencia" placeholder="Referencia..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="titol">Titol</label>
            </div>
            <div class="col-75">
                <input type="text" id="titol" name="titol" placeholder="Titol..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="descripcio">Descripcio</label>
            </div>
            <div class="col-75">
                <input type="text" id="descripcio" name="descripcio" placeholder="Descripcio..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="foto">Foto</label>
            </div>
            <div class="col-75">
                <input type="file" class="form-control-file" id="foto" name="foto" value="<?php echo $_SESSION['dades']['foto'] ?? '' ?>">
            </div>
        </div>
        <br>
        <div class="row">
            <input type="submit" value="Registra">
        </div>
    </form>
</div>

</body>
</html>
