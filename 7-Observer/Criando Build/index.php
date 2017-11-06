<?php 
	date_default_timezone_set('America/Sao_Paulo');
	require_once'CriadorDeNotaFiscal.php';
	require_once'Item.php';
	require_once'NotaFiscal.php';
	require_once'AcoesNotaFiscal.php';
	require_once'enviarEmail.php';
	require_once'enviarBancoDeDados.php';
	require_once'MultiplicaValor.php';

	//Adicionando acoes para serem executadas
	$lista = array();
	$lista[] = new enviarEmail();
	$lista[] = new enviarBancoDeDados();
	$lista[] = new MultiplicaValor(5);
	
	/*
	$build->AddAcoesNotaFiscal();
	$build->AddAcoesNotaFiscal();
	$build->AddAcoesNotaFiscal(new MultiplicaValor(5));
	*/

	$build = new CriadorDeNotaFiscal($lista);


	//Adicionando itens da nota fiscal
	$build->AddRazaoSocial("Os Construtores");
	$build->AddCnpj("324234443/100");
	$build->AddIten(new Item('Jogo de Faca',1500));
	$build->AddIten(new Item('Jogo de Copo',20));
	$build->AddDataEmissao();
	$build->AddObservacao("Materiais domésticos");

	
	//gerando nota fiscal
	$notaFiscal = $build->Build();
	var_dump($notaFiscal);

?>
