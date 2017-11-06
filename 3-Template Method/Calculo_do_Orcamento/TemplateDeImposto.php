<?php 

abstract class TemplateDeImposto implements Imposto{
	
	public final function calcula(Orcamento $orcamento){
		if($this->CondicaoParaTaxacao($orcamento)){
			return $this->TaxacaoMaior($orcamento);
		}else{
			return $this->TaxacaoMenor($orcamento);
		}
	}

	protected abstract function CondicaoParaTaxacao(Orcamento $orcamento);
	protected abstract function TaxacaoMaior(Orcamento $orcamento);
	protected abstract function TaxacaoMenor(Orcamento $orcamento);
}

 ?>