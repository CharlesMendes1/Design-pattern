<?php 
require_once"Resposta.php";
class XML implements Resposta{
	private $proximo;

	function __construct(Resposta $outraResposta) {
        $this->proximo = $outraResposta;
    }

	public function responder(Requisicao $formato,Conta $conta){
		if($formato->getFormato() == Formato :: $XML){
		?>
			<h1>formato XML<h1>
			<p>Seu nome é <?=$conta->getNome()?><p>
			<p>Sua conta é <?=$conta->getSaldo()?><p>
		<?php
		}else{
			$this->proximo->responder($formato, $conta);
		}
	}

}


 ?>