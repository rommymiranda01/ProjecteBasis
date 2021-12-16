<?php

$referencia = $_POST['referencia'] ?? null;

$con = new ProductesServiceImpl();

if (isset($referencia)){
    $producte = $con->getProducteById($referencia);
}
?>
<a href="../../controllers/historialController.php?action=add">Afegeix Historial</a>
<div class="container">
    <form action="../../controllers/productesController.php?action=editSave" method="post">
        <div class="row">
            <div class="col-25">
                <label for="referencia">Referencia</label>
            </div>
            <div class="col-75">
                <input type="text" id="referencia" name="referencia" placeholder="Referencia.." value="<?php echo $producte->getReferencia() ?? '' ?>" readonly class="feedback-input">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="titol">Titol</label>
            </div>
            <div class="col-75">
                <input type="text" id="titol" name="titol" placeholder="Titol.." value="<?php echo $producte->getTitol() ?? '' ?>" class="feedback-input"><br>
                <?php
                if(isset($_SESSION['msgErrorTitol'])){
                    echo "<small id='flashErrorTitol' class='form-text text-danger font-weight-bold'><strong>".$_SESSION['msgErrorTitol'] ."</strong></small>";
                    unset($_SESSION['msgErrorTitol']);
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="descripcio">Descripcio</label>
            </div>
            <div class="col-75">
                <input type="text" id="descripcio" name="descripcio" placeholder="Descripcio.." value="<?php echo $producte->getDescripcio() ?? '' ?>" class="feedback-input"><br>
                <?php
                if(isset($_SESSION['msgErrorDesc'])){
                    echo "<small id='flashErrorDesc' class='form-text text-danger font-weight-bold'><strong>".$_SESSION['msgErrorDesc'] ."</strong></small>";
                    unset($_SESSION['msgErrorDesc']);
                }
                ?>
            </div>
        </div>
        <br>
        <div class="row">
            <input type="submit" class="edita" value="Edita">
        </div>
<!--        <a href="../../controllers/productesController.php?action=list">Torna</a>-->
    </form>
</div>