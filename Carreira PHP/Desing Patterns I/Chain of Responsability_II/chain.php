<?php

require_once "IResposta.php";
require_once "RespostaEmCsv.php";
require_once "RespostaEmPorcento.php";
require_once "RespostaEmXml.php";
class chain
// Quando eu tenho uma longa cadeia de opções e eu só quero aplicar um destas regras.
/*
O padrão Chain of Responsibility cai como uma luva quando temos uma lista de comandos a serem executados de acordo com algum cenário em específico, e sabemos também qual o próximo cenário que deve ser validado, caso o anterior não satisfaça a condição.
Nesses casos, o Chain of Responsibility nos possibilita a separação de responsabilidades em classes pequenas e enxutas, e ainda provê uma maneira flexível e desacoplada de juntar esses comportamentos novamente.
*/


{
    public function defineResposta(Conta $Conta, Requisicao $Requisicao)
    {
        $r1 = new RespostaEmCsv($r2);
        $r2 = new RespostaEmPorcento($r3);
        $r3 = new RespostaEmXml($r1);
   
        $r1->setProximaResposta($r2);
        $r2->setProximaResposta($r3);
        $r3->setProximaResposta($r1);
  
        $resposta = $r1->responde($Requisicao, $Conta);
    }
}
?>