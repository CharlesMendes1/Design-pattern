<?php 
	require_once'Conta.php';
	require_once'RealizadorDeInvestimentos.php';
	require_once'InvestimentoConservador.php';
	require_once'InvestimentoArrojado.php';
	require_once'InvestimentoModerado.php';

	$conta = new Conta(1000);
	//a classe RealizadorDeInvestimentos() é o Strategy que comanda as ações com o obj
	$iniciandoInvestimento = new RealizadorDeInvestimentos();
	echo $conta->getSaldo();
	echo "<br>";
	$iniciandoInvestimento->investimento($conta,new InvestimentoArrojado());
	echo $conta->getSaldo();


 ?>