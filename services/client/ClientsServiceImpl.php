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
            $statement = $this->conexio->prepare("INSERT INTO clients (dni, nom, adreca, codPostal, poble, email, telefon, foto) VALUES(?,?,?,?,?,?,?,?)");
            $res = $statement->execute(
                array($c->getDni(),$c->getNom(),$c->getAdreca(),$c->getCodPostal(),$c->getPoble(),$c->getEmail(),$c->getTelefon(),$c->getFoto())
            );
            return $res;
        }catch(PDOException $ex){
            echo "Error: " . $ex;
        }
        $this->closeConnection();
        return false;
    }

    public function getUserById($dni): Client
    {
        // TODO: Implement getUserById() method.
        $this->openConnection();
        $client = null;
        try{

            $statement = $this->conexio->prepare("SELECT * FROM clients WHERE dni= ?");
            $statement->execute(
                array($dni)
            );
            $result = $statement->fetch();
            $client = new Client($result['dni'],$result['nom'],$result['adreca'],$result['codPostal'], $result['poble'], $result['email'], $result['telefon'], $result['foto']);
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
            $querySql = "UPDATE clients SET nom=?, adreca=?, codPostal=?, poble=?, email=?, telefon=?, foto=? WHERE dni=?";
            $statement = $this->conexio->prepare($querySql);
            $res = $statement->execute(array($c->getNom(),$c->getAdreca(), $c->getCodPostal(), $c->getPoble(), $c->getEmail(), $c->getTelefon(), $c->getFoto(), $c->getDni()
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

    /*public function checkCreds(Client $c): ?array
    {
        // TODO: Implement checkCreds() method.
        $this->openConnection();
        //$user = null;
        try{

            $statement = $this->conexio->prepare("SELECT * FROM clients WHERE username= ? and password= ?");
            $statement->execute(
                array($u->getUsername(), $u->getPassword())
            );
            $result = $statement->fetch();
            //$user = new User($result['idUser'],$result['username'],$result['pass']);
            if (!$result){
                return array();
            }else{
                return $result;
            }
        }catch(PDOException $ex){
            echo "Error: " . $ex;

        }
        $this->closeConnection();
        return array();
    }*/
}