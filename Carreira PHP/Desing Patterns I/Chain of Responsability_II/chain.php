<?php

require_once "IResposta.php";
require_once "RespostaEmCsv.php";
require_once "RespostaEmPorcento.php";
require_once "RespostaEmXml.php";
class chain
// Quando eu tenho uma longa cadeia de opções e eu só quero aplicar um destas regras.
{
    public function defineResposta(Conta $Conta, Requisicao $Requisicao)
    {
        $r1 = new RespostaEmCsv();
        $r2 = new RespostaEmPorcento();
        $r3 = new RespostaEmXml();
   
        $r1->setProximaResposta($r2);
        $r2->setProximaResposta($r3);
        $r3->setProximaResposta($r1);
  
        $resposta = $r1->responde($Requisicao, $Conta);
    }
}
?>