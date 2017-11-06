<?php 
	require_once'Orcamento.php';
	require_once'Item.php';
	require_once'EstadoDeUmOrcamento.php';
	require_once'EmAprovacao.php';
	require_once'Aprovado.php';
	require_once'Reprovado.php';
	require_once'Finalizado.php';


	$reforma = new Orcamento(400);
	//$reforma->AddItens(New Item("Cimento",120));
	//$reforma->AddItens(New Item("Cimento",120));

	$reforma->aplicaDescontoExtra();
    echo $reforma->getValor()."<br />";

    $reforma->aprovado(); // aprova nota!

    $reforma->aplicaDescontoExtra();
    echo $reforma->getValor()."<br />";// imprime 465,50 pois descontou 2%


    $reforma->finalizado();

?>
