<?php

namespace Alura\Banco\model\conta;
abstract class Conta
{
    private Titular $titular;
    protected float $saldo;
    private static $numeroDeContas = 0;


    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroDeContas++;
    }

    public function sacar( float $valorASacar)
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo){
            echo "Saldo indisponivel";
            return;
        }
        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar)
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }
            $this->saldo += $valorADepositar;

    }


    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function getNomeTitular(): string
    {
        return $this->titular->getNome();
    }

    public function getCPFTitular(): string
    {
        return $this->titular->getCpf();
    }
    public static function getNumeroContas():int
    {
        return self::$numeroDeContas;
    }

    abstract public function percentualTarifa():float;
}