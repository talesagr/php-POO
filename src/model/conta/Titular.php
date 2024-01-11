<?php

namespace Alura\Banco\model\conta;

use Alura\Banco\model\Autenticavel;
use Alura\Banco\model\Cpf;
use Alura\Banco\model\Endereco;
use Alura\Banco\model\Pessoa;

class Titular extends Pessoa implements Autenticavel
{
    private Endereco $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome,$cpf);
        $this->endereco = $endereco;
    }

    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }

    #[\Override] public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}