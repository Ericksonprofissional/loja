<?php
require 'src/Conta.php';

$erickson = new Titular(new Cpf('028.389.041-08'), 'Erickson');
$jaq = new Titular(new Cpf('028.389.041-08'), 'Erickson');
$primeiraConta = new Conta($erickson);
$segundaConta = new Conta($jaq);


?>
<html>

<?php
$primeiraConta->sacar(11);
$primeiraConta->transferir(1,$segundaConta);
$primeiraConta->depositar(11);
$primeiraConta->transferir(1,$segundaConta);

echo "Cpf: ".$primeiraConta->getCpfTitular().PHP_EOL;
echo"Nome: ".$primeiraConta->getNomeTitular().PHP_EOL;
echo"Saldo: ".$primeiraConta->getSaldo().PHP_EOL;
$outra = new Titular(new Cpf('123.231.235-8'),"teste");
$outra = new Conta($outra);
unset($outra);
echo "Numero de contas: ";
?>


</html>