<?php 
	require_once'Orcamento.php';
	require_once'Item.php';
	require_once'Imposto.php';
	require_once'TemplateDeImposto.php';	
	require_once'Icms.php';
	require_once'Iss.php';
	require_once'Icpp.php';
	require_once'Ihit.php';
	require_once'Ikcv.php';

	$reforma = new Orcamento(40);
	//$reforma->AddItens(New Item("Cimento",120));
	$reforma->AddItens(New Item("Cimento",120));
	$reforma->AddItens(New Item("Cimento",120));
	
	//Criando objeto para usar função
	$impostoComplexo = new Icms(new Iss());
	echo $impostoComplexo->calcula($reforma);
	
	echo "<br/>";
	echo "<br/>";
?>