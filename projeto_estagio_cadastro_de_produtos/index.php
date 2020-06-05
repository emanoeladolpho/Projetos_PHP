<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de produtos</title>
</head>
<body>
	<h1>Gerenciamento de produtos</h1>
	<h2>Projeto - Estágio de desenvolvimento PHP</h2>


	<?php 

	echo "<br/>";
	echo "<br/>";


	$pdo = new PDO("mysql:host=localhost;dbname=modulo 8","root","");

	if(isset($_POST['cadastrar'])){
		$nome = $_POST['nome'];
		$codigo = $_POST['codigo'];
		$preco =  $_POST['preco'];

		$sql = $pdo->prepare("INSERT INTO `produto` VALUES (null,?,?,?)"); // Não se deve colocar as variáveis diretas aqui
		// Função para criar o comando SQL
		// ? indica que a indormação vai ser pega de um formulário

		$sql->execute(array($nome,$codigo,$preco)); // Excutando o comando SQL. Essa é a forma segura de fazer inserção
		echo "Produto: ".$nome.", cadastrado com sucesso!";
	}


	if(isset($_POST['editar'])){
		$nome = $_POST['nome'];
		$codigo = $_POST['codigo'];
		$preco =  $_POST['preco'];

		$sql = $pdo->prepare("  UPDATE `produto` SET nome =?, codigo=?, preco=?  WHERE codigo=?  ");

		$sql->execute(array($nome,$codigo,$preco,$codigo));
		echo "Produto ".$nome.", Editado com sucesso!";
	}


	if(isset($_POST['excluir'])){
		$codigo = $_POST['codigo'];

		$sql = $pdo->prepare(" DELETE FROM `produto` WHERE codigo=?    ");


		$sql->execute(array($codigo));
		echo "Produto excluido com sucesso!";
	}


	 ?>


	<form method="post">
		<input type="text" name="nome" placeholder="Nome do produto" />
		<input type="text" name="codigo" placeholder="Código do produto" />
		<input type="number" name="preco" placeholder="Preço do produto" />
		<input type="submit" name="cadastrar" value="Cadastrar"/>			
	</form>

	<form method="post">
		<input type="text" name="codigo"/ placeholder="Código do produto">
		<input type="text" name="nome" placeholder="Novo nome" />
		<input type="number" name="preco" placeholder="Novo preço">
		<input type="submit" name="editar" value="Editar"/>			
	</form>

	<form method="post">
		<input type="text" name="codigo" placeholder="Código do produto" />
		<input type="submit" name="excluir" value="Excluir"/>			
	</form>



</body>
</html>