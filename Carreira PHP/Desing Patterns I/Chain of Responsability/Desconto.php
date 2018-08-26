<?php


interface Desconto
{
    public function desconto(Orcamento $Orcamento);
    public function setProximoDesconto(Desconto $ProximoDesconto);
}

?>