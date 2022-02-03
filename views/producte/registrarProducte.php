<?php
if ($_SESSION['loggedUser']['rol'] == 'admin') {
    ?>
    <div class="container">
        <form action="../../controllers/productesController.php?action=save" enctype="multipart/form-data"
              method="post">
            <div class="row">
                <div class="col-25">
                    <label for="referencia">Referencia</label>
                </div>
                <div class="col-75">
                    <input type="text" id="referencia" name="referencia" placeholder="Referencia.."
                           class="feedback-input"><br>
                    <?php
                    if (isset($_SESSION['msgErrorRef'])) {
                        echo "<small id='flashErrorRef' class='form-text text-danger font-weight-bold'><strong>" . $_SESSION['msgErrorRef'] . "</strong></small>";
                        unset($_SESSION['msgErrorRef']);
                    }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="titol">Titol</label>
                </div>
                <div class="col-75">
                    <input type="text" id="titol" name="titol" placeholder="Titol.." class="feedback-input"><br>
                    <?php
                    //die(var_dump($_SESSION));
                    if (isset($_SESSION['msgErrorTitol'])) {
                        echo "<small id='flashErrorTitol' class='form-text text-danger font-weight-bold'><strong>" . $_SESSION['msgErrorTitol'] . "</strong></small>";
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
                    <input type="text" id="descripcio" name="descripcio" placeholder="Descripcio.."
                           class="feedback-input"><br>
                    <?php
                    if (isset($_SESSION['msgErrorDesc'])) {
                        echo "<small id='flashErrorDesc' class='form-text text-danger font-weight-bold'><strong>" . $_SESSION['msgErrorDesc'] . "</strong></small>";
                        unset($_SESSION['msgErrorDesc']);
                    }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="foto">Foto</label>
                </div>
                <div class="col-75">
                    <input type="file" class="feedback-input" id="foto" name="foto"
                           value="<?php echo $_SESSION['dades']['foto'] ?? '' ?>"><br>
                    <?php
                    if (isset($_SESSION['msgErrorFoto'])) {
                        echo "<small id='flashErrorFoto'><strong>" . $_SESSION['msgErrorFoto'] . "</strong></small>";
                        unset($_SESSION['msgErrorFoto']);
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
    <?php
}
?>