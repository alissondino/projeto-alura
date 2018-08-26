<?php
// A estrutura montada no metódo calcula é um Desing Pattern chamado de Strategy
// Injetamos a lógica Orientada a objetos aqui e pertimos a criação de novos impostos de forma simples
class CalculadoraDeImpostos
{
    public function calcula(Orcamento $Orcamento,Imposto $imposto)
    {
        return $imposto->calcula($Orcamento);
    }
}