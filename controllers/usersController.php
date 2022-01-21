<?php
session_start();
include_once '../helpers.php';
include ('../model/Client.php');
include ('../services/client/ClientsServiceImpl.php');
$action = $_GET['action'];

$con = new ClientsServiceImpl();

switch ($action){
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

        $userTemp = new Client($dni, $nom, $adreca, $codPostal, $poble, $email, $telefon, $foto, $password);
        $_SESSION['loggedUser'] = $con->checkCred($userTemp);
        //var_dump($userTemp);
        //var_dump($_SESSION['loggedUser']);

        //$_SESSION['login'] = array(true, false);


            if (empty($_SESSION['loggedUser'])){
                header('Location: ../views/login.php');
            }else{
                header('Location: ../views/main.php');
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