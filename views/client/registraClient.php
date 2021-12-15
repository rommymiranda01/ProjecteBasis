<?php
?>
<div class="container">
    <form action="../../controllers/usuarisController.php?action=save" enctype="multipart/form-data" method="post">
        <div class="row">
            <div class="col-25">
                <label for="dni">Dni</label>
            </div>
            <div class="col-75">
                <input type="text" id="dni" name="dni" placeholder="Dni.." class="feedback-input"><br>
                <?php
                if(isset($_SESSION['msgErrorDni'])){
                    echo "<small id='flashErrorDni'><strong>".$_SESSION['msgErrorDni'] ."</strong></small>";
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
                <input type="text" id="nom" name="nom" placeholder="Nom.." class="feedback-input"><br>
                <?php
                if(isset($_SESSION['msgErrorNom'])){
                    echo "<small id='flashErrorNom'><strong>".$_SESSION['msgErrorNom'] ."</strong></small>";
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
                <input type="text" id="adreca" name="adreca" placeholder="Adreça.." class="feedback-input"><br>
                <?php
                if(isset($_SESSION['msgErrorAdreca'])){
                    echo "<small id='flashErrorAdreca'><strong>".$_SESSION['msgErrorAdreca'] ."</strong></small>";
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
                <input type="text" id="codPostal" name="codPostal" placeholder="Codi Postal.." class="feedback-input"><br>
                <?php
                if(isset($_SESSION['msgErrorCodPostal'])){
                    echo "<small id='flashErrorCodPostal'><strong>".$_SESSION['msgErrorCodPostal'] ."</strong></small>";
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
                <input type="text" id="poble" name="poble" placeholder="Poble.." class="feedback-input"><br>
                <?php
                if(isset($_SESSION['msgErrorPoble'])){
                    echo "<small id='flashErrorPoble'><strong>".$_SESSION['msgErrorPoble'] ."</strong></small>";
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
                <input type="text" id="email" name="email" placeholder="Email.." class="feedback-input"><br>
                <?php
                if(isset($_SESSION['msgErrorEmail'])){
                    echo "<small id='flashErrorEmail'><strong>".$_SESSION['msgErrorEmail'] ."</strong></small>";
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
                <input type="text" id="telefon" name="telefon" placeholder="Telefon.." class="feedback-input"><br>
                <?php
                if(isset($_SESSION['msgErrorTelefon'])){
                    echo "<small id='flashErrorTelefon'><strong>".$_SESSION['msgErrorTelefon'] ."</strong></small>";
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
                <input type="file" class="feedback-input" id="foto" name="foto" value="<?php echo $_SESSION['dades']['foto'] ?? '' ?>"><br>
                <?php
                if(isset($_SESSION['msgErrorFoto'])){
                    echo "<small id='flashErrorFoto'><strong>".$_SESSION['msgErrorFoto'] ."</strong></small>";
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
