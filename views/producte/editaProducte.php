<?php
session_start();
include ('../../model/Producte.php');
include '../../services/producte/ProductesServiceImpl.php';

$referencia = $_POST['referencia'] ?? null;

$con = new ProductesServiceImpl();

$con->openConnection();
if (isset($referencia)){
    $producte = $con->getProducteById($referencia);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/registrarProducte.css">
    <title>Edita Producte</title>
</head>
<body>
<div class="container">
    <form action="../../controllers/productesController.php?action=edit" enctype="multipart/form-data" method="post">
        <div class="row">
            <div class="col-25">
                <label for="referencia">Referencia</label>
            </div>
            <div class="col-75">
                <input type="text" id="referencia" name="referencia" placeholder="Referencia.." value="<?php echo $producte->getReferencia() ?? '' ?>" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="titol">Titol</label>
            </div>
            <div class="col-75">
                <input type="text" id="titol" name="titol" placeholder="Titol.." value="<?php echo $producte->getTitol() ?? '' ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="descripcio">Descripcio</label>
            </div>
            <div class="col-75">
                <input type="text" id="descripcio" name="descripcio" placeholder="Descripcio.." value="<?php echo $producte->getDescripcio() ?? '' ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="foto">Foto</label>
            </div>
            <div class="col-75">
                <input type="file" class="form-control-file" id="foto" name="foto" value="<?php echo $producte->getImatge() ?? '' ?>">
            </div>
        </div>
        <br>
        <div class="row">
            <input type="submit" value="Edita">
        </div>
    </form>
</div>

</body>
</html>