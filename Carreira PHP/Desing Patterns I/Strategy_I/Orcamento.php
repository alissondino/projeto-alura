<?php

class Orcamento 
{
    // Propriedades

    private $valor; 

    // Getter and Setters

    public function getValor()
    {
        return $this -> valor;
    }

    public function setValor($novoValor)
    {
        $this -> valor = $novoValor;
    }

    // Metodos da classe

    public function __construct($novoValor)
    {
        $this -> valor = $novoValor;
    }


}

