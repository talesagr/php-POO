<?php

use Alura\Banco\model\conta\{ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\model\{Cpf,Endereco};

require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new Cpf('123.456.789-10'),
        'Vincius',
    new Endereco('Petropolis', 'bairro teste', 'rua1', '34')
    )
);

$conta->depositar(500);
$conta->sacar(100);

echo $conta->getSaldo();