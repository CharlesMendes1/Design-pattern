<?php 
	class Iss extends Imposto{


	function __construct($outroImposto = null){
		parent:: __construct($outroImposto);
	}

	public function calcula(Orcamento $orcamento){
		return $orcamento->getValor() * 0.05 + $this->calculaOutroImposto($orcamento);
	}

}

?>