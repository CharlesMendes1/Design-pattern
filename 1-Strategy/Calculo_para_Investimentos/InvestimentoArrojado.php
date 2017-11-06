<?php 
	require_once'Investimento.php';
	class InvestimentoArrojado implements Investimento{
		private $chance;
		public function calcular(Conta $conta){
			$this->chance = mt_rand(1,100);

			if($this->chance >= 1 && $this->chance <= 20){
				return $conta->getSaldo() * 0.05;
			}else if($this->chance > 20 && $this->chance <= 50){
				return $conta->getSaldo() * 0.03;
			}else{
			 return $conta->getSaldo() * 0.006;
			}
		}
	}


 ?>