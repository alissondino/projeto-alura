<?php

class RealizadorDeInvestimentos
{
    public function realiza(Conta $conta, Investimento $investimento)
    {
        $resultado = $investimento->calcula($conta);
        $conta->deposita($resultado * 0.75 + $conta->getSaldo());
        return $conta->getSaldo();
    }
}



?>