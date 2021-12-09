<?php

class Client
{
    private $dni;
    private $nom;
    private $adreca;
    private $codPostal;
    private $poble;
    private $email;
    private $telefon;
    private $foto;

    /**
     * @param $dni
     * @param $nom
     * @param $adreca
     * @param $codPostal
     * @param $poble
     * @param $email
     * @param $telefon
     * @param $foto
     */
    public function __construct($dni, $nom, $adreca, $codPostal, $poble, $email, $telefon, $foto)
    {
        $this->dni = $dni;
        $this->nom = $nom;
        $this->adreca = $adreca;
        $this->codPostal = $codPostal;
        $this->poble = $poble;
        $this->email = $email;
        $this->telefon = $telefon;
        $this->foto = $foto;
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

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getAdreca()
    {
        return $this->adreca;
    }

    /**
     * @param mixed $adreca
     */
    public function setAdreca($adreca): void
    {
        $this->adreca = $adreca;
    }

    /**
     * @return mixed
     */
    public function getCodPostal()
    {
        return $this->codPostal;
    }

    /**
     * @param mixed $codPostal
     */
    public function setCodPostal($codPostal): void
    {
        $this->codPostal = $codPostal;
    }

    /**
     * @return mixed
     */
    public function getPoble()
    {
        return $this->poble;
    }

    /**
     * @param mixed $poble
     */
    public function setPoble($poble): void
    {
        $this->poble = $poble;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * @param mixed $telefon
     */
    public function setTelefon($telefon): void
    {
        $this->telefon = $telefon;
    }

    /**
     * @return mixed
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * @param mixed $foto
     */
    public function setFoto($foto): void
    {
        $this->foto = $foto;
    }

}