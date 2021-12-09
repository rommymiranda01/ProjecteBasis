<?php
include_once '../helpers.php';
include ('../model/Producte.php');
include ('../services/producte/ProductesServiceImpl.php');
$action = $_GET['action'];

$_SESSION["dades"] = $_POST;

$con = new ProductesServiceImpl();
$con->openConnection();

switch ($action){
    case 'add':
        $view = 'producte/registrarProducte.php';
        include '../views/template.php';
        break;
    case 'save':
        // afegim el producte
        $_SESSION["dades"] = $_POST;

        $_SESSION["errors"] = false;

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
            $dstFolder = "../views/img/";

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
            header('Location: ../controllers/productesController.php?action=add');
        }else {
            unset($_SESSION["dades"]);
            $serviceProduct = new ProductesServiceImpl();
            $fullPath = $dstFolder . basename($_FILES['foto']["name"]);
            $res = move_uploaded_file($_FILES['foto']['tmp_name'], $fullPath);
            if ($res) {
                $prod = new Producte( $_POST['referencia'], $_POST['titol'], $_POST['descripcio'], $_FILES['foto']['name']);
                $serviceProduct->addProducte($prod);
                $_SESSION["resultStore"] = "Producte afegit correctament";
                header('Location: ../controllers/productesController.php?action=list');
            }
        }
        break;
    case 'edit':
        // editem producte

        $referencia = (int)$_POST['referencia'] ?? null;
        //die(var_dump($referencia));
        $producte = $con->getProducteById($referencia);
        $producte->setTitol($_POST['titol']);
        $producte->setDescripcio($_POST['descripcio']);
        //die(var_dump($producte));


        if (isset($producte)) {
            $con->updateProducte($producte);
            //$con->closeConnection();
            header('Location: ../controllers/productesController.php?action=list');
        }
        break;

    case 'elimina':
        //esborrem producte
        $referencia = $_POST['referencia'] ?? null;

        $con = new ProductesServiceImpl();

        if (isset($referencia)) {
            $con->deleteProducteById($referencia);
            //$con->closeConnection();
            header('Location: ../controllers/productesController.php?action=list');
        }
        break;

    case 'list':
        //logica...
        $productes = $con->getAllProductes();
        $success = "tot ha anat bé!!!";
        $view = 'producte/list.php';
        include '../views/template.php';
        break;
}