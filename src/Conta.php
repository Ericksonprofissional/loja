<?php
require 'Titular.php';
class Conta
{
    private $titular;
    private $saldo;
    private static $numeroContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroContas++;
    }

    public function __destruct()
    {
        self::$numeroContas--;
    }

    public function sacar($valorSacar)
    {
        if($valorSacar > $this->saldo)
        {
            echo utf8_encode("saldo indisponível para saque").PHP_EOL;
            return;
        }
                $this->saldo -= $valorSacar;
    }

    public function depositar($valorDepositar)
    {
        if($valorDepositar < 0)
        {
            echo "Valor precisa ser positivo";
            return;
        }
                $this->saldo += $valorDepositar;
    }

    public function transferir($valorTransferir, Conta $contaDestino )
    {
        if ($valorTransferir > $this->saldo){
            echo utf8_encode("saldo indisponível para transferencia").PHP_EOL;
            return;
        }
            $this->sacar($valorTransferir);
            $contaDestino->depositar($valorTransferir);
            echo "valor transferido ". $valorTransferir.PHP_EOL;
    }

    public function getCpfTitular()
    {
        return $this->titular->getCpf();
    }

    public function getNomeTitular()
    {
        return $this->titular->getNome();
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public static function getNumerosConta()
    {
        return self::$numeroContas;
    }
}
