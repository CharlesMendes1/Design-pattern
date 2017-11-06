<?php 
	/**
	* 
	*/
	class Aprovado implements EstadoDeUmOrcamento{
		
		
		public function aplicaDescontoExtra(Orcamento $orcamento){
			$valor = $orcamento->getValor();
        	$orcamento->setValor($valor - $valor * 0.02);
		}


		public function aprovado(Orcamento $orcamento){
			throw new Exception("Orçamento já está em estado de aprovação");
		}
		public function reprovado(Orcamento $orcamento){
			throw new Exception("Orçamento está em estado de aprovação e não pode ser reprovado");
		}
		public function finalizado(Orcamento $orcamento){
			$orcamento->setEstado(new Finalizado());
		}
	}
 ?>