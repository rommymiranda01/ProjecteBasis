<?php

$dni = $_POST['dni'] ?? null;

$con = new ClientsServiceImpl();

if (isset($dni)){
    $client = $con->getUserById($dni);
}
?>
<form action="<?=base_url();?>/controllers/usuarisController.php?action=listHistorial" method="post">
    <input type="hidden" value="<?php echo $_POST['dni'] ?>" name="dni">
    <input type="submit" class="llistatHistorial" value="Llistat Historial">
</form>
<div class="container">
    <form action="../../controllers/usuarisController.php?action=editSave" enctype="multipart/form-data" method="post">
        <div class="row">
            <div class="col-25">
                <label for="dni">Dni</label>
            </div>
            <div class="col-75">
                <input type="text" id="dni" name="dni" placeholder="Dni.." value="<?php echo $client->getDni() ?? '' ?>" readonly class="feedback-input"><br>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="nom">Nom</label>
            </div>
            <div class="col-75">
                <input type="text" id="nom" name="nom" value="<?php echo $client->getNom() ?? '' ?>" placeholder="Nom.." class="feedback-input"><br>
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
                <input type="text" id="adreca" name="adreca" placeholder="Adreça.." value="<?php echo $client->getAdreca() ?? '' ?>" class="feedback-input"><br>
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
                <input type="text" id="codPostal" name="codPostal" placeholder="Codi Postal.." value="<?php echo $client->getCodPostal() ?? '' ?>" class="feedback-input"><br>
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
                <input type="text" id="poble" name="poble" placeholder="Poble.." value="<?php echo $client->getPoble() ?? '' ?>" class="feedback-input"><br>
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
                <input type="text" id="email" name="email" placeholder="Email.." value="<?php echo $client->getEmail() ?? '' ?>" class="feedback-input"><br>
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
                <input type="text" id="telefon" name="telefon" placeholder="Telefon.." value="<?php echo $client->getTelefon() ?? '' ?>" class="feedback-input"><br>
                <?php
                if(isset($_SESSION['msgErrorTelefon'])){
                    echo "<small id='flashErrorTelefon' class='form-text text-danger font-weight-bold'><strong>".$_SESSION['msgErrorTelefon'] ."</strong></small>";
                    unset($_SESSION['msgErrorTelefon']);
                }
                ?>
            </div>
        </div>
        <br>
        <div class="row">
            <input type="submit" class="edita" value="Edita">
        </div>
    </form>
</div>