<?php

interface IProductesService
{
    public function openConnection();
    public function closeConnection();
    public function getAllProductes() : array;
    public function addProducte(Producte $p) : bool;
    public function getProducteById(String $referencia):Producte;
    public function updateProducteById(Producte $p):bool;
    public function deleteProducteById($referencia):bool;
}