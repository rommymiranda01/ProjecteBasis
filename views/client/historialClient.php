<div id="app">
    <table>
        <thead>
        <tr>
            <th>Referencia</th>
            <th>Dni</th>
            <th>Data</th>
            <th>Tipus Moviment</th>
        </tr>
        </thead>
        <tbody id="clients">
        <?php
        foreach ($historial as $h){
        ?>
            <tr>
                <td><?php echo $h['refProducte']?></td>
                <td>
<!--                    <form action="--><?//=base_url();?><!--/controllers/usuarisController.php?action=edit" method="post">-->
<!--                        <input type="hidden" value="--><?php //echo $h['dniClient'] ?><!--" name="dni">-->
<!--                        <button type="submit" class="fitxaClient">-->
                            <?php echo $h['dniClient']?>
<!--                        </button>-->
<!--                    </form>-->
                </td>
                <td><?php echo $h['data']?></td>
                <td><?php echo $h['tipusMov']?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>