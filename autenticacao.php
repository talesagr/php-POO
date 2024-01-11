<?php

use Alura\Banco\model\Funcionario\Diretor;
use Alura\Banco\model\Cpf;
use Alura\Banco\model\Funcionario\Gerente;
use Alura\Banco\service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Gerente(
    'Joao da Silva',
    new Cpf('033.546.123-12'),
    15000
);

$autenticador->tentaLogin($umDiretor, 4321);