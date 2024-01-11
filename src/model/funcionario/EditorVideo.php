<?php

namespace Alura\Banco\model\Funcionario;

class EditorVideo extends Funcionario
{

    #[\Override] public function calculaBonificacao(): float
    {
        return 600;
    }
}