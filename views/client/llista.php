<?php
foreach ($clients  as $c){
    ?>
    <div class="card">
        <img src="<?=base_url();?>/views/client/img/<?php echo $c['foto']?>" alt="img" style="width:100%">
        <div class="containerCard">
            <p class="card-title">Dni: <?php echo $c['dni'] ?></p>
            <p class="card-text">Nom: <?php echo $c['nom'] ?></p>
            <p class="card-text">Adreça: <?php echo $c['adreca'] ?></p>
            <p class="card-text">Codi Postal: <?php echo $c['codPostal'] ?></p>
            <p class="card-text">Poble: <?php echo $c['poble'] ?></p>
            <p class="card-text">Email: <?php echo $c['email'] ?></p>
            <p class="card-text">Telefon: <?php echo $c['telefon'] ?></p>

            <form action="<?=base_url();?>/controllers/usuarisController.php?action=edit" method="post">
                <input type="hidden" value="<?php echo $c['dni'] ?>" name="dni">
                <input type="submit" class="editaLlista" value="Edita">
            </form>

            <form action="<?=base_url();?>/controllers/usuarisController.php?action=elimina" method="post">
                <input type="hidden" value="<?php echo $c['dni'] ?>" name="dni">
                <input type="submit" class="eliminaLlista" value="Elimina">
            </form>

        </div>
    </div>
    <?php
}
?>
