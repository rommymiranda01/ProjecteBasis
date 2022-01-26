<?php
$ranking=1;
if ($_SESSION['loggedUser']['rol']=='admin'){
?>
<h2>Rank Productes</h2>
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
        <td><?php echo $r['titol']." ".$r['descripcio']?></td>
        <!-- Crear una consulta per veure el número de vegades que s'ha llogat el producte -->
        <td><?php echo $r['productes_llogats'] ?></td>
    </tr>
    <?php
        $ranking++;
    }
    ?>
</table>
<?php
}elseif ($_SESSION['loggedUser']['rol']=='user'){
    echo "<h1>Ets un usuari, cal ser admin</h1>";
}
?>