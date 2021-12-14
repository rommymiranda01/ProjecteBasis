<?php
?>
<div class="container">
    <form action="../../controllers/usuarisController.php?action=save" enctype="multipart/form-data" method="post">
        <div class="row">
            <div class="col-25">
                <label for="dni">Dni</label>
            </div>
            <div class="col-75">
                <input type="text" id="dni" name="dni" placeholder="Dni.."><br>
                <?php
                if(isset($_SESSION['msgErrorDni'])){
                    echo "<small id='flashErrorDni' class='form-text text-danger font-weight-bold'><strong>".$_SESSION['msgErrorDni'] ."</strong></small>";
                    unset($_SESSION['msgErrorDni']);
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="nom">Nom</label>
            </div>
            <div class="col-75">
                <input type="text" id="nom" name="nom" placeholder="Nom.."><br>
                <?php
                if(isset($_SESSION['msgErrorNom'])){
                    echo "<small id='flashErrorNom' class='form-text text-danger font-weight-bold'><strong>".$_SESSION['msgErrorNom'] ."</strong></small>";
                    unset($_SESSION['msgErrorNom']);
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="adreca">Adreça</label>
            </div>
            <div class="col-75">
                <input type="text" id="adreca" name="adreca" placeholder="Adreça.."><br>
                <?php
                if(isset($_SESSION['msgErrorAdreca'])){
                    echo "<small id='flashErrorAdreca' class='form-text text-danger font-weight-bold'><strong>".$_SESSION['msgErrorAdreca'] ."</strong></small>";
                    unset($_SESSION['msgErrorAdreca']);
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="codPostal">Codi Postal</label>
            </div>
            <div class="col-75">
                <input type="text" id="codPostal" name="codPostal" placeholder="Codi Postal.."><br>
                <?php
                if(isset($_SESSION['msgErrorCodPostal'])){
                    echo "<small id='flashErrorCodPostal' class='form-text text-danger font-weight-bold'><strong>".$_SESSION['msgErrorCodPostal'] ."</strong></small>";
                    unset($_SESSION['msgErrorCodPostal']);
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="poble">Poble</label>
            </div>
            <div class="col-75">
                <input type="text" id="poble" name="poble" placeholder="Poble.."><br>
                <?php
                if(isset($_SESSION['msgErrorPoble'])){
                    echo "<small id='flashErrorPoble' class='form-text text-danger font-weight-bold'><strong>".$_SESSION['msgErrorPoble'] ."</strong></small>";
                    unset($_SESSION['msgErrorPoble']);
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="email">Email</label>
            </div>
            <div class="col-75">
                <input type="text" id="email" name="email" placeholder="Email.."><br>
                <?php
                if(isset($_SESSION['msgErrorEmail'])){
                    echo "<small id='flashErrorEmail' class='form-text text-danger font-weight-bold'><strong>".$_SESSION['msgErrorEmail'] ."</strong></small>";
                    unset($_SESSION['msgErrorEmail']);
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="telefon">Telefon</label>
            </div>
            <div class="col-75">
                <input type="text" id="telefon" name="telefon" placeholder="Telefon.."><br>
                <?php
                if(isset($_SESSION['msgErrorTelefon'])){
                    echo "<small id='flashErrorTelefon' class='form-text text-danger font-weight-bold'><strong>".$_SESSION['msgErrorTelefon'] ."</strong></small>";
                    unset($_SESSION['msgErrorTelefon']);
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="foto">Foto</label>
            </div>
            <div class="col-75">
                <input type="file" class="form-control-file" id="foto" name="foto" value="<?php echo $_SESSION['dades']['foto'] ?? '' ?>"><br>
                <?php
                if(isset($_SESSION['msgErrorFoto'])){
                    echo "<small id='flashErrorFoto' class='form-text text-danger font-weight-bold'><strong>".$_SESSION['msgErrorFoto'] ."</strong></small>";
                    unset($_SESSION['msgErrorFoto']);
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
