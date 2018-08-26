<?php
require_once "Desconto500Reais.php";
require_once "Desconto300Reais.php";
require_once "Desconto5Itens.php";
require_once "SemDesconto.php";
require_once "DescontoPorVendaCasada.php";
class CalculadoraDeDescontos
// Quando eu tenho uma longa cadeia de opções e eu só quero aplicar um destas regras.
{
    public function desconto(Orcamento $Orcamento)
    {

        $d1 = new Desconto5Itens();
        $d2 = new Desconto500Reais();
        $d3 = new DescontoPorVendaCasada();
        $d4 = new SemDesconto();

        $d1->setProximoDesconto($d2);
        $d2->setProximoDesconto($d3);
        $d3->setProximoDesconto($d4);


        $desconto = $d1->desconto($Orcamento);
        return $desconto;
        
    }

}

    // Primeiros exemplos
        /*
        $desconto500Reais = new Desconto500Reais();
        $desconto300Reais = new Desconto300Reais();
        $desconto5Itens = new Desconto5Itens();
        $semDesconto = new SemDesconto();
        
        $desconto500Reais->setProximoDesconto($desconto300Reais);
        $desconto300Reais->setProximoDesconto($desconto5Itens);
        $desconto5Itens->setProximoDesconto($semDesconto);
 */
/*
        Segundo Exemplo
        $d1 = new Desconto500Reais();
        $d2 = new Desconto5Itens();
        $sd = new SemDesconto();

        $d1->setProximoDesconto($d2);
        $d2->setProximoDesconto($sd);
        $valorDoDesconto = $d1->desconto($Orcamento);

        return $valorDoDesconto;
 */
?>
