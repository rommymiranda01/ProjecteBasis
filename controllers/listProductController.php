<?php
include_once "../model/Producte.php";
include_once "../services/producte/ProductesServiceImpl.php";
session_start();

$serviceProduct = new ProductesServiceImpl();
$_SESSION['llistaProductes'] = $serviceProduct->getAllProductes();

header("Location: ../views/main.php");