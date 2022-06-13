<?php
require_once "Tecnico.php";

Class Programacao extends Tecnico
{
    private string $area;

   
    public function getArea(): string
    {
        return $this->area;
    }

    public function setArea(string $area)
    {
        $this->area = $area;

        return $this;
    }
}