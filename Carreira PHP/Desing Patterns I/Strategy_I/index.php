<?php
    require "Orcamento.php";
    require "CalculadoraDeImpostos.php";
    require "Imposto.php";
    require "ICMS.php";
    require "ISS.php";
    require "KCV.php";
    require "ICCC.php";

    $reforma = new Orcamento(1200);

    $calculadora = new CalculadoraDeImpostos();

    echo $calculadora->calcula($reforma,new ICMS());
    echo "<br>";
    echo $calculadora->calcula($reforma,new ISS());
    echo "<br>";
    echo $calculadora->calcula($reforma, new KCV());
    echo "<br>O valor do imposto ICCC é : ";
    echo $calculadora->calcula($reforma, new ICCC());


?>