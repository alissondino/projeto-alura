<?php

class ICCC implements Imposto
{
    public function calcula(Orcamento $Orcamento)
    {
        if($Orcamento->getValor()<1000){
            return $Orcamento -> getValor()*0.05;
        } else if($Orcamento -> getValor()>=1000 && $Orcamento->getValor()){   
            return $Orcamento -> getValor()*0.07;
        } else {
            return $Orcamento -> getValor()*0.03+30;
        }
        
    }
}

?>
