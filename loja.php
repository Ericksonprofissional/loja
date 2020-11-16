<?php
require 'src/Cadastro.php';
$cpf = new Cpf('028.389.041-08');
$erickson = new Cliente($cpf,'Erickson');
$cadastro1 = new Cadastro($erickson);
$cadastro1->liberaCreditoGerente(150);
echo "<h1>Clientes da Loja</h1>";
echo "<pre>";
echo "<fieldset>";
echo "CPF: ".$cadastro1->getCpfCliente().PHP_EOL;
echo "Nome: ".$cadastro1->getNomeCliente().PHP_EOL;
echo "Credito: ".$cadastro1->getCredito().PHP_EOL;
echo "</fieldset>";
echo "<pre>";