<?php 
function carregaClasse($nomeClass){
	require_once ($nomeClass.".php");
}
spl_autoload_register("carregaClasse");
date_default_timezone_set('America/Sao_Paulo');

$historico = new Historico();

$contrato = new Contrato("Charles",date('d-m-Y h:m:s'));
$historico->adiciona($contrato->salvarEstadoDoContrato());


$contrato->avanca();
$historico->adiciona($contrato->salvarEstadoDoContrato());

$contrato->avanca();
$historico->adiciona($contrato->salvarEstadoDoContrato());

$contrato->avanca();
$historico->adiciona($contrato->salvarEstadoDoContrato());

$contrato->restaura($historico->pega(3));
//var_dump($historico->getEstadosSalvos());
var_dump($contrato->getTipo());

 ?>