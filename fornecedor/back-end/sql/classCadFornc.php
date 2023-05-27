<?php
	class CadFornc {
		private $codFornc;
		private $nome;
		private $cnpj;
		private $cel;
		private $cep;

		//------------------------------
		public function getcodFornc() {
			return $this->codFornc;
		}
		public function setcodFornc($x) {
			$this->codFornc = $x;
		}
		//------------------------------
		public function getNome() {
			return $this->nome;
		}
		public function setNome($x) {
			$this->nome = $x;
		}
		//------------------------------
		public function getCnpj() {
			return $this->cnpj;
		}
		public function setCnpj($x) {
			$this->cnpj = $x;
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
	}