<?php 

	include("cliente.php");
	include("conta.php");


	$cliente1 = new Cliente("Emanoel","Presidente Dutra","Bom sucesso","Rua");
	print_r($cliente1);
	echo "<br/>";
	$conta1 = new Conta($cliente1,"1234",1000.00);
	print_r($conta1);
	echo $conta1->depositar(50);
	echo "<br/>";


	$cliente2 = new Cliente("Stefany","São Paulo","Avenida Paulista","Avenida");
	print_r($cliente2);
	$conta2 = new Conta($cliente1,"1234",500.00);
	echo "<br/>";
	print_r($conta2);
	echo $conta2->sacar(74.35);
	echo "<br/>";





 ?>