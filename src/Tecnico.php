<?php
require_once "Livro.php";
Class Tecnico extends Livro
{
private array $formato = ["digital", "físico"];



public function getFormato():string
{
return implode($this->formato);
}


public function setFormato(array $formato)
{
$this->formato = $formato;

return $this;
}
}