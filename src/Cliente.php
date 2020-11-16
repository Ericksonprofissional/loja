<?php
require 'Cpf.php';

class Cliente
{
    private $cpf;
    private $nome;
    public function __construct(Cpf $cpf, $nome)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->validaNome($nome);
    }

    public function validaNome($nome)
    {
        $nome = filter_var($nome, FILTER_VALIDATE_REGEXP,[
            'options' => [
                'regexp'=> '/^[A-z, ]{5,15}[A-z, ]{0,15}[A-z]{0,15}$/'
            ]
        ]);
        if($nome === false){
            echo utf8_encode('Nome inválido, exige no minome 5 letras.').PHP_EOL;
        }
        $this->nome = $nome ;
    }

    public function getCpf()
    {
        return $this->cpf->getNumeros();
    }

    public function getNome()
    {
        return $this->nome;
    }
}