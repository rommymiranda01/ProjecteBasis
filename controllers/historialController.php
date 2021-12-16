<?php
session_start();
include_once '../helpers.php';
include ('../model/Historial.php');
include ('../services/historial/HistorialsServiceImpl.php');
$action = $_GET['action'];

$con = new HistorialsServiceImpl();
//$con->openConnection();

switch ($action){
    case 'add':
        $view = 'historial/crea.php';
        include '../views/template.php';
        break;
}