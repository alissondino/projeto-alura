<?php

require "Investimento.php";
require "Conta.php";
require "RealizadorDeInvestimentos.php";
require "Conservador.php";
require "Moderado.php";
require "Arrojado.php";


$minhaConta = new Conta();
$minhaConta->deposita(500);
echo "O saldo da conta é : ".$minhaConta->getSaldo()." reais. <br>";

$realizaInvestimento = new RealizadorDeInvestimentos();
echo $realizaInvestimento->realiza($minhaConta,new Arrojado());

?>