<?php

class Historial
{
    private $id;
    private $referencia;
    private $dataiHora;
    private $tipusMoviment;
    private $dni;

    /**
     * @param $id
     * @param $referencia
     * @param $dataiHora
     * @param $tipusMoviment
     * @param $dni
     */
    public function __construct($id, $referencia, $dataiHora, $tipusMoviment, $dni)
    {
        $this->id = $id;
        $this->referencia = $referencia;
        $this->dataiHora = $dataiHora;
        $this->tipusMoviment = $tipusMoviment;
        $this->dni = $dni;
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
    public function setReferencia($referencia): void
    {
        $this->referencia = $referencia;
    }

    /**
     * @return mixed
     */
    public function getDataiHora()
    {
        return $this->dataiHora;
    }

    /**
     * @param mixed $dataiHora
     */
    public function setDataiHora($dataiHora): void
    {
        $this->dataiHora = $dataiHora;
    }

    /**
     * @return mixed
     */
    public function getTipusMoviment()
    {
        return $this->tipusMoviment;
    }

    /**
     * @param mixed $tipusMoviment
     */
    public function setTipusMoviment($tipusMoviment): void
    {
        $this->tipusMoviment = $tipusMoviment;
    }

    /**
     * @return mixed
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * @param mixed $dni
     */
    public function setDni($dni): void
    {
        $this->dni = $dni;
    }

}