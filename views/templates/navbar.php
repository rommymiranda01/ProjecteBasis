<ul>
    <li><a class="active" href="../../views/main.php">Home</a></li>

    <!-- Productes -->
    <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Productes</a>
        <div class="dropdown-content">
            <a href="../../controllers/productesController.php?action=add">Afegir Productes</a>
            <a href="../../controllers/productesController.php?action=list">Llista Productes</a>
        </div>
    </li>

    <!-- Clients -->
    <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Clients</a>
        <div class="dropdown-content">
            <a href="../../controllers/usuarisController.php?action=add">Afegir Clients</a>
            <a href="../../controllers/usuarisController.php?action=list">Llista Clients</a>
        </div>
    </li>

    <li><a href="../../controllers/historialController.php?action=list">Llistat historials</a></li>

    <!-- Rank -->
    <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Rank</a>
        <div class="dropdown-content">
            <a href="../../controllers/productesController.php?action=rank">Rank Productes</a>
            <a href="../../controllers/usuarisController.php?action=rank">Rank Clients</a>
            <a href="../../controllers/productesController.php?action=llistaEnd">Llista endarreriments</a>
        </div>
    </li>
    <li><a href="../../controllers/usersController.php?action=logout">Logout</a></li>

</ul>