<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO - EXERCICIOs 4</title>
</head>
<body>
    <h1>PHP POO - EXERCICIO 4 (Namespaces, Composer e Autoload de classes) </h1>

    <?php
    /*Require do autoload de classes*/
    require_once "vendor/autoload.php";

   /*Usando as classes a partir de um namespaces comum*/ 
    $livroWeb = new Exercicio\Web;
    

    // Criação do objeto Tecnico
    $tecnico = new Exercicio\Tecnico; /*Usando as classes a partir de um namespaces comum*/
    $tecnico->setFormato(['físico']);
    $tecnico->setTitulo('Manual Do Back-End');
    $tecnico->setAutor('Genérico');
    $tecnico->setPaginas(462);
   
    

    // Criação do objeto Programacao
    $programacao = new Exercicio\Programacao; /*Usando as classes a partir de um namespaces comum*/
    $programacao->setArea('Web');
    $programacao -> setTitulo('Olá Mundo');
    
    // Criação do objeto Didatico
    $didatico = new Exercicio\Didatico; /*Usando as classes a partir de um namespaces comum*/
    $didatico->setDisciplina('Programação');
    $didatico->setNivel(['Superior']);

    $didatico->setPaginas(500);
    ?>

    <h1>Livro</h1>
    <!-- Exercicio 3 -->
    <p><?=$tecnico->formataTitulo($tecnico->getTitulo())?></p>
    <h2><strong>Título do Livro Maiúsculo:</strong> <?=$tecnico->formataTitulo($tecnico->getTitulo())?></h2>
    
    <p><strong>Autor:</strong> <?=$tecnico->getAutor()?></p>
    <p><strong>Páginas:</strong> <?=$tecnico->getPaginas()?></p>
    <hr>

    <!-- Exercicio 3 -->
    <h2>Título do livro em Itálico e Azul: <?=$programacao->formataTitulo($programacao->getTitulo())?></h2>

    


    <h2>Formato</h2>
    <p><strong>Formato:<strong> <?=$tecnico->getFormato()?></p>
    <hr>

    <h2>Informações do Livro</h2>
    <p><strong>Área:</strong> <?=$programacao->getArea()?></p>
    <p><strong>Disciplina:</strong> <?=$didatico->getDisciplina()?></p>

    <p><strong>Nível:</strong> <?= implode(',', $didatico->getNivel()) ?></h2>


<?php

   foreach ($didatico->getNivel() as $nivel) { ?>
        <p> <?=$nivel?> </p>
<?php }?>


<?php if ($didatico->getPaginas() > 100) { ?>
    <p>Traga uma mochila</p>
<?php } ?>

    


    
    

   
</body>
</html>
