<?php
session_start();
include_once '../helpers.php';
include ('../model/Historial.php');
include ('../services/historial/HistorialsServiceImpl.php');
$action = $_GET['action'];

$con = new HistorialsServiceImpl();
//$con->openConnection();

$_SESSION["errors"] = false;

switch ($action){
    case 'add':
        $view = 'historial/crea.php';
        include '../views/template.php';
        break;

    case 'save':
        $Object = new DateTime();
        $DateAndTime = $Object->format("Y-m-d h:i:s");

        if (!isset($_POST['dni']) || empty($_POST["dni"])){
            $_SESSION['msgErrorDni'] = 'Si us plau omple el camp corresponent al dni';
            $_SESSION['errors']=true;
        }
        if (!isset($_POST['tipusMoviment']) || empty($_POST["tipusMoviment"])){
            $_SESSION['msgErrorMov'] = 'Si us plau tria una opció';
            $_SESSION['errors']=true;
        }

        if ($_SESSION["errors"]){
            header('Location: ../controllers/historialController.php?action=add');
        }else {
            $historial = new Historial(null, $_POST['referencia'], $DateAndTime, $_POST['tipusMoviment'], $_POST['dni']);
            $con->addHistorial($historial);
            header('Location: ../controllers/historialController.php?action=list');
        }
        break;

    case 'list':
        $historials = $con->getAllHistorials();
        $view = 'historial/llista.php';
        include '../views/template.php';
        break;
}