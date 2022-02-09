<div class="containerCards">
    <?php
    foreach ($rankP as $p) {
    ?>
    <div class="card">
        <!--        <img src="--><?//= base_url(); ?><!--/views/img/-->
        <?php //echo $p['imatge'] ?><!--" alt="img" style="width:100%">-->
        <div class="containerCard">
            <p class="card-title"><strong>Referencia: </strong><?php echo $p['referencia'] ?></p>
            <p class="card-text"><strong>Titol: </strong><?php echo $p['titol'] ?></p>
            <p class="card-text"><strong>Descripcio: </strong><?php echo $p['descripcio'] ?></p>
        </div>
    </div>
</div>
<?php
}
?>
