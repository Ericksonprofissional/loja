<?php
require 'Cpf.php';

class Titular
{
    private $cpf;
    private $nome;

    public function __construct(Cpf $cpf, $nome)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    private function validaNomeTitular($nome)
    {
        if(strlen($nome) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    public function getCpf()
    {
        return $this->cpf->getNumero();
    }
}