<?php 
class MultiplicaValor implements AcoesNotaFiscal{
	private $numeroMultiplicador;

	function __construct($numeroMultiplicador){
		$this->numeroMultiplicador = $numeroMultiplicador;
	}

	public function executa(NotaFiscal $notaFiscal){
		echo "O valor da nota fiscal, multiplicado por ".$this->numeroMultiplicador. " é ". 
		($notaFiscal->getValorBruto() * $this->numeroMultiplicador)." R$" ;
	}

}


 ?>