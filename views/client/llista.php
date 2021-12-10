<?php
foreach ($clients as $c){
?>
<table>
    <tr>
        <th>Dni</th>
        <th>Nom</th>
        <th>Adreça</th>
        <th>Codi postal</th>
        <th>Poble</th>
        <th>Email</th>
        <th>Telefon</th>
        <th>Foto</th>
    </tr>
    <tr>
        <td><?php echo $c['dni']?></td>
        <td><?php echo $c['nom']?></td>
        <td><?php echo $c['adreca']?></td>
        <td><?php echo $c['codPostal']?></td>
        <td><?php echo $c['poble']?></td>
        <td><?php echo $c['email']?></td>
        <td><?php echo $c['telefon']?></td>
        <td><?php echo $c['foto']?></td>
    </tr>
</table>
<?php
}
?>