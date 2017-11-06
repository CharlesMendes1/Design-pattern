<?php 
class Soma implements Expressao{
	private $esquerdo;
	private $direito;

	function __construct(Expressao $esquerdo, Expressao $direito){
		$this->esquerdo = $esquerdo;
		$this->direito = $direito;
	}

	public function executa(){
		
		
		$ladoEsquerdo = $this->esquerdo->executa();
		               //$this->esquerdo->executa()
		               // é um objeto de Soma 
					   //então ele chama esse metodo novamente é uma [recursão]
		$ladoDireito = $this->direito->executa();

		
		return $ladoEsquerdo + $ladoDireito;
	}


	public function aceita(Impressora $visitor) {
        $visitor->visitaSoma($this);
    }

    public function getEsquerdo(){
        return $this->esquerdo;
    }
    
    public function getDireito(){
        return $this->direito;
    }
    
}

 ?>