<?php

interface IProductesService
{
    public function openConnection();
    public function closeConnection();
    public function getAllProductes() : array;
    public function addProducte(Producte $p) : bool;
    public function getProducteById(String $id):Producte;
    public function updateProducte(Producte $p):bool;
    public function deleteProducteById($id):bool;
    public function rankLlogats():array;
    public function llistaEndarreriments():array;
}