<?php
	class CadProd {
		private $codProd;
		private $qnt;
		private $tipo;

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
}