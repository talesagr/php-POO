<?php

namespace Alura\Banco\service;

use Alura\Banco\model\Autenticavel;
use Alura\Banco\model\Funcionario\Diretor;

class Autenticador
{
    public function tentaLogin(Autenticavel $diretor, string $senha): void
    {
        if ($diretor->podeAutenticar($senha)) {
            echo "Ok. Usuario logado no sistema";
        } else {
            echo "OPS. Senha Incorreta";
        }
    }
}