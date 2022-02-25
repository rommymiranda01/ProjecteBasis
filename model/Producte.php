<?php

class Producte
{
    private $id;
    private $referencia;
    private $titol;
    private $descripcio;
    private $imatge;

    /**
     * @param $id
     * @param $referencia
     * @param $titol
     * @param $descripcio
     * @param $imatge
     */
    public function __construct($id, $referencia, $titol, $descripcio, $imatge)
    {
        $this->id = $id;
        $this->referencia = $referencia;
        $this->titol = $titol;
        $this->descripcio = $descripcio;
        $this->imatge = $imatge;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * @param mixed $referencia
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;
    }

    /**
     * @return mixed
     */
    public function getTitol()
    {
        return $this->titol;
    }

    /**
     * @param mixed $titol
     */
    public function setTitol($titol)
    {
        $this->titol = $titol;
    }

    /**
     * @return mixed
     */
    public function getDescripcio()
    {
        return $this->descripcio;
    }

    /**
     * @param mixed $descripcio
     */
    public function setDescripcio($descripcio)
    {
        $this->descripcio = $descripcio;
    }

    /**
     * @return mixed
     */
    public function getImatge()
    {
        return $this->imatge;
    }

    /**
     * @param mixed $imatge
     */
    public function setImatge($imatge)
    {
        $this->imatge = $imatge;
    }

}