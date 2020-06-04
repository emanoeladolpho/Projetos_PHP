<?php

	date_default_timezone_set('America/Sao_Paulo');

	$pdo = new PDO("mysql:host=localhost;dbname=modulo 8","root",""); // built-in classe que gerencia banco de dados.
	// 1º parâmetro onde do banco de dados, 2º usuario, 3º senha


	if(isset($_POST['acao'])){
		$nome = $_POST['nome'];
		$sobrenome = $_POST['sobrenome'];
		$momento_registro = date("Y-m-d H:m:s"); 

		$sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?,?)"); // Não se deve colocar as variáveis diretas aqui
		// Função para criar o comando SQL
		// ? indica que a indormação vai ser pega de um formulário

		$sql->execute(array($nome,$sobrenome,$momento_registro)); // Excutando o comando SQL. Essa é a forma segura de fazer inserção
		echo "Cliente inserido com sucesso!";
	}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Cadastro no banco</title>
</head>
<body>

	<form method="post">
		<input type="text" name="nome" required/>
		<input type="text" name="sobrenome" required/>
		<input type="datetime-local" name="momento_registro"/>
		<input type="submit" name="acao" value="Enviar"/>
	</form>





</body>
</html>