<?php 

include_once('Contas.php');
include_once('Conta.php');

include_once('Filtro.php');
include_once('FiltroMenorQue100Reais.php');
include_once('FiltroMaiorQue500MilReais.php');
include_once('FiltroMesmoMes.php');




$contas = new contas();
$contas->AddConta(new conta("Charles", 500100, "11-11-2010"));
$contas->AddConta(new conta("Ana", 15, "11-11-2010"));
$contas->AddConta(new conta("Maria", 20, "11-11-2010"));

$filtroDeContas = new FiltroMaiorQue500MilReais(new FiltroMenorQue100Reias());
$listaDeContasSuspeitas = array();
$listaDeContasSuspeitas = $filtroDeContas->Filtrada($contas);

	foreach($listaDeContasSuspeitas as $lista){
		echo "Nome : ".$lista->getNome()."<br />";
		echo "Valor : ".$lista->getValor()."<br />";
		echo "Data de Abertura : ".$lista->getDataAbertura()."<br />";
		echo"<br /><br />";
	}


 ?>