<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO - EXERCICIOS</title>
</head>
<body>
    <h1>PHP POO - EXERCICIOS</h1>

    <?php
    require_once "src/Livro.php";

    // Criação do objeto
    $livro = new Livro;

    $livro->setTitulo("Harry Potter e o prisioneiro de azkaban");
    $livro->setAutor("J. K. Rowling");
    $livro->setPaginas(450);
    ?>

    <h2>Titulo do livro: <?=$livro->getTitulo()?></h2>

    <h2>Autor(a): <?=$livro->getAutor()?></h2>

    <h2>Páginas: <?=$livro->getPaginas()?></h2>
</body>
</html>
