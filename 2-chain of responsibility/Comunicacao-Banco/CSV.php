<?php 

require_once"Resposta.php";

class CSV implements Resposta {
	private $proximo;

	function __construct(Resposta $outraResposta) {
        $this->proximo = $outraResposta;
    }

	public function responder(Requisicao $formato,Conta $conta){
		if($formato->getFormato() == (Formato :: $CSV)){
			echo "formato CSV nome : ".$conta->getNome()." saldo : ".$conta->getSaldo();
		}else{
			$this->proximo->responder($formato, $conta);
		}
	}

}

 ?>