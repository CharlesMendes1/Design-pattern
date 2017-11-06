<?php 
require_once'Imposto.php';
	class Icms implements Imposto{
		public function calcula(Orcamento $orcamento){
			return $orcamento->getValor() * 0.05;
		}


	}



?>
