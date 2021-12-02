<?php
foreach ($productes as $prod){
    ?>
    <div class="w3-card-12 w3-margin">
        <img src="<?=base_url();?>/views/img/<?php echo $prod['imatge']?>" alt="img">
        <div class="w3-container w3-center">
            <p class="card-title"><?php echo $prod['referencia'] ?></p>
            <p class="card-text"><?php echo $prod['titol'] ?></p>
            <p class="card-text"><?php echo $prod['descripcio'] ?></p>
            <form action="/views/producte/editaProducte.php" method="post">
                <input type="hidden" name="referencia" value="<?php echo $prod['referencia'] ?>">
                <input type="submit" class="btn btn-danger" value="Edita">
            </form>
            <form action="../controllers/productesController.php?action=elimina" method="post">
                <input type="hidden" value="<?php echo $prod['referencia'] ?>" name="referencia">
                <input type="submit" class="btn btn-danger" value="Elimina">
            </form>
        </div>
    </div>
    <?php
}
?>
