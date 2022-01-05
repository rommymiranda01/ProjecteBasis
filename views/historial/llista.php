<div class="app">
    <div class="search">
<label for="cerca">Cerca: </label>
    <input type="text" id="searchInput" placeholder="escriu...">
    </div>
<table>
    <thead>
    <tr>
        <th>Referencia</th>
        <th>Dni</th>
        <th>Data</th>
        <th>Tipus Moviment</th>
        <th>Opcions</th>
    </tr>
    </thead>
        <tbody id="clients">
        <?php
        foreach ($historials as $h){
        ?>
        <tr>
            <td>
<!--                <input type="hidden" name="titol" value="--><?php //$con->getProducteById($h['refProducte'])->getTitol() ?><!--">-->
                <?php echo $h['refProducte']?>
            </td>

            <td>
<!--                <input type="hidden" name="nom" value="--><?php //$con->getUserById($h['dniClient'])->getNom() ?><!--">-->
                <?php echo $h['dniClient']?>
            </td>

            <td><?php echo $h['data']?></td>
            <td><?php echo $h['tipusMov']?></td>
            <td>
                <form action="../../controllers/historialController.php?action=elimina" method="post">
                    <input type="hidden" value="<?php echo $h['refProducte'] ?>" name="referencia">
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