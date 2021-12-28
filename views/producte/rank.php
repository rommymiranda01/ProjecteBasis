<?php
$ranking=1;
?>
<h2>Rank</h2>
<table>
    <tr>
        <td>Rank</td>
        <td>Producte més llogat</td>
        <td>Número de vegades que s'ha llogat</td>
    </tr>
    <?php
    foreach ($rankProductes as $r){
    ?>
    <tr>
        <td><?php echo $ranking?></td>
        <td><?php echo $r['titol']?></td>
        <td><?php echo $r['referencia'] ?></td>
    </tr>
    <?php
        $ranking++;
    }
    ?>
</table>