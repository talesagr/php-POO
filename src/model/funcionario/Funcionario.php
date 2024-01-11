<?php

namespace Alura\Banco\model\Funcionario;
use Alura\Banco\model\Cpf;
use Alura\Banco\model\Pessoa;

abstract class Funcionario extends Pessoa
{
    private $salario;

    public function __construct(string $nome, CPF $cpf, $salario)
    {
        parent::__construct($nome,$cpf);
        $this->salario = $salario;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setNome(string $nome):void
    {
        $this->validaNome($this->nome);
        $this->nome = $nome;
    }

    public function recebeAumento(float $valorDoAumento):void
    {
        if ($valorDoAumento < 0) {
            echo 'Aumento deve ser positivo';
            return;
        }
        $this->salario += $valorDoAumento;
    }

    abstract public function calculaBonificacao():float;
}