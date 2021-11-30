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
            return $producte;
        }
    }

    public function updateProducteById(Producte $p): bool
    {
        // TODO: Implement updateProducteById() method.
        try{
            $querySql = "UPDATE productes SET titol=?, descripcio=?, imatge=? WHERE referencia=?";
            $statement = $this->conexio->prepare($querySql);
            $res = $statement->execute(array($p->getTitol(), $p->getDescripcio(), $p->getImatge(), $p->getReferencia()
            ));
            return $res;
        }catch(PDOException $ex){
            echo "Error: " . $ex;
        }
        return false;
    }

    public function deleteProducteById($referencia): bool
    {
        // TODO: Implement deleteProducteById() method.
        //$this->openConnection();
        try{
            $querySql = "DELETE FROM productes WHERE referencia=?";
            $statement = $this->conexio->prepare($querySql);
            $res = $statement->execute(array(
                $referencia
            ));

            return $res;

        }catch(PDOException $ex){
            echo "Error: " . $ex;
            //  $this->closeConnection();
        }
        return false;
    }
}