<input class="menu-btn" type="checkbox" id="menu-btn"/>
<label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
<ul class="menu">
    <li><a href="../../controllers/portadaController.php">Home</a></li>

    <!-- Productes -->
    <?php
    if ($_SESSION['loggedUser']['rol'] == 'admin') {
        ?>
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Productes</a>
            <div class="dropdown-content">
                <a href="../../controllers/productesController.php?action=add">Afegir Productes</a>
                <a href="../../controllers/productesController.php?action=list">Llista Productes</a>
                <a href="../../controllers/productesController.php?action=listProductes">Llista Productes 2</a>
            </div>
        </li>
        <?php
    } elseif ($_SESSION['loggedUser']['rol'] == 'user') {
        ?>
        <li><a href="../../controllers/productesController.php?action=list">Productes</a></li>
        <?php
    }
    ?>

    <!-- Clients -->
    <?php
    if ($_SESSION['loggedUser']['rol'] == 'admin') {
        ?>
        <li class="dropdown"><a href="../../controllers/usuarisController.php?action=list">Llista Clients</a></li>
        <?php
    }elseif ($_SESSION['loggedUser']['rol'] == 'user'){
        ?>

        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn"><?php echo $_SESSION['loggedUser']['nom']?></a>
            <div class="dropdown-content">
                <form action="<?= base_url(); ?>/controllers/usuarisController.php?action=edit" method="post">
                    <input type="hidden" value="<?php echo $_SESSION['loggedUser']['dni'] ?>" name="dni">
                    <input type="submit" class="nameNav" value="Canviar dades">
                </form>
                <form action="../../controllers/usuarisController.php?action=listHistorial" method="post">
                    <input type="hidden" value="<?php echo $_SESSION['loggedUser']['dni'] ?>" name="dni">
                    <input type="submit" class="nameNav" value="Llistat Historial">
                </form>
            </div>
        </li>
        <?php
    }
    ?>

    <?php
    if ($_SESSION['loggedUser']['rol'] == 'admin') {
        ?>
        <li><a href="../../controllers/historialController.php?action=list">Llistat historials</a></li>
        <?php
        }
    ?>

    <!-- Rank -->
    <?php
    if ($_SESSION['loggedUser']['rol'] == 'admin') {
        ?>
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Rank</a>
            <div class="dropdown-content">
                <a href="../../controllers/productesController.php?action=rank">Rank Productes</a>
                <a href="../../controllers/usuarisController.php?action=rank">Rank Clients</a>
                <a href="../../controllers/productesController.php?action=llistaEnd">Llista endarreriments</a>
            </div>
        </li>
        <?php
    }
    ?>

    <li><a href="../../controllers/usuarisController.php?action=logout">Logout</a></li>
</ul>