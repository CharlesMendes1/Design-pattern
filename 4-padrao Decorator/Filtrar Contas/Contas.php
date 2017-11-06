<?php 
class Contas{
	private $contas = array();


	public function AddConta(conta $conta){
		$this->contas[] = $conta;
	}

	public function getContas(){
	    return $this->contas;
	}
	


}
 ?>