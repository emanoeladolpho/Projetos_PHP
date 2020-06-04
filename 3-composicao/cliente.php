<?php 


	class Cliente{
	
		private $nome;
		private $cidade;
		private $bairro;
		private $logradouro;


		public function getNome(){
			return $this->nome;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getCidade(){
			return $this->cidade;
		}

		public function setCidade($cidade){
			$this->cidade = $cidade;
		}

		public function getBairro(){
			return $this->bairro;
		}

		public function setBairro($bairro){
			$this->bairro = $bairro;
		}

		public function getLogradouro(){
			return $this->logradouro;
		}

		public function setLogradouro($logradouro){
			$this->logradouro = $logradouro;
		}


		public function __construct($nome,$cidade,$bairro,$logradouro){
			$this->nome = $nome;
			$this->cidade = $cidade;
			$this->bairro = $bairro;
			$this->logradouro = $logradouro;
		}

}


 
 ?>