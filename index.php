<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO - EXERCICIOs</title>
</head>
<body>
    <h1>PHP POO - EXERCICIO 2</h1>

    <?php
    require_once "src/Tecnico.php";
    require_once "src/Programacao.php";
    require_once "src/Didatico.php";

    // Criação do objeto Tecnico
    $tecnico = new Tecnico;
    $tecnico->setFormato(['físico']);
    $tecnico->setTitulo('Manual Do Back-End');
    $tecnico->setAutor('Genérico');
    $tecnico->setPaginas(462);
    

    // Criação do objeto Programacao
    $programacao = new Programacao;
    $programacao->setArea('Web');
    
    // Criação do objeto Didatico
    $didatico = new Didatico;
    $didatico->setDisciplina('Programação');
    $didatico->setNivel(['Superior']);
    ?>

    <h1>Livro</h1>
    <p><strong>Título do Livro:</strong> <?=$tecnico->getTitulo()?></p>
    <p><strong>Autor:</strong> <?=$tecnico->getAutor()?></p>
    <p><strong>Páginas:</strong> <?=$tecnico->getPaginas()?></p>
    <hr>

    
    <h2>Formato</h2>
    <p><strong>Formato:<strong> <?=$tecnico->getFormato()?></p>
    <hr>

    <h2>Informações do Livro</h2>
    <p><strong>Área:</strong> <?=$programacao->getArea()?></p>
    <p><strong>Disciplina:</strong> <?=$didatico->getDisciplina()?></p>
    <p><strong>Nível:</strong> <?=implode(',', $didatico->getNivel()) ?></h2>

    <h2></h2>


    
    

   
</body>
</html>
