<?php 
class Estado{
	private $contrato;

	function __construct(Contrato $contrato){
		$this->contrato = $contrato;
	}

	public function getContrato(){
	    return $this->contrato;
	}
	
}

 ?>