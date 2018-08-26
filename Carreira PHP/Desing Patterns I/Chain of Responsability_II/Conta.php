<?php


class Conta
{
    private $titular;
    private $saldo;

    public function __construct($titular,$saldo)
    {
        $this -> titular = $titular;
        $this -> saldo = $saldo;
    }
    public function getTitular(){
        return $this->titular;
    }
    public function setTitular($novoTitular){
        $this -> titular = $novoTitular;
    }
    public function getSaldo(){
        return $this -> saldo;
    }
    public function setSaldo($novoSaldo){
        $this->saldo = $novoSaldo;
    }
}


?>