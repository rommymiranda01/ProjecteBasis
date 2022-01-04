<?php

interface IHistorialsService
{
    public function openConnection();
    public function closeConnection();
    public function getAllHistorials() : array;
    public function addHistorial(Historial $h) : bool;
    public function updateHistorial(Historial $h) : bool;
    public function deleteHistorial($referencia):bool;
    public function getHistorialById(String $referencia):Historial;
}