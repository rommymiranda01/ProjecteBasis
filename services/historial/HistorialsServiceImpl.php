<?php

require_once ("IHistorialsService.php");

class HistorialsServiceImpl implements IHistorialsService
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

    public function getAllHistorials(): array
    {
        // TODO: Implement getAllHistorials() method.
        $this->openConnection();
        try{
            $statement = $this->conexio->prepare("SELECT * FROM historials");
            $statement->execute();
            $result = $statement->fetchAll();

            return $result;
        }catch(PDOException $ex){
            echo "Error: " . $ex;
        }
        $this->closeConnection();
        return array();
    }

    public function addHistorial(Historial $h): bool
    {
        // TODO: Implement addHistorial() method.
        $this->openConnection();
        try{
            $statement = $this->conexio->prepare("INSERT INTO historials (id, refProducte, dniClient, data , tipusMov) VALUES(null, ?,?,?,?)");
            $res = $statement->execute(
                array($h->getReferencia(), $h->getDni(), $h->getDataiHora(), $h->getTipusMoviment())
            );
            return $res;
        }catch(PDOException $ex){
            echo "Error: " . $ex;
        }
        $this->closeConnection();
        return false;
    }

    public function updateHistorial(Historial $h): bool
    {
        // TODO: Implement updateHistorial() method.
    }

    public function deleteHistorial($id): bool
    {
        // TODO: Implement deleteHistorial() method.
    }
}