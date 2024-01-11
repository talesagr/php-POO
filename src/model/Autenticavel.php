<?php

namespace Alura\Banco\model;

interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}