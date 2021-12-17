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

    case 'save':
        $Object = new DateTime();
        $DateAndTime = $Object->format("Y-m-d h:i:s");
        $historial = new Historial(null, $_POST['referencia'],$DateAndTime, $_POST['tipusMoviment'], $_POST['dni']);
        $con->addHistorial($historial);
        header('Location: ../controllers/historialController.php?action=list');
        break;

    case 'list':
        $historials = $con->getAllHistorials();
        $view = 'historial/llista.php';
        include '../views/template.php';
        break;
}