<!DOCTYPE html>
<html>
<head>
	<title>Formulário</title>
</head>
<body>
 
	<?php
	/* 
		if(isset($_GET["acao"])){

		$nome = $_GET["nome"];
		$email = $_GET["email"];

		echo @$nome."<br/>";
		echo @$email."<br/>";
		}
	*/

		/*
		if(isset($_POST["acao"])){

		$nome = $_POST["nome"];
		$email = $_POST["email"];

		echo @$nome."<br/>";
		echo @$email."<br/>";
		}
		*/

		/*
		if(isset($_POST["acao"])){
			echo $_POST["numero1"] + $_POST["numero2"];
		
		}
		*/


		if(isset($_POST["acao"])){
			echo($_POST["nome"]);
		}

		// Em POST fica oculto na URL do site


	 ?>


	 <!--
	<form>
		<input type="text" name="nome"/>
		<input type="text" name="email"/>
		<input type="submit" name="acao" value="Enviar"/>

	</form>	
	-->
	<hr/>
	<!--
	<form method="post">
		<input type="text" name="nome"/>
		<input type="text" name="email"/>
		<input type="submit" name="acao" value="Enviar"/>			
	</form>
	-->

	<!--
	<form method="post">
		<input type="text" name="numero1"/>
		<input type="text" name="numero2"/>
		<input type="submit" name="acao" value="Enviar"/>			
	</form>
	-->

	<form method="post">
		<select name="nome">
			<option value="Emanoel">Emanoel</option>
			<option value="Maria">Maria</option>
		</select>			
		<input type="submit" name="acao" value="Enviar"/>
	</form>




</body>
</html>