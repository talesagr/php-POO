<?php

namespace Alura\Banco\model\Funcionario;

use Alura\Banco\model\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{
public function calculaBonificacao(): float
{
    return $this->getSalario();
}

    #[\Override] public function podeAutenticar(string $senha): bool
    {
        return $senha === '4321';
    }
}