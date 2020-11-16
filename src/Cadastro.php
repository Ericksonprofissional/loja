<?php
require 'Cliente.php';

class Cadastro
{
    private $cliente;
    private $credito = 0;
public function __construct(Cliente $cliente)
{
    $this->cliente = $cliente;

}

    public function getCredito()
    {
        return $this->credito;
    }


    public function liberaCreditoGerente($credito)
    {
        $this->credito = $credito;
    }

    public function getNomeCliente()
    {
        return $this->cliente->getNome();
    }

    public function getCpfCliente()
    {
        return $this->cliente->getCpf();
    }
}