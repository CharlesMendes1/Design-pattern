<?php 
	require_once'Orcamento.php';
	require_once'CalculadoraDeImpostos.php';
	
	require_once'Icms.php';
	require_once'Iss.php';
	
	$reforma = new Orcamento(500);
	$calculadora = new CalculadoraDeImpostos();
	
	echo $calculadora->calcula($reforma, new Icms());
	echo "<br>";
	echo $calculadora->calcula($reforma, new Iss());
?>