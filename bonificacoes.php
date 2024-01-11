<?php

require_once 'autoload.php';

use Alura\Banco\model\{Cpf};
use Alura\Banco\service\ControladorDeBonificacao;
use Alura\Banco\model\Funcionario\{Funcionario, Gerente, Diretor,Desenvolvedor, EditorVideo};

$umFuncionario = new Desenvolvedor(
    'Vinciius',
    new Cpf('123.456.789-10'),
    4560
);

$umFuncionario->sobeDeNivel();


$umaFuncionaria = new Gerente(
    'Patia',
    new Cpf('777.555.789-10'),
    10000
);

$umDiretor = new Diretor(
    'Ana Paula Padrao FIFA',
    new Cpf('123.456.78-987'),
    6000
);

$umEditor = new EditorVideo(
    'Paulo',
    new Cpf('222.555.78-987'),
    1500
);

$controlador = new ControladorDeBonificacao();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);

echo $controlador->getTotalBonificacoes();