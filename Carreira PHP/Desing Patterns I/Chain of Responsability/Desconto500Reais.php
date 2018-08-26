<?php

class Desconto500Reais implements Desconto
{
    private $proximoDesconto;


    public function desconto(Orcamento $Orcamento)
    {
        if ($Orcamento->getValor() > 500) {
            
            return $Orcamento->getValor() * 0.07;
        } else {
            
            return $this->proximoDesconto->desconto($Orcamento);
        }

    }

    public function setProximoDesconto(Desconto $ProximoDesconto)
    {
        $this->proximoDesconto = $ProximoDesconto;
    }
}


?>