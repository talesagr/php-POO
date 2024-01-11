<?php

use Alura\Banco\model\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Petropolis', 'bairro', 'minha rua', '72A');
$outroEndereco = new Endereco('RIO', 'centro', 'qualquer rua', '50');

echo $umEndereco->cidade;