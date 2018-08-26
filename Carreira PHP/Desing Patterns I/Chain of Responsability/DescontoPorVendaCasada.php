<?php


class DescontoPorVendaCasada implements Desconto
{
    private $proximoDesconto;
    
    public function aconteceuVendaCasadaEm(Orcamento $Orcamento)
    {
        return $this->existe("CANETA", $Orcamento) && $this->existe("LAPIS", $Orcamento);
    }

    public function existe(String $nomeDoItem, Orcamento $Orcamento)
    {
        foreach ($Orcamento->getItens() as $cadaItem) {
            if ($cadaItem->getNome() == $nomeDoItem) {
                return true;
            }
        }
        return false;
    }

    public function setProximoDesconto(Desconto $proximoDesconto)
    {
        $this->proximoDesconto = $proximoDesconto;
    }

    public function desconto(Orcamento $Orcamento)
    {
        if($this->aconteceuVendaCasadaEm($Orcamento)) {
            return $Orcamento->getValor() * 0.05;
        }else{
            return $this->proximoDesconto->desconto($Orcamento);
        }
    }
    
   

}
?>