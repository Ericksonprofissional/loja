<?php

namespace Erickson\Loja\Modelo\Cliente;

class Cliente extends Pessoa
{
    private $endereco;

    public function __construct(Cpf $cpf, $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }
}