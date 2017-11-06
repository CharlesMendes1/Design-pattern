<?php 
	 abstract class Imposto{
		protected  $outroImposto;
		
		function __construct($outroImposto = null){
			$this->outroImposto = $outroImposto;
		}
		
		public abstract function calcula(Orcamento $orcamento);

		public function calculaOutroImposto(Orcamento $Orcamento){
			if(is_null($this->outroImposto)) return 0;

			return $this->outroImposto->calcula($Orcamento);
		}
	}


?>