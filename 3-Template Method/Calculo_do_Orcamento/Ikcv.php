<?php 
class Ikcv extends TemplateDeImposto{

	
	protected function CondicaoParaTaxacao(Orcamento $orcamento){
		return $orcamento->getValor() > 500 && ($this->itemMaiorQue100Reais($orcamento));
	}
	protected function TaxacaoMaior(Orcamento $orcamento){
		return $orcamento->getValor() * 0.10;
	}
	protected function TaxacaoMenor(Orcamento $orcamento){
		return $orcamento->getValor() * 0.06;
	}

	private function itemMaiorQue100Reais(Orcamento $orcamento){
		
		foreach($orcamento->getItens() as  $item){

			if($item->getValor() > 100) return true;	
		}
		return false;
	}
	

}


 ?>