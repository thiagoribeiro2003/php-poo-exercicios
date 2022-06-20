<?php
namespace Exercicio;


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




    public function formataTitulo(string $titulo):string
    {
        return "<i style = 'color: blue'>".($titulo)."</i>";
    }
}