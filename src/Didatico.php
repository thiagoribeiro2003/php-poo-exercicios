<?php
namespace Exercicio;
require_once "Tecnico.php";

Class Didatico extends Tecnico
{
    private string $disciplina;
    private array $nivel = ["Básico", "Médio", "Superior"]; 

   
    
    public function getDisciplina(): string
    {
        return $this->disciplina;
    }

    public function setDisciplina(string $disciplina)
    {
        $this->disciplina = $disciplina;

        return $this;
    }

    


    public function getNivel(): array
    {
        return $this->nivel;
    }

    public function setNivel(array $nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }
}