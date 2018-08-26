<?php


interface IResposta 
{
    public function responde(Requisicao $Req, Conta $Conta);
    public function setProximaResposta(Resposta $resposta);
}


?>