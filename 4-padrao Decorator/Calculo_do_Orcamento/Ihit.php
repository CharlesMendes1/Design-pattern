<?php 
class Ihit extends TemplateDeImposto{
	//usando construtor do pai

	protected function CondicaoParaTaxacao(Orcamento $orcamento){
		return $this->DoisItensComMesmoNome($orcamento);

	}
	protected function TaxacaoMaior(Orcamento $orcamento){
		return $orcamento->getValor() * 0.13 + 100;
	}
	protected function TaxacaoMenor(Orcamento $orcamento){
		return (0.01 * count($orcamento->getItens()));

	}

	protected function DoisItensComMesmoNome(Orcamento $orcamento){
		$vetDeItens = Array();
		foreach($orcamento->getItens() as $item){
			if(in_array($item->getNome(),$vetDeItens))
				return true;
			else
				$vetDeItens[] = $item->getNome();
		}
		return false;
	}


}


 ?>