<?php 
	/**
	* 
	*/
	class EmAprovacao implements EstadoDeUmOrcamento{
		
		public function aplicaDescontoExtra(Orcamento $orcamento){
			$valor = $orcamento->getValor();
        	$orcamento->setValor($valor - $valor * 0.05);
		}

		public function aprovado(Orcamento $orcamento){
			$orcamento->setEstado(new Aprovado());
		}
		public function reprovado(Orcamento $orcamento){
			$orcamento->setEstado(new Reprovado());
		}
		public function finalizado(Orcamento $orcamento){
			throw new Exception("O orçamento não pode ser finalizado, pois ele está no estado de Em Aprovação");
		}

	}
 ?>