<?php 
	require_once"InterfaceDesconto.php";

	class Desconto500Reais implements InterfaceDesconto{

		private $proximoDesconto;
		
		public function setProximoDesconto(InterfaceDesconto $proximoDesconto){
			$this->proximoDesconto = $proximoDesconto;
		}

		public function Desconto(Orcamento $orcamento){

			if($orcamento->getValor() >= 500){
				return $orcamento->getValor() * 0.07;
			}else{
				return $this->proximoDesconto->desconto($orcamento);
			}	
			
		}

	}
	 
?>
