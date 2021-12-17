<?php
foreach ($historials as $h){
?>
<table>
    <thead>
    <tr>
        <th>refProducte</th>
        <th>dniClient</th>
        <th>data</th>
        <th>tipusMov</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $h['refProducte']?></td>
        <td><?php echo $h['dniClient']?></td>
        <td><?php echo $h['data'] ?></td>
        <td><?php echo $h['tipusMov']?></td>
    </tr>
    </tbody>
</table>
    <?php
}
?>