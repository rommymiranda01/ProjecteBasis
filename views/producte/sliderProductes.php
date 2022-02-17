<div class="ContainerSlide" id="slide1">
    <h2>Ranking de productes llogats</h2>
    <div class="slideshow-container">
        <?php
        foreach ($rankP as $p) {
            ?>
            <div class="mySlides fade">
                <div class="containerCard">
                    <p class="card-title"><strong>Número de vegades llogat: </strong><?php echo $p['productes_llogats'] ?></p>
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

<div class="owl-carousel owl-theme">
    <div class="item"><h4>1</h4></div>
    <div class="item"><h4>2</h4></div>
    <div class="item"><h4>3</h4></div>
    <div class="item"><h4>4</h4></div>
    <div class="item"><h4>5</h4></div>
    <div class="item"><h4>6</h4></div>
    <div class="item"><h4>7</h4></div>
    <div class="item"><h4>8</h4></div>
    <div class="item"><h4>9</h4></div>
    <div class="item"><h4>10</h4></div>
    <div class="item"><h4>11</h4></div>
    <div class="item"><h4>12</h4></div>
</div>