<?php

namespace Erickson\Loja\Modelo\Pessoa;
class Pessoa
{
    protected $nome;
    protected $cpf;

    public function __construct($nome,Cpf $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    protected function validaNome($nome)
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

    public function getNome()
    {
        return $this->nome;
    }

    public function getCpf()
    {
        return $this->cpf->getNumeros();
    }
}