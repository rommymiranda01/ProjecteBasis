<?php
session_start();
include_once '../helpers.php';
include('../model/Producte.php');
include('../model/Client.php');
include('../services/producte/ProductesServiceImpl.php');
include('../services/client/ClientsServiceImpl.php');

$con = new ProductesServiceImpl();
$conex= new ClientsServiceImpl();

$rankP = $con->rankLlogats();
$rankC = $conex->rankClientActiu();

$view = 'producte/sliderProductes.php';
include '../views/template.php';