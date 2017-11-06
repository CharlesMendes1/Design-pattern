<?php 
require_once"Resposta.php";
class PORCENTO implements Resposta{
	private $proximo;

	function __construct($outraResposta) {
        $this->proximo = $outraResposta;
    }

	public function responder(Requisicao $formato, Conta $conta){
		if($formato->getFormato() == Formato :: $PORCENTO){
			echo "formato PORCENTO nome : %".$conta->getNome()."% saldo : %".$conta->getSaldo()."%";
		}else if(!is_null($proximo)){
            $this->proximo->responder($formato, $conta);
        } else {
            // não existe próxima na corrente, e ninguém atendeu a requisição!
            // poderíamos não ter feito nada aqui, caso não fosse necessário!
            throw new Exception("Formato de resposta não encontrado");
        }
	}

}


 ?>