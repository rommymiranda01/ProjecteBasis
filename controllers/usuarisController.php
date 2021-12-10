<?php
session_start();
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
        header('Location: ../views/login.php');
        break;

    case 'llista':
        $clients = $con->getAllUsers();
        $view = 'client/llista.php';
        include '../views/template.php';
        break;

    case 'add':
        $view = 'client/registraClient.php';
        include '../views/template.php';
        break;
    case 'save':
        $_SESSION["dades"] = $_POST;

        if (!isset($_POST['referencia']) || empty($_POST["referencia"])){
            $_SESSION['msgErrorRef'] = 'Si us plau omple el camp corresponent a la referència';
            $_SESSION['errors']=true;
        }

        if (!isset($_POST['titol']) || empty($_POST["titol"])){
            $_SESSION['msgErrorTitol'] = 'Si us plau omple el camp corresponent al titol';
            $_SESSION['errors']=true;
        }

        if (!isset($_POST['descripcio']) || empty($_POST["descripcio"])){
            $_SESSION['msgErrorDesc'] = 'Si us plau omple el camp corresponent a la descripcio';
            $_SESSION['errors']=true;
        }


        $fTemp = $_FILES['foto']['tmp_name'];
        if (empty($fTemp)){
            $_SESSION['msgErrorFoto'] = 'Si us plau adjunta una imatge';
            $_SESSION['errors']=true;
        }else{
            $dstFolder = "../views/client/img/";

            $size =getimagesize($fTemp);

            if (!$size){
                $_SESSION['msgErrorFoto'] = "Si us plau adjunta una imatge i no altre tipus de fitxer";
                $_SESSION['errors'] = true;
            }else{
                $dif = abs($size[0] - $size[1]);
                if ($dif > 100){
                    $_SESSION["msgErrorFoto"] = "Si us plau introdueix una imatge quadrada";
                    $_SESSION["errors"] = true;
                }
            }
        }

        if ($_SESSION["errors"]){
            //die(var_dump($_SESSION));
            header('Location: ../controllers/productesController.php?action=add');
        }else {
            unset($_SESSION["dades"]);
            $fullPath = $dstFolder . basename($_FILES['foto']["name"]);
            $res = move_uploaded_file($_FILES['foto']['tmp_name'], $fullPath);
            if ($res) {
                $prod = new Producte( $_POST['referencia'], $_POST['titol'], $_POST['descripcio'], $_FILES['foto']['name']);
                $con->addProducte($prod);
                //$_SESSION["resultStore"] = "Producte afegit correctament";
                header('Location: ../controllers/productesController.php?action=list');
            }
        }
        break;
}
