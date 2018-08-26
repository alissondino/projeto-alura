<?php

class Orcamento 
{
    // Propriedades

    private $valor; 
    private $itens;


    public function __construct($novoValor)
    {
        $this->valor = $novoValor;
        $this->itens=[];
    }
    // Getter and Setters

    public function getValor()
    {
        return $this -> valor;
    }

    public function setValor($novoValor)
    {
        $this -> valor = $novoValor;
    }

    public function getItens()
    {
        return $this->itens;
    }
    public function addItens($novoItem)
    {
        $this->itens[]=$novoItem;
    }




}

