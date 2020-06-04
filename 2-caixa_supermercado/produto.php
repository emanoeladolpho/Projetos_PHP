<?php 

	class Produto{

		private $nome;
		private $preco;
		private $quantidade;


		public function getNome(){
			return $this->nome;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getPreco(){
			return $this->preco;
		}

		public function setPreco($preco){
			if($preco > 0){
				$this->preco = $preco;
			}
		}

		public function getQuantidade(){
				return $this->quantidade;
		}

		public function setQuantidade($quantidade){
			if($quantidade > 0){
				$this->quantidade = $quantidade;
			}
		}


		public function comprar($quantidadeComprada,$valorPago){
			$precoCompra = $this->preco * $quantidadeComprada;
			$novaQuantidade =  $this->quantidade - $quantidadeComprada;

			if($valorPago == $precoCompra){
				return "Comrpa realizada com sucesso!";
			}else if($valorPago < $precoCompra){
				return "Valor insuficiente para compra!";
			}else if($valorPago > $precoCompra){
				$troco = $valorPago - $precoCompra;
				return "Compra realizada com sucesso! Seu troco é: ".$troco;
			}

			return $precoCompra; 			
		}

	}


 ?>