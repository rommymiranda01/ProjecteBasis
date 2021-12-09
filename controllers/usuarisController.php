<?php
include_once '../helpers.php';
include ('../model/Client.php');
include ('../services/client/ClientsServiceImpl.php');
$action = $_GET['action'];

$con = new ClientsServiceImpl();
$con->openConnection();

switch ($action) {
    case 'login':
        $view = 'login.php';
        include '../views/template.php';
        break;

    case 'logout':
        //unset();
        //header('Location: ../controllers/usuarisController.php?action=login');
        break;

    case 'llista':
        $clients = $con->getAllUsers();
        $view = 'client/llista.php';
        include '../views/template.php';
        break;
}
