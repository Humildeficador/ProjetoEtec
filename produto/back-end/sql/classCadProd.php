<?php
	class CadProd {
		private $codProd;
		private $descricao;
		private $valor;
		private $vencimento;
		private $vencimento1;

		//------------------------------
		public function getCodProd() {
			return $this->codProd;
		}
		public function setCodProd($x) {
			$this->codProd = $x;
		}
		//------------------------------
		public function getDescricao() {
			return $this->descricao;
		}
		public function setDescricao($x) {
			$this->descricao = $x;
		}
		//------------------------------
		public function getValor() {
			return $this->valor;
		}
		public function setValor($x) {
			$this->valor = $x;
		}
		//------------------------------
		public function getVencimento() {
			return $this->vencimento;
		}
		public function setVencimento($x) {
			$this->vencimento = $x;
		}
		//------------------------------
		public function getVencimento1() {
			return $this->vencimento1;
		}
		public function setVencimento1($x) {
			$this->vencimento1 = $x;
		}
		//------------------------------
	}