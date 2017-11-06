<?php 

	class Conta{
		private $saldo;

		function __construct($valor_depositado)
		{
			$this->saldo = $valor_depositado;
		}

		public function depositar($valor) {
          $this->saldo += $valor;
        }


		public function getSaldo(){
		    return $this->saldo;
		}
		
		public function setSaldo($saldo){
		    $this->saldo = $saldo;
		}
	} 

?>