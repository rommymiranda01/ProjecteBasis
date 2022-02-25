<?php

require_once ("IClientsService.php");

class ClientsServiceImpl implements IClientsService
{
    private $host;
    private $db;
    private $dsn;
    private $user;
    private $pass;
    public $conexio;

    public function __construct()
    {
        $this->host = 'mysql';
        $this->db = "daw_db";
        $this->dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db . ';';
        $this->user = 'rommy';
        $this->pass = "123456";
    }

    public function openConnection()
    {
        // TODO: Implement openConnection() method.
        try {
            $this->conexio = new PDO($this->dsn, $this->user, $this->pass);
            //echo 'Connexio feta<br>';
            return $this->conexio;
        }catch (PDOException $ex){
            echo "Error: " . $ex;
            return null;
        }
    }

    public function closeConnection()
    {
        // TODO: Implement closeConnection() method.
        try {
            $this->conexio=null;
            return $this->conexio;
        }catch (PDOException $ex){
            echo "Error: " . $ex;
            return null;
        }
    }

    public function getAllUsers(): array
    {
        // TODO: Implement getAllUsers() method.
        $this->openConnection();
        try{
            $statement = $this->conexio->prepare("SELECT * FROM clients");
            $statement->execute();
            $result = $statement->fetchAll();

            return $result;
        }catch(PDOException $ex){
            echo "Error: " . $ex;
        }
        $this->closeConnection();
        return array();
    }

    public function addUser(Client $c): bool
    {
        // TODO: Implement addUser() method.
        $this->openConnection();
        try{
            $statement = $this->conexio->prepare("INSERT INTO clients (dni, nom, adreca, codPostal, poble, email, telefon, foto, password) VALUES(?,?,?,?,?,?,?,?,?)");
            $res = $statement->execute(
                array($c->getDni(),$c->getNom(),$c->getAdreca(),$c->getCodPostal(),$c->getPoble(),$c->getEmail(),$c->getTelefon(),$c->getFoto(), $c->getPassword())
            );
            return $res;
        }catch(PDOException $ex){
            echo "Error: " . $ex;
        }
        $this->closeConnection();
        return false;
    }

    public function getUserById($id): Client
    {
        // TODO: Implement getUserById() method.
        $this->openConnection();
        $client = null;
        try{

            $statement = $this->conexio->prepare("SELECT * FROM clients WHERE id= ?");
            $statement->execute(
                array($id)
            );
            $result = $statement->fetch();
            $client = new Client($result['id'],$result['dni'],$result['nom'],$result['adreca'],$result['codPostal'], $result['poble'], $result['email'], $result['telefon'], $result['foto'], $result['password'], $result['rol']);
            return $client;
        }catch(PDOException $ex){
            echo "Error: " . $ex;
        }
        $this->closeConnection();
        return $client;
    }

    public function updateUserById(Client $c): bool
    {
        // TODO: Implement updateUserById() method.
        $this->openConnection();
        try{
            $querySql = "UPDATE clients SET nom=?, adreca=?, codPostal=?, poble=?, email=?, telefon=?, foto=?, password=? WHERE dni=?";
            $statement = $this->conexio->prepare($querySql);
            $res = $statement->execute(array($c->getNom(),$c->getAdreca(), $c->getCodPostal(), $c->getPoble(), $c->getEmail(), $c->getTelefon(), $c->getFoto(), $c->getPassword(), $c->getDni()
            ));
            return $res;
        }catch(PDOException $ex){
            echo "Error: " . $ex;
        }
        $this->closeConnection();
        return false;
    }

    public function deleteUserById($dni): bool
    {
        // TODO: Implement deleteUserById() method.
        $this->openConnection();
        try{
            $querySql = "DELETE FROM clients WHERE dni=?";
            $statement = $this->conexio->prepare($querySql);
            $res = $statement->execute(array(
                $dni
            ));

            return $res;

        }catch(PDOException $ex){
            echo "Error: " . $ex;
        }
        $this->closeConnection();
        return false;
    }

    public function getHistorialById($dni): array
    {
        // TODO: Implement getHistorialById() method.
        $this->openConnection();
        try{
            $statement = $this->conexio->prepare("SELECT * FROM historials 
           LEFT JOIN productes on historials.refProducte=productes.referencia 
           WHERE historials.dniClient=?");
            //$statement = $this->conexio->prepare("SELECT * FROM historials LEFT JOIN productes ON historials.refProducte = productes.referencia WHERE historials.dniClient=?");
            $statement->execute(array($dni));
            $result = $statement->fetchAll();

            return $result;
        }catch(PDOException $ex){
            echo "Error: " . $ex;
        }
        $this->closeConnection();
        return array();
    }

    public function rankClientActiu(): array
    {
        // TODO: Implement rankClientActiu() method.
        $this->openConnection();
        try{
            //$querySql = "SELECT dni, nom FROM clients WHERE dni=? ORDER BY dni DESC";
            //$querySql = "SELECT dni, nom FROM clients ORDER BY dni DESC";
            $querySql = "SELECT DISTINCT dni, nom, foto FROM clients LEFT JOIN historials on historials.dniClient=clients.dni ORDER BY dni DESC";
            $statement = $this->conexio->prepare($querySql);
            $statement->execute();
            $res = $statement->fetchAll();

            return $res;

        }catch(PDOException $ex){
            echo "Error: " . $ex;
        }
        $this->closeConnection();
        return array();
    }

    public function checkCred(Client $c): ?array
    {
        // TODO: Implement checkCred() method.
        $this->openConnection();
        try {
            $statement = $this->conexio->prepare("SELECT * FROM clients WHERE nom=? and password=?");
            $statement->execute(
                array($c->getNom(), $c->getPassword())
            );
            $result = $statement->fetch();
            if (!$result){
                return array();
            }else{
                return $result;
            }
        }catch (PDOException $ex){
            echo "Error: " . $ex;
        }
        $this->closeConnection();
        return array();
    }
}