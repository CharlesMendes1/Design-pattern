<?php 
	require_once'Orcamento.php';
	require_once'Item.php';
	require_once'CalculadoraDeImpostos.php';
	require_once'Imposto.php';
	require_once'TemplateDeImposto.php';	
	require_once'Icms.php';
	require_once'Iss.php';
	require_once'Icpp.php';
	require_once'Ihit.php';
	require_once'Ikcv.php';

	$reforma = new Orcamento(20);
	//$reforma->AddItens(New Item("Cimento",120));
	$reforma->AddItens(New Item("Cimento",120));
	$reforma->AddItens(New Item("Cimento",120));
	
	//Criando objeto para usar função
	//$icms = new Icms();
	//echo $icms->calcula($reforma);
	
	echo "<br/>";
	echo "<br/>";

	
	//Usando uma classe generica para gerenciar o acesso a função
	$calculadora = new CalculadoraDeImpostos();
	
	echo $calculadora->calcula($reforma, new Ihit());
	echo "<br/>";
?>