<?php
	class CadMov {
		private $codProd;
		private $qnt;
		private $tipo;
		private $cod;

		//------------------------------
		public function getCodProd() {
			return $this->codProd;
		}
		public function setCodProd($x) {
			$this->codProd = $x;
		}
		//------------------------------
		public function getQnt() {
			return $this->qnt;
		}
		public function setQnt($x) {
			$this->qnt = $x;
		}
		//------------------------------
		public function getTipo() {
			return $this->tipo;
		}
		public function setTipo($x) {
			$this->tipo = $x;
		}
		//------------------------------
		public function getCod() {
			return $this->cod;
		}
		public function setCod($x) {
			$this->cod = $x;
		}
}