<?php 
	require_once'Investimento.php';
	class InvestimentoModerado implements Investimento{
		private $chance;
		public function calcular(Conta $conta){
			$this->chance = mt_rand(1,100);
			
			if($this->chance <= 50){
				return $conta->getSaldo() * 0.025;
			}else{
				return $conta->getSaldo() * 0.007;
			}
		}
	}



?>