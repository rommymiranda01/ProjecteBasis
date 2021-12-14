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
        <th>Opcions</th>
    </tr>
    <tr>
        <td><?php echo $c['dni']?></td>
        <td><?php echo $c['nom']?></td>
        <td><?php echo $c['adreca']?></td>
        <td><?php echo $c['codPostal']?></td>
        <td><?php echo $c['poble']?></td>
        <td><?php echo $c['email']?></td>
        <td><?php echo $c['telefon']?></td>
<!--        Imatge només text           -->
        <td><?php echo $c['foto']?></td>
<!--        Imatge completa             -->
<!--        <td><img src="--><?//=base_url();?><!--/views/client/img/--><?php //echo $c['foto']?><!--" alt="img"></td>-->
        <td>
            <form action="../../controllers/usuarisController.php?action=edit" method="post">
                <input type="hidden" value="<?php echo $c['dni'] ?>" name="dni">
                <input type="submit" class="btn btn-danger" value="Edita">
            </form>

            <form action="../../controllers/usuarisController.php?action=elimina" method="post">
                <input type="hidden" value="<?php echo $c['dni'] ?>" name="dni">
                <input type="submit" class="btn btn-danger" value="Elimina">
            </form>
    </tr>
</table>
<?php
}
?>