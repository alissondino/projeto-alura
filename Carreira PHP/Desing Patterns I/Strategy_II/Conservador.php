<?php

class Conservador implements Investimento
{
    public function calcula(Conta $Conta)
    {
        return $Conta->getSaldo()*0.008;
    }
}

?>