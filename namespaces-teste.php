<?php
namespace Html;
 Class Teste {
    public string $frase = "Olá, Mundo!";
    public int $numero = 25;
    public function message(){
        echo "<p>Olá, Mundo!</p>";
    }
 }

$classe = new Teste();
$classe->title = "Olá, Mundo (dnv)";
$classe->numRows = 5;

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namespaces - Teste</title>
</head>
<body>
    <h1>Teste</h1>
    <?php

    ?>
</body>
</html>