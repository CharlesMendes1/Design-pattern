<?php 

	class Icms extends TemplateDeImposto{

		protected function CondicaoParaTaxacao(Orcamento $orcamento){
			return $orcamento->getValor() > 0;

		}
		protected function TaxacaoMaior(Orcamento $orcamento){
			return $orcamento->getValor() * 0.05;
		}
		protected function TaxacaoMenor(Orcamento $orcamento){
			return $orcamento->getValor() * 0.05;
		}

	}



?>
