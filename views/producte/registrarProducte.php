<?php
//session_start();
//include ('../../model/Producte.php');
?>
<div class="container">
        <form action="../../controllers/productesController.php?action=save" enctype="multipart/form-data" method="post">
        <div class="row">
            <div class="col-25">
                <label for="referencia">Referencia</label>
            </div>
            <div class="col-75">
                <input type="text" id="referencia" name="referencia" placeholder="Referencia..">
                <?php
                if(isset($_SESSION['msgErrorRef'])){
                    echo "'<small id='flashErrorRef' class='form-text text-danger font-weight-bold'><strong>".$_SESSION['msgErrorRef'] ."</strong></small>";
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="titol">Titol</label>
            </div>
            <div class="col-75">
                <input type="text" id="titol" name="titol" placeholder="Titol..">
                <?php
                if(isset($_SESSION['msgErrorTitol'])){
                    echo "'<small id='flashErrorTitol' class='form-text text-danger font-weight-bold'><strong>".$_SESSION['msgErrorTitol'] ."</strong></small>";
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="descripcio">Descripcio</label>
            </div>
            <div class="col-75">
                <input type="text" id="descripcio" name="descripcio" placeholder="Descripcio..">
                <?php
                if(isset($_SESSION['msgErrorDesc'])){
                    echo "'<small id='flashErrorDesc' class='form-text text-danger font-weight-bold'><strong>".$_SESSION['msgErrorDesc'] ."</strong></small>";
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="foto">Foto</label>
            </div>
            <div class="col-75">
                <input type="file" class="form-control-file" id="foto" name="foto" value="<?php echo $_SESSION['dades']['foto'] ?? '' ?>">
                <?php
                if(isset($_SESSION['msgErrorFoto'])){
                    echo "'<small id='flashErrorFoto' class='form-text text-danger font-weight-bold'><strong>".$_SESSION['msgErrorFoto'] ."</strong></small>";
                }
                ?>
            </div>
        </div>
        <br>
        <div class="row">
            <input type="submit" value="Registra">
        </div>
    </form>
</div>