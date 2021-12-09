<?php
include ('../model/Client.php');
//include ('../services/client/');
$action = $_GET['action'];

//$con = new ProductesServiceImpl();
//$con->openConnection();

switch ($action) {
    case 'login':
        $view = 'login.php';
        include '../views/template.php';
        break;

    case 'logout':
        //unset();
        //header('Location: ../controllers/usuarisController.php?action=login');
        break;
}
