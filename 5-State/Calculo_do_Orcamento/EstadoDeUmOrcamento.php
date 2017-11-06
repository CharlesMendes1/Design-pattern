<?php 
	Interface EstadoDeUmOrcamento{
		
		public function aplicaDescontoExtra(Orcamento $orcamento);
		public function aprovado(Orcamento $orcamento);
		public function reprovado(Orcamento $orcamento);
		public function finalizado(Orcamento $orcamento);


	}
 
?>