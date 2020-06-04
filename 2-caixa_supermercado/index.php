<?php 

	include("produto.php");

	$produto1 = new Produto();
	$produto1->setNome("Cachorro Quente");
	$produto1->setPreco(3);
	$produto1->setQuantidade(100);


	$produto2 = new Produto();
	$produto2->setNome("Pizza");
	$produto2->setPreco(40);
	$produto2->setQuantidade(75);

	$produto3 = new Produto();
	$produto3->setNome("Hambúrger");
	$produto3->setPreco(7);
	$produto3->setQuantidade(100);

	echo "Produto: ".$produto1->getNome()."<br/>";
	echo "Preço: ".$produto1->getPreco()." Reais"."<br/>";
	echo "Quantidade disponível: ".$produto1->getQuantidade()."<br/>";
	echo "<hr/>";

	echo "Produto: ".$produto2->getNome()."<br/>";
	echo "Preço: ".$produto2->getPreco()." Reais"."<br/>";
	echo "Quantidade disponível: ".$produto2->getQuantidade()."<br/>";
	echo "<hr/>";

	echo "Produto: ".$produto3->getNome()."<br/>";
	echo "Preço: ".$produto3->getPreco()." Reais"."<br/>";
	echo "Quantidade disponível: ".$produto3->getQuantidade()."<br/>";
	echo "<hr/>";

	echo $produto1->comprar(2,10)."<br/>";
	echo $produto2->comprar(1,50)."<br/>";
	echo $produto3->comprar(3,50)."<br/>";

 ?>