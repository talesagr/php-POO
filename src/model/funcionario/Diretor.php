<?php

namespace Alura\Banco\model\Funcionario;

use Alura\Banco\model\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(): float
    {
        return $this->getSalario() * 2;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha == 1234;
    }
}