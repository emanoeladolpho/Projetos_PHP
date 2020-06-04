<?php


	class Conta{
		private $dono;
		private $numero;
		private $saldo;

		public function getDono(){
			return $this->$dono;
		}

		public function setNome($dono){
			$this->dono = $dono;
		}

		public function getNumero(){
			return $this->$numero;
		}

		public function setNumero($numero){
			$this->numero = $numero;
		}

		public function getSaldo(){
			return $this->saldo;
		}

		public function setSaldo($saldo){
			$this->saldo = $saldo;
		}


		public function __construct($dono,$numero,$saldo){
			$this->dono = $dono;
			$this->numero = $numero;
			$this->saldo = $saldo;

		}



		public function depositar($deposito){
			if( $deposito > 0){
				$this->saldo += $deposito;
			}
			return $this->saldo;
		}

		public function sacar($saque){
			if( $saque <= $this->saldo){
				$this->saldo -= $saque;
			}

			return $this->saldo;

		}


	}


  ?>