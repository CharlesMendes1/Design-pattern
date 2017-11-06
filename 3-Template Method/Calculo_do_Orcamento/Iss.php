<?php 
	class Iss extends TemplateDeImposto{

	protected function CondicaoParaTaxacao(Orcamento $orcamento){
		return $orcamento->getValor() > 0;
	}
	protected function TaxacaoMaior(Orcamento $orcamento){
		return $orcamento->getValor() * 0.10; 
	}
	protected function TaxacaoMenor(Orcamento $orcamento){
		return $orcamento->getValor() * 0.10; 
	}

}

?>