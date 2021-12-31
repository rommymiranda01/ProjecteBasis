<?php
?>
<div class="container">
    <form action="../../controllers/historialController.php?action=save" enctype="multipart/form-data" method="post">
        <div class="row">
                <input type="hidden" name="referencia" value="<?php echo $_POST['referencia'] ?>">
        </div>
        <div class="row">
            <div class="col-25">
                <label for="titol">Tipus Moviment</label>
            </div>
            <select name="tipusMoviment" id="tipusMoviment">
                <option disabled selected value> --Selecciona-- </option>
                <option value="L">Lloguer</option>
                <option disabled value="D">Devolució</option>
            </select>
            <?php
            if(isset($_SESSION['msgErrorMov'])){
                echo "<small id='flashErrorMov' class='form-text text-danger font-weight-bold'><strong>".$_SESSION['msgErrorMov'] ."</strong></small>";
                unset($_SESSION['msgErrorMov']);
            }
            ?>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="descripcio">Dni Client</label>
            </div>
            <div class="col-75">
                <input type="text" id="dni" name="dni" placeholder="Dni.." class="feedback-input"><br>
                <?php
                if(isset($_SESSION['msgErrorDni'])){
                    echo "<small id='flashErrorDni' class='form-text text-danger font-weight-bold'><strong>".$_SESSION['msgErrorDni'] ."</strong></small>";
                    unset($_SESSION['msgErrorDni']);
                }
                ?>
            </div>
        </div>
        <br>
        <div class="row">
            <input type="submit" class="registra" value="Registra">
        </div>
    </form>
</div>
