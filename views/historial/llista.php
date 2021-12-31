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
    </tr>
    </thead>
        <tbody id="clients">
        <?php
        foreach ($historials as $h){
        ?>
        <tr>
            <td>
                <?php echo $h['refProducte']?>
<!--                <input type="hidden" name="titol" value="--><?php //echo $_POST['titol'] ?><!--">-->
            </td>

            <td>
                <?php echo $h['dniClient']?>
<!--                <input type="hidden" value="--><?php //echo $h['dniClient'] ?><!--" name="dni">-->
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