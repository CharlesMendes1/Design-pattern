<?php 
class Subtracao implements Expressao{
	private $esquerdo;
	private $direito;

	function __construct(Expressao $esquerdo, Expressao $direito){
		$this->esquerdo = $esquerdo; // soma(numEsq(),numDir())
		$this->direito = $direito;

	}

	public function executa(){
		//esse executa é o getNumero()

		$ladoEsquerdo = $this->esquerdo->executa();
		$ladoDireito = $this->direito->executa();

		return $ladoEsquerdo - $ladoDireito;
	}

	public function aceita(Impressora $visitor){
        $visitor->visitaSubtracao($this);
    }

    public function getEsquerdo(){
        return $this->esquerdo;
    }
    
    public function getDireito(){
        return $this->direito;
    }
}

 ?>