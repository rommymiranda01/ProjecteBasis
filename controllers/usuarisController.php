<?php
session_start();
include_once '../helpers.php';
include ('../model/Client.php');
include ('../services/client/ClientsServiceImpl.php');
$action = $_GET['action'];

$con = new ClientsServiceImpl();
//$con->openConnection();

$_SESSION["errors"] = false;

switch ($action) {
    case 'list':
        $clients = $con->getAllUsers();
        $view = 'client/llista.php';
        include '../views/template.php';
        break;

//    case 'add':
//        $view = 'client/registraClient.php';
//        include '../views/template.php';
//        break;

    case 'save':
        $_SESSION["dades"] = $_POST;

        if (!isset($_POST['dni']) || empty($_POST["dni"])){
            $_SESSION['msgErrorDni'] = 'Si us plau omple el camp corresponent al dni';
            $_SESSION['errors']=true;
        }

        if (!isset($_POST['nom']) || empty($_POST["nom"])){
            $_SESSION['msgErrorNom'] = 'Si us plau omple el camp corresponent al nom';
            $_SESSION['errors']=true;
        }

        if (!isset($_POST['adreca']) || empty($_POST["adreca"])){
            $_SESSION['msgErrorAdreca'] = 'Si us plau omple el camp corresponent a la adreça';
            $_SESSION['errors']=true;
        }

        if (!isset($_POST['codPostal']) || empty($_POST["codPostal"])){
            $_SESSION['msgErrorCodPostal'] = 'Si us plau omple el camp corresponent al codi postal';
            $_SESSION['errors']=true;
        }

        if (!isset($_POST['poble']) || empty($_POST["poble"])){
            $_SESSION['msgErrorPoble'] = 'Si us plau omple el camp corresponent al poble';
            $_SESSION['errors']=true;
        }

        if (!isset($_POST['email']) || empty($_POST["email"])){
            $_SESSION['msgErrorEmail'] = 'Si us plau omple el camp corresponent al email';
            $_SESSION['errors']=true;
        }

        if (!isset($_POST['telefon']) || empty($_POST["telefon"])){
            $_SESSION['msgErrorTelefon'] = 'Si us plau omple el camp corresponent al telefon';
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
            }
        }

        if ($_SESSION["errors"]){
            //header('Location: ../controllers/usuarisController.php?action=add');
            header('Location: ../views/registra.php');

        }else {
            unset($_SESSION["dades"]);
            $fullPath = $dstFolder . basename($_FILES['foto']["name"]);
            $res = move_uploaded_file($_FILES['foto']['tmp_name'], $fullPath);
            if ($res) {
                $c = new Client( $_POST['dni'], $_POST['nom'], $_POST['adreca'], $_POST['codPostal'], $_POST['poble'], $_POST['email'], $_POST['telefon'], $_FILES['foto']['name'], $_POST['password'], 'user');
                $con->addUser($c);
                //header('Location: ../controllers/usuarisController.php?action=list');
                header('Location: ../../views/login.php');
            }
        }
        break;

    case 'edit':
        $view = 'client/editaClient.php';
        include '../views/template.php';
        break;

    case 'editSave':
        $dni = $_POST['dni'] ?? null;
        //die(var_dump($referencia));
        $client = $con->getUserById($dni);
        $client->setNom($_POST['nom']);
        $client->setAdreca($_POST['adreca']);
        $client->setCodPostal($_POST['codPostal']);
        $client->setPoble($_POST['poble']);
        $client->setEmail($_POST['email']);
        $client->setTelefon($_POST['telefon']);
        $client->setPassword($_POST['password']);
        //die(var_dump($producte));

        if (!isset($_POST['nom']) || empty($_POST["nom"])){
            $_SESSION['msgErrorNom'] = 'Si us plau omple el camp corresponent al nom';
            $_SESSION['errors']=true;
        }

        if (!isset($_POST['adreca']) || empty($_POST["adreca"])){
            $_SESSION['msgErrorAdreca'] = 'Si us plau omple el camp corresponent a la adreça';
            $_SESSION['errors']=true;
        }

        if (!isset($_POST['codPostal']) || empty($_POST["codPostal"])){
            $_SESSION['msgErrorCodPostal'] = 'Si us plau omple el camp corresponent al codi postal';
            $_SESSION['errors']=true;
        }

        if (!isset($_POST['poble']) || empty($_POST["poble"])){
            $_SESSION['msgErrorPoble'] = 'Si us plau omple el camp corresponent al poble';
            $_SESSION['errors']=true;
        }

        if (!isset($_POST['email']) || empty($_POST["email"])){
            $_SESSION['msgErrorEmail'] = 'Si us plau omple el camp corresponent al email';
            $_SESSION['errors']=true;
        }

        if (!isset($_POST['telefon']) || empty($_POST["telefon"])){
            $_SESSION['msgErrorTelefon'] = 'Si us plau omple el camp corresponent al telefon';
            $_SESSION['errors']=true;
        }

        if ($_SESSION["errors"]){
            //die(var_dump($_SESSION));
            header('Location: ../controllers/usuarisController.php?action=edit');
        }

        if (isset($client)) {
            $con->updateUserById($client);
            header('Location: ../controllers/portadaController.php');
        }
        break;

    case 'elimina':
        $dni = $_POST['dni'] ?? null;

        if (isset($dni)){
            $con->deleteUserById($dni);
            header('Location: ../controllers/usuarisController.php?action=list');
        }
        break;

    case 'listHistorial':
        $dni = $_POST['dni'] ?? null;
        $historial = $con->getHistorialById($dni);
        $view = 'client/historialClient.php';
        include '../views/template.php';
        break;

    case 'rank':
        $rankClients = $con->rankClientActiu();
        $view = 'client/rank.php';
        include '../views/template.php';
        break;

    case 'checkLogin':
        $dni = $_POST['dni'] ?? null;
        $nom = $_POST['nom'] ?? null;
        $adreca = $_POST['adreca'] ?? null;
        $codPostal = $_POST['codPostal'] ?? null;
        $poble = $_POST['poble'] ?? null;
        $email = $_POST['email'] ?? null;
        $telefon = $_POST['telefon'] ?? null;
        $foto = $_POST['foto'] ?? null;
        $password = $_POST['password'] ?? null;
        $rol = $_POST['rol'] ?? null;

        $userTemp = new Client($dni, $nom, $adreca, $codPostal, $poble, $email, $telefon, $foto, $password,$rol);
        $_SESSION['loggedUser'] = $con->checkCred($userTemp);
        //var_dump($userTemp);
        //var_dump($_SESSION['loggedUser']);

        if (empty($_SESSION['loggedUser'])){
            header('Location: ../views/login.php');
        }else{
            header('Location: ../controllers/portadaController.php');
        }

        break;

    case 'login':
        $view = 'login.php';
        include '../views/template.php';
        break;

    case 'logout':
        unset($_SESSION['loggedUser']);
        header('Location: ../views/login.php');
        break;

}