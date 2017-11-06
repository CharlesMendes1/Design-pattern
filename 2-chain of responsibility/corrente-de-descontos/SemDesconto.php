<?php 
	require_once"InterfaceDesconto.php";

	class SemDesconto implements InterfaceDesconto{

		public function setProximoDesconto(InterfaceDesconto $proximoDesconto){
			   
		}

		public function Desconto(Orcamento $orcamento){

			if($orcamento->getValor() >= 500){
				return $orcamento->getValor() * 0.07;
			}else{
				
			}

			
		}
	

	}


 ?>