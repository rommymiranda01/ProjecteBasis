<?php
session_start();
include_once '../helpers.php';
include('../model/Producte.php');
include('../services/producte/ProductesServiceImpl.php');

$con = new ProductesServiceImpl();

$rankP = $con->rankLlogats();

$view = 'producte/sliderProductes.php';
include '../views/template.php';