<?php
foreach ($productes as $prod){
    ?>
    <div class="card">
        <img src="<?=base_url();?>/views/img/<?php echo $prod['imatge']?>" alt="img" style="width:100%">
        <div class="containerCard">
            <p class="card-title">Referencia: <?php echo $prod['referencia'] ?></p>
            <p class="card-text">Titol: <?php echo $prod['titol'] ?></p>
            <p class="card-text">Descripcio: <?php echo $prod['descripcio'] ?></p>
            <form action="../../controllers/productesController.php?action=edit" method="post">
<!--            <form action="/views/producte/editaProducte.php" method="post">-->
                <input type="hidden" name="referencia" value="<?php echo $prod['referencia'] ?>">
                <input type="submit" class="btn btn-danger" value="Edita">
            </form>
            <form action="../../controllers/productesController.php?action=elimina" method="post">
                <input type="hidden" value="<?php echo $prod['referencia'] ?>" name="referencia">
                <input type="submit" class="btn btn-danger" value="Elimina">
            </form>
        </div>
    </div>
    <?php
}
?>
