<?php

namespace Alura\Banco\model;
final class Cpf
{
    private string $numero;

    public function __construct(string $numero)
    {
        $this->numero = $numero;
    }

    public function getCpf(): string
    {
        return $this->numero;
    }
}