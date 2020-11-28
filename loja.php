<html>
<?php
require 'src/Cadastro.php';
$cpf = new Cpf('028.389.041-08');
$erickson = new Cliente($cpf,'Erickson de Souza');
$cadastro1 = new Cadastro($erickson);
$cadastro1->liberaCreditoGerente(150);
?>
<h1>Clientes da Loja</h1>
    <table>
        <td><?php echo "CPF: ".$cadastro1->getCpfCliente();?></td>
        <td><?php echo "Nome: ".$cadastro1->getNomeCliente();?></td>
        <td><?php echo utf8_encode("Crédito: ").$cadastro1->getCredito();?></td>
</table>
</html>