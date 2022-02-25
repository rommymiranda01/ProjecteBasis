<?php

class Client
{
    private $id;
    private $dni;
    private $nom;
    private $adreca;
    private $codPostal;
    private $poble;
    private $email;
    private $telefon;
    private $foto;
    private $password;
    private $rol;

    /**
     * @param $id
     * @param $dni
     * @param $nom
     * @param $adreca
     * @param $codPostal
     * @param $poble
     * @param $email
     * @param $telefon
     * @param $foto
     * @param $password
     * @param $rol
     */
    public function __construct($id, $dni, $nom, $adreca, $codPostal, $poble, $email, $telefon, $foto, $password, $rol)
    {
        $this->id = $id;
        $this->dni = $dni;
        $this->nom = $nom;
        $this->adreca = $adreca;
        $this->codPostal = $codPostal;
        $this->poble = $poble;
        $this->email = $email;
        $this->telefon = $telefon;
        $this->foto = $foto;
        $this->password = $password;
        $this->rol = $rol;
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

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * @param mixed $rol
     */
    public function setRol($rol): void
    {
        $this->rol = $rol;
    }


}