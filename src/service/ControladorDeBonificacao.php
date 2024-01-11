<?php

namespace Alura\Banco\service;

use Alura\Banco\model\funcionario\Funcionario;

class ControladorDeBonificacao
{
    private float $totalBonificacoes = 0;

    public function adicionaBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function getTotalBonificacoes(): float
    {
        return $this->totalBonificacoes;
    }


}