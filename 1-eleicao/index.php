<?php 



	$idade = 15;


	if($idade < 16){
		echo "Ainda não pode votar!";
	}else if($idade < 18 || $idade > 65 ){
		echo "Voto opcional!";
	}else if($idade < 65 ){
		echo "Voto obrigatório";
	}


 ?>