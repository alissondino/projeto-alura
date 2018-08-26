<?php


require_once "Conta.php";
require_once "chain.php";
require_once "Formato.php";
require_once "IResposta.php";
require_once "Requisicao.php";
require_once "RespostaEmCsv.php";
require_once "RespostaEmPorcento.php";
require_once "RespostaEmXml.php";


$minhaConta = new Conta("Alisson Gabriel", 1200);
$minhaRequisicao = new Requisicao(Formato::$XML);
$corrente = new chain();
echo $corrente->defineResposta($minhaConta, $minhaRequisicao);
?>