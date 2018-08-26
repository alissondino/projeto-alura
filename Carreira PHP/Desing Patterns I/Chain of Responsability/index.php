<?php
require "Orcamento.php";
require "Item.php";
require "Desconto.php";
require "SemDesconto.php";
require "Desconto500Reais.php";
require "Desconto300reais.php";
require "Desconto5Itens.php";
require "CalculadoraDeImpostos.php";
require "CalculadoraDeDescontos.php";
require "Imposto.php";
require "ICMS.php";
require "ISS.php";
require "KCV.php";
require "ICCC.php";

$reforma = new Orcamento(800);
$reforma->addItens(new Item("Tijolo", 300));
$reforma->addItens(new Item("Areia 10kg", 500));

$calculadora = new CalculadoraDeImpostos();

// echo $calculadora->calcula($reforma, new ICMS());
// echo "<br>";
// echo $calculadora->calcula($reforma, new ISS());
// echo "<br>";
// echo $calculadora->calcula($reforma, new KCV());
// echo "<br>O valor do imposto ICCC é : ";
// echo $calculadora->calcula($reforma, new ICCC());
// echo "<br><hr><br><h1>Descontos - Chain of Responsability</h1><br>";

$SegundoOrcamento = new Orcamento(500.0);
$SegundoOrcamento->addItens(new Item("CANETA", 300));
$SegundoOrcamento->addItens(new Item("LAPIS", 300));


$calculadoraDescontos = new CalculadoraDeDescontos();
echo "O valor de desconto para o orçamento em questão é de: " . $calculadoraDescontos->desconto($reforma) . " reais.</br>";
echo "<hr>";
echo "O valor de desconto para o orçamento em questão é de: " . $calculadoraDescontos->desconto($SegundoOrcamento) . " reais.</br>";
?>