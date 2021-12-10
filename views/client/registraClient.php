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
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="nom">Nom</label>
            </div>
            <div class="col-75">
                <input type="text" id="nom" name="nom" placeholder="Nom.."><br>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="adreca">Adreça</label>
            </div>
            <div class="col-75">
                <input type="text" id="adreca" name="adreca" placeholder="Adreça.."><br>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="codPostal">Codi Postal</label>
            </div>
            <div class="col-75">
                <input type="text" id="codPostal" name="codPostal" placeholder="Codi Postal.."><br>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="poble">Poble</label>
            </div>
            <div class="col-75">
                <input type="text" id="poble" name="poble" placeholder="Poble.."><br>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="email">Email</label>
            </div>
            <div class="col-75">
                <input type="text" id="email" name="email" placeholder="Email.."><br>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="telefon">Telefon</label>
            </div>
            <div class="col-75">
                <input type="text" id="telefon" name="telefon" placeholder="Telefon.."><br>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="foto">Foto</label>
            </div>
            <div class="col-75">
                <input type="file" class="form-control-file" id="foto" name="foto" value="<?php echo $_SESSION['dades']['foto'] ?? '' ?>"><br>
            </div>
        </div>
        <br>
        <div class="row">
            <input type="submit" value="Registra">
        </div>
    </form>
</div>
