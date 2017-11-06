<?php 
require_once'Imposto.php';
	class Iss implements Imposto{
		public function calcula(Orcamento $orcamento){
			return $orcamento->getValor() * 0.10;

		}

	}


?>