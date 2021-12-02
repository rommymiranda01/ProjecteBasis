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
}
