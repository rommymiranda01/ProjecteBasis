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
    <li><a href="../../controllers/usuarisController.php?action=logout">Logout</a></li>

</ul>