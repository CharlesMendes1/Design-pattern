<?php 
	require_once "InterfaceDesconto.php";
	require_once "Desconto5Itens.php";
	require_once "Desconto500Reais.php";
	require_once "SemDesconto.php";
	require_once "Orcamento.php";
	class CalculadorDeDescontos{

		public function calcula(Orcamento $orcamento){
			

			// Calculador de descontos virou o fechador de corrente 
			//isso pode estar no index

			//1° preenche os setProximos
			$d5Itens = new Desconto5Itens();
			$d500 = new Desconto500Reais();
			$SemDesconto = new SemDesconto();
			
			$d5Itens->setProximoDesconto($d500);
        	$d500->setProximoDesconto($SemDesconto);
        	
        	//2°inicia o calculo
        	//Agora sim calcula 
        	//começando a corrente de calculos
        	 $valorDesconto = $d5Itens->Desconto($orcamento);

        	 return $valorDesconto;

		}
	}

 ?>