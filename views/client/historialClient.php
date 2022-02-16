<div id="app">
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Referencia</th>
            <th>Titol</th>
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
                <td><?php echo $h['id'] ?></td>
                <td><?php echo $h['refProducte'] ?></td>
                <td><?php echo $h['titol'] ?></td>
                <td><?php echo $h['dniClient'] ?></td>
                <td><?php echo $h['data'] ?></td>
                <td><?php echo $h['tipusMov'] ?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>