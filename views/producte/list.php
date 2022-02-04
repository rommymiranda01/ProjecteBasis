<?php
foreach ($productes as $prod) {
    ?>
    <div class="containerCards">
        <div class="card">
            <img src="<?= base_url(); ?>/views/img/<?php echo $prod['imatge'] ?>" alt="img" style="width:100%">
            <div class="containerCard">
                <p class="card-title"><strong>Referencia: </strong><?php echo $prod['referencia'] ?></p>
                <p class="card-text"><strong>Titol: </strong><?php echo $prod['titol'] ?></p>
                <p class="card-text"><strong>Descripcio: </strong><?php echo $prod['descripcio'] ?></p>
                <?php
                if ($_SESSION['loggedUser']['rol'] == 'admin') {
                    ?>
                    <form action="../../controllers/productesController.php?action=edit" method="post">
                        <input type="hidden" name="referencia" value="<?php echo $prod['referencia'] ?>">
                        <input type="submit" class="editaLlista" value="Edita">
                    </form>
                    <form action="../../controllers/productesController.php?action=elimina" method="post">
                        <input type="hidden" value="<?php echo $prod['referencia'] ?>" name="referencia">
                        <input type="submit" class="eliminaLlista" value="Elimina">
                    </form>
                    <?php
                }
                ?>
                <form action="<?= base_url(); ?>/controllers/historialController.php?action=add" method="post">
                    <input type="hidden" value="<?php echo $prod['referencia'] ?>" name="referencia">
                    <input type="submit" class="retorna" value="Lloga">
                </form>
                <form action="<?= base_url(); ?>/controllers/historialController.php?action=retornar" method="post">
                    <input type="hidden" value="<?php echo $prod['referencia'] ?>" name="referencia">
                    <input type="submit" class="retorna" value="Retorna">
                </form>
            </div>
        </div>
    </div>
    <?php
}
?>
