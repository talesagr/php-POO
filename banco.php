<?php

require_once 'autoload.php';

use Alura\Banco\model\conta\Titular;
use Alura\Banco\model\Endereco;
use Alura\Banco\model\Cpf;
use Alura\Banco\model\conta\Conta;
use Alura\Banco\model\Pessoa;

$endereco = new Endereco('Petropolis', 'um bairro', 'minha rua', '71B');
$vinicius = new Titular(new Cpf('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->getNomeTitular() . PHP_EOL;
echo $primeiraConta->getCPFTitular() . PHP_EOL;
echo $primeiraConta->getSaldo() . PHP_EOL;

$anaLucia = new Titular(new Cpf('698.456.423-10'), 'Ana Lucia', new Endereco('Erechim', 'barrio', 'rua1', '789'));
$segundaConta = new Conta($anaLucia);

$patricia = new Titular(new Cpf('123.456.789-11'), 'patricia', $endereco);
new Conta($patricia);
echo Conta::getNumeroContas();

var_dump($primeiraConta);