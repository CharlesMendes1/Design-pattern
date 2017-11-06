<?php

class Icpp extends TemplateDeImposto{

	protected function CondicaoParaTaxacao(Orcamento $orcamento){
		return $orcamento->getValor() > 500;
	}
	protected function TaxacaoMaior(Orcamento $orcamento){
		return $orcamento->getValor() * 0.07;
	}
	protected function TaxacaoMenor(Orcamento $orcamento){
		return $orcamento->getValor() * 0.05;
	}

}


 ?>