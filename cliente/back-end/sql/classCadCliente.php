<?php
	class CadCliente {
		private $codCliente;
		private $nome;
		private $cpf;
		private $cel;
		private $cep;
		private $numero;
		private $complemento;

		//------------------------------
		public function getcodCliente() {
			return $this->codCliente;
		}
		public function setcodCliente($x) {
			$this->codCliente = $x;
		}
		//------------------------------
		public function getNome() {
			return $this->nome;
		}
		public function setNome($x) {
			$this->nome = $x;
		}
		//------------------------------
		public function getCpf() {
			return $this->cpf;
		}
		public function setCpf($x) {
			$this->cpf = $x;
		}
		//------------------------------
		public function getCel() {
			return $this->cel;
		}
		public function setCel($x) {
			$this->cel = $x;
		}
		//------------------------------
		public function getCep() {
			return $this->cep;
		}
		public function setCep($x) {
			$this->cep = $x;
		}
		//------------------------------
		public function getNumero() {
			return $this->numero;
		}
		public function setNumero($x) {
			$this->numero = $x;
		}
		//------------------------------
		public function getComplemento() {
			return $this->complemento;
		}
		public function setComplemento($x) {
			$this->complemento = $x;
		}
		//------------------------------
	}