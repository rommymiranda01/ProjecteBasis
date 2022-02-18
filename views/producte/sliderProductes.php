<?php
if ($_SESSION['loggedUser']['rol'] == 'admin') {
?>
<div class="ContainerSlide" id="slide1">
    <h2>Ranking de productes llogats</h2>
    <div class="slideshow-container">
        <?php
        foreach ($rankP as $p) {
            ?>
            <div class="mySlides fade">
                <div class="containerCard">
                    <p class="card-title"><strong>Número de vegades
                            llogat: </strong><?php echo $p['productes_llogats'] ?></p>
                    <p class="card-text"><strong>Titol: </strong><?php echo $p['titol'] ?></p>
                    <p class="card-text"><strong>Descripcio: </strong><?php echo $p['descripcio'] ?></p>
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<?php
$ranking = 1;
?>
<div class="ContainerSlide" id="slide2">
    <h2>Ranking de clients</h2>
    <div class="slideshow-container">
        <?php
        foreach ($rankC as $c) {
            ?>
            <div class="mySlides fade">
                <div class="containerCard">
                    <p class="card-text"><strong>Top: </strong><?php echo $ranking ?></p>
                    <p class="card-text"><strong>Nom: </strong><?php echo $c['nom'] ?></p>
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <?php
            $ranking++;
        }
        ?>
    </div>
</div>
    <?php
}elseif ($_SESSION['loggedUser']['rol'] == 'user'){
?>

<h1>Ranking clients</h1>
<div class="owl-carousel owl-theme">
    <?php
    foreach ($rankC as $c) {
        ?>
        <div class="item">
            <img src="<?= base_url(); ?>/views/img/<?php echo $c['foto'] ?>" alt="img" style="width:100%">
            <p class="card-text"><strong>Nom: </strong><?php echo $c['nom'] ?></p>
        </div>
        <?php
    }
    ?>
</div>
<br>

<h1>Ranking Productes</h1>
<div class="owl-carousel owl-theme">

    <?php
    foreach ($rankP as $p) {
        ?>
        <div class="item">
            <div class="containerCard">
                <img src="<?= base_url(); ?>/views/img/<?php echo $p['imatge'] ?>" alt="img" style="width:100%">
                <p class="card-text"><strong>Titol: </strong><?php echo $p['titol'] ?></p>
                <p class="card-text"><strong>Descripcio: </strong><?php echo $p['descripcio'] ?></p>
            </div>
        </div>

        <?php
    }
    ?>
</div>
    <?php
}
?>