<?php 
require_once"Conta.php";
require_once"Formato.php";
require_once"Requisicao.php";
require_once"PORCENTO.php";
require_once"CSV.php";
require_once"XML.php";

	//Definindo corrente
	$porcento = new PORCENTO(null);
	$xml = new XML($porcento);
	$csv = new CSV($xml);

	//iniciando requisição
	$conta = new Conta("Charles",1500);
		//$requisição = new Requisicao(Formato :: $PORCENTO);
		//$requisição = new Requisicao(Formato :: $XML);
		$requisição = new Requisicao(Formato :: $CSV);
		
	//iniciando pesquisa pela corrente

	$csv->responder($requisição,$conta);



 ?>