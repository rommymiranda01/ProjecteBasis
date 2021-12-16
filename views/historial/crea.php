<?php
?>
<div class="container">
    <form action="../../controllers/productesController.php?action=save" enctype="multipart/form-data" method="post">
        <div class="row">
                <input type="hidden" name="referencia" value="<?php echo $_POST['referencia'] ?>">
        </div>
        <div class="row">
            <div class="col-25">
                <label for="titol">Titol</label>
            </div>
            <div class="col-75">
                <input type="text" id="titol" name="titol" placeholder="Titol.." class="feedback-input"><br>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="descripcio">Descripcio</label>
            </div>
            <div class="col-75">
                <input type="text" id="descripcio" name="descripcio" placeholder="Descripcio.." class="feedback-input"><br>

            </div>
        </div>
        <br>
        <div class="row">
            <input type="submit" class="registra" value="Registra">
        </div>
    </form>
</div>
