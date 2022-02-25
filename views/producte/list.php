<?php
if ($_SESSION['loggedUser']['rol'] == 'admin') {
?>
    <div id="app">
        <table>
            <thead>
            <tr>
                <th>Imatge</th>
                <th>Referencia</th>
                <th>Titol</th>
                <th>Descripcio</th>
                <th>Opcions</th>
            </tr>
            </thead>
            <tbody id="productes">
            <?php
                foreach ($productes as $prod) {
            ?>
            <tr>
<!--                <td>--><?php //echo $prod['imatge']?><!--</td>-->
                <td>
                    <img src="<?= base_url(); ?>/views/img/<?php echo $prod['imatge'] ?>" alt="img"  class="imgTable">
                </td>
                <td><?php echo $prod['referencia']?></td>
                <td><?php echo $prod['titol']?></td>
                <td><?php echo $prod['descripcio']?></td>
                <td>
                    <form action="../../controllers/productesController.php?action=edit" method="post">
                        <input type="hidden" value="<?php echo $prod['id'] ?>" name="id">
                        <input type="submit" class="editaLlista" value="Edit">
                    </form>
                    <form action="../../controllers/productesController.php?action=elimina" method="post">
                        <input type="hidden" value="<?php echo $prod['id'] ?>" name="id">
                        <input type="submit" class="eliminaLlista" value="Elimina">
                    </form>
                </td>
            </tr>
            <?php
                }
             ?>
            </tbody>
        </table>
    </div>

<?php
}else if ($_SESSION['loggedUser']['rol'] == 'user') {
?>
<div class="containerCards">
    <?php
    foreach ($productes as $prod) {
        ?>
        <div class="card">
            <img src="<?= base_url(); ?>/views/img/<?php echo $prod['imatge'] ?>" alt="img" style="width:100%">
            <div class="containerCard">
                <p class="card-title"><strong>Referencia: </strong><?php echo $prod['referencia'] ?></p>
                <p class="card-text"><strong>Titol: </strong><?php echo $prod['titol'] ?></p>
                <p class="card-text"><strong>Descripcio: </strong><?php echo $prod['descripcio'] ?></p>

                <form action="<?= base_url(); ?>/controllers/historialController.php?action=add" method="post">
                    <input type="hidden" value="<?php echo $prod['id'] ?>" name="id">
                    <input type="submit" class="retorna" value="Lloga">
                </form>
                <form action="<?= base_url(); ?>/controllers/historialController.php?action=retornar" method="post">
                    <input type="hidden" value="<?php echo $prod['id'] ?>" name="id">
                    <input type="submit" class="retorna" value="Retorna">
                </form>
            </div>
        </div>
        <?php
    }
    }
    ?>
</div>