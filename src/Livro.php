<?php 
class Livro 
{
    private string $titulo;
    private string $autor;
    private int $paginas = 0;  


//getters e setters

/*
    set = colocar dados
    get = pegar/ler dado 
*/

    // //Titulo
    // public function getTitulo():string{
    //     return $this->titulo;
    // }
    // public function setTitulo(string $recebeTitulo){
    //     $this->titulo = $recebeTitulo;
    // }


    // //Autor
    // public function getAutor():string{
    //     return $this->autor;
    // }
    // public function setAutor(string $recebeAutor){
    //     $this->autor = $recebeAutor;
    // }

    
    // //Paginas
    // public function getPaginas():int{
    //     return $this->paginas;
    // }
    // public function setPaginas(int $recebePaginas){
    //     $this->paginas = $recebePaginas;
    // }



    // TITULO
    public function getTitulo(): string
    {
        return $this->titulo;
    }

   
    public function setTitulo(string $titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    
    // AUTOR
    public function getAutor(): string
    {
        return $this->autor;
    }

   
    public function setAutor(string $autor)
    {
        $this->autor = $autor;

        return $this;
    }

        
    // PAGINAS
    public function getPaginas():int
    {
        return $this->paginas;
    }

    
    public function setPaginas(int $paginas)
    {
        $this->paginas = $paginas;

        return $this;
    }
}





