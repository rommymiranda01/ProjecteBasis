<?php
$ranking=1;
?>
<h2>Rank</h2>
<table>
    <tr>
        <td><strong>Rank</strong></td>
        <td><strong>Producte més llogat</strong></td>
        <td><strong>Número de vegades que s'ha llogat</strong></td>
    </tr>
    <?php
    foreach ($rankProductes as $r){
    ?>
    <tr>
        <td><?php echo $ranking ?></td>
        <td><?php echo $r['titol']?></td>
        <!-- Crear una consulta per veure el número de vegades que s'ha llogat el producte -->
        <td><?php $con->numProductesLlogats()?></td>
    </tr>
    <?php
        $ranking++;
    }
    ?>
</table>