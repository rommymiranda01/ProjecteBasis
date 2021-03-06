<?php

interface IClientsService
{
    public function openConnection();
    public function closeConnection();
    public function  getAllUsers():array;
    public function addUser(Client $c): bool;
    public function  getUserById(String $idClient):Client;
    public function updateUserById(Client $c):bool;
    public function deleteUserById($idClient):bool;
    public function getHistorialById($id):array;
    public function rankClientActiu():array;
    public function checkCred(Client $c) : ?array;
}