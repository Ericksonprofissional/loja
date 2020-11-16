<?php


class Cpf
{
    private $numero;

    public function __construct($numero)
    {
        $numero = filter_var($numero,  FILTER_VALIDATE_REGEXP,[
            'options' => [
                'regexp'=> '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if($numero === false){
            echo utf8_encode("Cpf inválido").PHP_EOL;
        }

        $this->numero=$numero;
    }

    public function getNumero()
    {
        return $this->numero;
    }
}