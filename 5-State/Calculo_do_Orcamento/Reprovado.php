<?php 
	/**
	* 
	*/
	class Reprovado implements EstadoDeUmOrcamento{
		
		
		public function aplicaDescontoExtra(Orcamento $orcamento){
			throw new Exception("Orçamentos reprovados não recebem desconto extra!");
		}

		public function aprovado(Orcamento $orcamento){
			throw new Exception("Orçamento foi reprovado não pode ser mais aprovado");
		}
		public function reprovado(Orcamento $orcamento){
			throw new Exception("Orçamento já está em estado de Reprovação");
		}
		public function finalizado(Orcamento $orcamento){
			$orcamento->setEstado(new Finalizado());
		}
	}
 ?>