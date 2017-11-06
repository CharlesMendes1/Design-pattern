<?php 

abstract class TemplateDeImposto extends Imposto{

	function __construct( $outroImposto = null) {
        parent::__construct($outroImposto);
    }
	
	public final function calcula(Orcamento $orcamento){
		if($this->CondicaoParaTaxacao($orcamento)){
			return $this->TaxacaoMaior($orcamento) + $this->calculaOutroImposto($orcamento);
		}else{
			return $this->TaxacaoMenor($orcamento) + $this->calculaOutroImposto($orcamento);
		}
	}
	
	protected abstract function CondicaoParaTaxacao(Orcamento $orcamento);
	protected abstract function TaxacaoMaior(Orcamento $orcamento);
	protected abstract function TaxacaoMenor(Orcamento $orcamento);
}

 ?>