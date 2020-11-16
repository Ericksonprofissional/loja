<?php


class Cpf
{
    private $numeros;
public function __construct($numeros)
{
    $numeros = filter_var($numeros, FILTER_VALIDATE_REGEXP,[
        'options' => [
            'regexp'=> '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
        ]
    ]);

    if($numeros === false){
        echo utf8_encode("CPF inv�lido");
    }
    $this->numeros = $numeros;
}

    public function getNumeros()
    {
        return $this->numeros;
    }
}