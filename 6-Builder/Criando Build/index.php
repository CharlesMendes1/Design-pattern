<?php 
	date_default_timezone_set('America/Sao_Paulo');
	require_once'CriadorDeNotaFiscal.php';
	require_once'Item.php';
	require_once'NotaFiscal.php';
	

	$build = new CriadorDeNotaFiscal();
	$build->AddRazaoSocial("Os Construtores");
	$build->AddCnpj("324234443/100");
	$build->AddIten(new Item('Jogo de Faca',1500));
	$build->AddIten(new Item('Jogo de Copo',20));
	$build->AddDataEmissao();
	$build->AddObservacao("Materiais domésticos");
	$notaFiscal = $build->Build();
	var_dump($notaFiscal);

?>
