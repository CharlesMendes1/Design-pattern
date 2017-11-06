<?php 
	/**
	* 
	*/
	class Finalizado implements EstadoDeUmOrcamento{
		
		
		public function aplicaDescontoExtra(Orcamento $orcamento){
			throw new Exception("Orçamentos finalizados não recebem desconto extra!");
		}

		public function aprovado(Orcamento $orcamento){
			throw new Exception("Orçamento ja foi finalizado");
		}
		public function reprovado(Orcamento $orcamento){
			throw new Exception("Orçamento ja foi finalizado");
		}
		public function finalizado(Orcamento $orcamento){
			throw new Exception("Orçamento já está em estado Finalizado ");
		}
	}
 ?>