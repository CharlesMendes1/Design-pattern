<?php 
class Numero implements Expressao{
	private $numero;

	function __construct($numero){
		$this->numero = $numero;
	}

	public function executa(){
		//esse executa na verdade é o getNumero
		//so coloquei para forçar a criação de um metodo chamado executa 
		// essa obrigação quem faz é a interface
		var_dump($this->numero);
	    return $this->numero;
	}
	
}

 ?>