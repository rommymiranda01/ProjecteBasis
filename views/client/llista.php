<div class="containerCards">
<?php
if ($_SESSION['loggedUser']['rol']=='admin'){
foreach ($clients  as $c){
    ?>
    <div class="card">
        <img src="<?=base_url();?>/views/img/<?php echo $c['foto']?>" alt="img" style="width:100%">
        <div class="containerCard">
            <p class="card-title"><strong>Dni: </strong><?php echo $c['dni'] ?></p>
            <p class="card-text"><strong>Nom: </strong><?php echo $c['nom'] ?></p>
            <p class="card-text"><strong>Adreça: </strong><?php echo $c['adreca'] ?></p>
            <p class="card-text"><strong>Codi Postal: </strong><?php echo $c['codPostal'] ?></p>
            <p class="card-text"><strong>Poble: </strong><?php echo $c['poble'] ?></p>
            <p class="card-text"><strong>Email: </strong><?php echo $c['email'] ?></p>
            <p class="card-text"><strong>Telefon: </strong><?php echo $c['telefon'] ?></p>

            <form action="<?=base_url();?>/controllers/usuarisController.php?action=edit" method="post">
                <input type="hidden" value="<?php echo $c['id'] ?>" name="id">
                <input type="submit" class="editaLlista" value="Edita">
            </form>

            <form action="<?=base_url();?>/controllers/usuarisController.php?action=elimina" method="post">
                <input type="hidden" value="<?php echo $c['id'] ?>" name="id">
                <input type="submit" class="eliminaLlista" value="Elimina">
            </form>

        </div>
    </div>
    <?php
    }
}
?>
</div>
