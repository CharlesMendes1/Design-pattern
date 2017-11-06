<?php 
require_once"InterfaceDesconto.php";

class DescontoPorVendaCasada implements InterfaceDesconto{

	private $proximoDesconto;

	public function setProximoDesconto(InterfaceDesconto $proximoDesconto){
	    $this->proximoDesconto = $proximoDesconto;
	}

	public function desconto(Orcamento $orcamento){
		if($this->existe("Lapis", $orcamento)&& $this->existe("Lapis", $orcamento)){
			return $orcamento->getValor() * 0.05;
		}else{
			return $this->proximoDesconto->desconto($orcamento);
		}

	}


	

	public function existe($nomeDoItem,Orcamento $orcamento) {
		//var_dump($orcamento->getItens());
        foreach ($orcamento->getItens() as $item){
        	if($item->getNome() == $nomeDoItem){
            	return true;
            }return false;
            
        }
        
	}
}
 ?>