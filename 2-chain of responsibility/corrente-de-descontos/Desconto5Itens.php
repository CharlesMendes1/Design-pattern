<?php 
	require_once"InterfaceDesconto.php";

	class Desconto5Itens implements InterfaceDesconto{
		
	private $proximoDesconto;

	public function setProximoDesconto(InterfaceDesconto $proximoDesconto){
		$this->proximoDesconto = $proximoDesconto;
	}
	
	public function Desconto(Orcamento $orcamento){
		if(count($orcamento->getItens()) >= 5){
			return $orcamento->getValor() * 0.1;
		}else{
				return $this->proximoDesconto->desconto($orcamento);
		}	

	}
	
}

 ?>