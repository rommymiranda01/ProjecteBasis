<?php

require_once ("IProductesService.php");

class ProductesServiceImpl implements IProductesService
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

    public function getAllProductes(): array
    {
        // TODO: Implement getAllProductes() method.
        $this->openConnection();
        try{
            $statement = $this->conexio->prepare("SELECT * FROM productes");
            $statement->execute();
            $result = $statement->fetchAll();

            return $result;
        }catch(PDOException $ex){
            echo "Error: " . $ex;
        }
        $this->closeConnection();
        return array();
    }

    public function addProducte(Producte $p): bool
    {
        // TODO: Implement addProducte() method.
        $this->openConnection();
        try{
            $statement = $this->conexio->prepare("INSERT INTO productes (referencia, titol, descripcio, imatge) VALUES(?,?,?,?)");
            $res = $statement->execute(
                array($p->getReferencia(), $p->getTitol(), $p->getDescripcio(), $p->getImatge())
            );
            return $res;
        }catch(PDOException $ex){
            echo "Error: " . $ex;
        }
        $this->closeConnection();
        return false;
    }

    public function getProducteById($referencia): Producte
    {
        // TODO: Implement getProducteById() method.
        $this->openConnection();
        $producte = null;
        try{
            $statement = $this->conexio->prepare("SELECT * FROM productes WHERE referencia= ?");
            $statement->execute(
                array($referencia)
            );
            $result = $statement->fetch();
            $producte = new Producte($result['referencia'],$result['titol'],$result['descripcio'],$result['imatge']);
            return $producte;
        }catch(PDOException $ex){
            echo "Error: " . $ex;
        }
        $this->closeConnection();
        return $producte;
    }

    public function updateProducte(Producte $p): bool
    {
        // TODO: Implement updateProducteById() method.
        $this->openConnection();
        try{
            $querySql = "UPDATE productes SET titol=?, descripcio=?, imatge=? WHERE referencia=?";
            $statement = $this->conexio->prepare($querySql);
            $res = $statement->execute(array($p->getTitol(), $p->getDescripcio(), $p->getImatge(), $p->getReferencia()
            ));
            return $res;
        }catch(PDOException $ex){
            echo "Error: " . $ex;
        }
        $this->closeConnection();
        return false;
    }

    public function deleteProducteById($referencia): bool
    {
        // TODO: Implement deleteProducteById() method.
        $this->openConnection();
        try{
            $querySql = "DELETE FROM productes WHERE referencia=?";
            $statement = $this->conexio->prepare($querySql);
            $res = $statement->execute(array(
                $referencia
            ));

            return $res;

        }catch(PDOException $ex){
            echo "Error: " . $ex;
        }
        $this->closeConnection();
        return false;
    }

    public function rankLlogats(): array
    {
        // TODO: Implement rankLlogats() method.
        $this->openConnection();
        try{
            $querySql = "SELECT referencia,titol, descripcio, imatge, COUNT(referencia) as productes_llogats FROM productes
            LEFT JOIN historials on historials.refProducte=productes.referencia
            GROUP BY 1 ORDER BY productes_llogats DESC;";
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

    public function llistaEndarreriments(): array
    {
        // TODO: Implement llistaEndarreriments() method.
        $this->openConnection();
        try{
            $querySql = "SELECT refProducte, dniClient, data FROM historials WHERE tipusMov='L'";
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
}