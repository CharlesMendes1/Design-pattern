<?php 
	require_once'Investimento.php';
	class InvestimentoConservador implements Investimento{
		public function calcular(Conta $conta){
			return $conta->getSaldo() * 0.008; 
		}
	}



?>