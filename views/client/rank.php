<?php
$ranking = 1;
?>
<h2>Rank</h2>
<table>
    <tr>
        <td><strong>Rank</strong></td>
        <td><strong>Usuari més actiu</strong></td>
    </tr>
    <?php
    foreach ($rankClients as $r){
    ?>
    <tr>
        <td><?php echo $ranking ?></td>
<!--        <td>--><?php //echo $r['dni']?><!--</td>-->
        <td><?php echo $r['nom']?></td>
    </tr>
        <?php
        $ranking++;
    }
    ?>
</table>
