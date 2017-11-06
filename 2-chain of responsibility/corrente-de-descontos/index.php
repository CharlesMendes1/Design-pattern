<?php 
	require_once "InterfaceDesconto.php";
	require_once "DescontoPorVendaCasada.php";
	require_once "Desconto5Itens.php";
	require_once "Desconto500Reais.php";
	require_once "SemDesconto.php";
	require_once "Orcamento.php";
	require_once "Item.php";


		$d1 = new DescontoPorVendaCasada();
        $d2 = new Desconto5Itens();
        $d3 = new Desconto500Reais();
        $d4 = new SemDesconto();

        $d1->setProximoDesconto($d2);
        $d2->setProximoDesconto($d3);
        $d3->setProximoDesconto($d4);

        $orcamento = new Orcamento(50);
        $orcamento->AddItens(New Item("Cimento",50));
		$orcamento->AddItens(New Item("Caneta",5));
		$orcamento->AddItens(New Item("Lapis",2));
		$orcamento->AddItens(New Item("Cimento",20));
		$orcamento->AddItens(New Item("Cimento",20));

		//$calculadora = new CalculadorDeDescontos();
		//$desconto = $calculadora->calcula($orcamento);

        $desconto = $d1->desconto($orcamento);
        echo "O desconto é de ".$desconto;



 ?>