<?php

class RespostaEmXml implements IResposta
{
    private $outraResposta;

    public function setProximaResposta($resposta)
    {
        $this->outraResposta = $resposta;
    }

    public function responde(Requisicao $Req, Conta $Conta)
    {
        if ($Req->getFormato() == Formato::$XML) {
            echo "<conta><titular>" . $Conta->getTitular() . "</titular><saldo>" . $Conta->getSaldo() . "</saldo></conta>";
        } else {
            $this->$outraResposta->responde($Req, $Conta);
        }
    }
}
?>