<?php

namespace Alura\Banco\model\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return 500.0;
    }

    public function sobeDeNivel()
    {
        $this->recebeAumento($this->getSalario() * 0.75);
    }
}