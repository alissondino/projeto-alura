<?php


class SemDesconto implements Desconto
{
    public function desconto(Orcamento $Orcamento){
         return 0;
    }
    public function setProximoDesconto(Desconto $ProximoDesconto)
    {
        // Fim da corrente - Não faz nada
    }
}

?>