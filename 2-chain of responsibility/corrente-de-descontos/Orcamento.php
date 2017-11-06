<?php 
	class Orcamento{
		private $valor;
		private $itens = array();

		function __construct($valor){
			$this->valor = $valor;
		}

		public function getValor(){
		    return $this->valor;
		}
		
		public function setValor($valor){
		    $this->valor = $valor;
		}

		public function getItens(){
		    return $this->itens;
		}
		
		public function AddItens(Item $item){
		    $this->itens[] = $item;
		}

		public function setItens($item){
		    $this->itens[] = $item;
		}

	}
 ?>