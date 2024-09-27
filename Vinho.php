<?php

class Vinho {
    private $nome;
    private $tipo;
    private $preço;
    private $safra;


    //criando o construtor
    public function _contruct($nome, $tipo, $preço, $safra){

        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->preço = $preço;
        $this->safra = $safra;
    }
}

?> 
