<?php 
class Subtracao implements Expressao{
	private $esquerdo;
	private $direito;

	function __construct(Expressao $esquerdo, Expressao $direito){
		$this->esquerdo = $esquerdo;
		$this->direito = $direito;

	}

	public function executa(){
		//esse executa é o getNumero()

		$ladoEsquerdo = $this->esquerdo->executa();
		$ladoDireito = $this->direito->executa();

		return $ladoEsquerdo - $ladoDireito;
	}
}

 ?>