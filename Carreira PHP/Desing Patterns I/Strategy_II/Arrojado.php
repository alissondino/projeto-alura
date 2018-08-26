<?php

class Arrojado implements Investimento
{
    private $random;

    public function calcula(Conta $Conta)
    {
        $this->random = mt_rand(1, 100);
        if ($this->random >= 1 && $this->random <= 20){
            return $Conta->getSaldo() * 0.05;  
        } else if ($this->random > 20 && $this->random <= 50) {
            return $Conta->getSaldo() * 0.03;
        } else {
            return $Conta->getSaldo() * 0.006;
        } 
    }
}


?>