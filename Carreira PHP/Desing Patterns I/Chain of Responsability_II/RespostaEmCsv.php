<?php
class RespostaEmCsv implements IResposta
{
    private $outraResposta;

    public function responde(Requisicao $Req, Conta $Conta)
    {
        if ($Req->getFormato() == Formato::$CSV) {
            echo $Conta->getTitular() . ";" . $Conta->getSaldo();
        } else {
            $this->outraResposta->responde($Req, $Conta);
        }
    }

    public function setProximaResposta($resposta)
    {
        $this->outraResposta = $resposta;
     
    }
}



?>