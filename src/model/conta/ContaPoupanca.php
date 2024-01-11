<?php

namespace Alura\Banco\model\conta;

class ContaPoupanca extends Conta
{
    public function percentualTarifa(): float
    {
        return 0.03;
    }
}