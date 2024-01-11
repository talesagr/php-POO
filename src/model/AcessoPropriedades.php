<?php

namespace Alura\Banco\model;

trait AcessoPropriedades
{
    public function __get(string $name)
    {
        $metodo = 'get' . ucfirst($name);
        return $this->$metodo();
    }
}