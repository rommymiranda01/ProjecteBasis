<label for="cerca">Cerca: </label>
<input type="text" id="searchInput" placeholder="filter developer...">
<table>
    <thead>
    <tr>
        <th>Referencia</th>
        <th>Dni</th>
        <th>Data</th>
        <th>Tipus Moviment</th>
    </tr>
    </thead>
<?php
foreach ($historials as $h){
    ?>
        <tbody id="clients">
        <tr>
            <td><?php echo $h['refProducte']?></td>
            <td><?php echo $h['dniClient']?></td>
            <td><?php echo $h['data']?></td>
            <td><?php echo $h['tipusMov']?></td>
        </tr>
        </tbody>
    <?php
}
?>
</table>
