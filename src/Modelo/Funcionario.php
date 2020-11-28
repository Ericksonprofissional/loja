<?php
namespace Erickson\Loja\Modelo;

class Funcionario extends Pessoa
{
    private $cargo;

    public function __construct(Cpf $cpf, $nome,$cargo)
    {
        Pessoa::__construct($cpf, $nome);
        $this->cargo = $cargo;
    }

    public function getCargo()
    {
        return $this->cargo;
    }

    public function setNome($nome){
        $this->validaNome($nome);
        $this->nome = $nome;
    }
}