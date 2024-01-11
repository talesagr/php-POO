<?php

spl_autoload_register(function (string $nomeCompletoDaClasse){
    $path = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $path);
    $path .= '.php';

    if(file_exists($path)) {
        require_once $path;
    }
});