<?php
if ($_SESSION['loggedUser']['rol'] == 'admin') {
    ?>
    <div id="app">
        <form action="<?=base_url();?>/controllers/productesController.php?action=editLlista" method="post">
            <input type="submit" value="EditaMassiu">
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
                $comptador = 1;
                foreach ($producteList as $prod) {
                    ?>
                    <tr>
                        <td>
                            <img src="<?= base_url(); ?>/views/img/<?php echo $prod['imatge'] ?>" alt="img"
                                 class="imgTable">
                        </td>
                        <td>
                            <input type="hidden" value="<?php echo $prod['id'] ?>" name="id">
                            <input type="text" value="<?php echo $prod['referencia'] ?>" name="productes[<?php echo $comptador ?>][referencia]">
                        </td>
                        <td><input type="text" value="<?php echo $prod['titol'] ?>" name="productes[<?php echo $comptador ?>][titol] "></td>
                        <td><input type="text" value="<?php echo $prod['descripcio'] ?>" name="productes[<?php echo $comptador ?>][descripcio]"></td>

                        <td>
<!--                            <form action="../../controllers/productesController.php?action=edit" method="post">-->
<!--                                <input type="hidden" value="--><?php //echo $prod['referencia'] ?><!--" name="referencia">-->
<!--                                <input type="submit" class="editaLlista" value="Edit">-->
<!--                            </form>-->

                            <form action="../../controllers/productesController.php?action=elimina" method="post">
                                <input type="hidden" value="<?php echo $prod['id'] ?>" name="id">
                                <input type="submit" class="eliminaLlista" value="Elimina">
                            </form>
                        </td>
                    </tr>
                    <?php
                    $comptador++;
                }
                ?>
                </tbody>
            </table>
        </form>
    </div>
    <?php
}
?>