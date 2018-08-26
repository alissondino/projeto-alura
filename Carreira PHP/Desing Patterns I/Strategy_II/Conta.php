<?php

class Conta
{
    private $saldo;

    public function deposita($saldo)
    {
        $this -> saldo = $saldo;
    }
    
    public function getSaldo()
    {
        return $this -> saldo;
    }
} 

?>