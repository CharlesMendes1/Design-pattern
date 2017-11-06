<?php 
	function carregaClasse($class){
		require_once $class.".php";
	}
	spl_autoload_register("carregaClasse");


	$pedido1 = new Pedido("Charles",500);
	$pedido2 = new Pedido("Ana",100);
	$pedido3 = new Pedido("Marcos",150);
	$pedido4 = new Pedido("Antonio",300);
	$pedido5 = new Pedido("Carlos",200);


	//Padrão de Projeto Command
	$fila = new FilaDeComandos;
	$fila->adiciona(new ComandoPagaPedido($pedido1));
	$fila->adiciona(new ComandoPagaPedido($pedido2));
	$fila->adiciona(new ComandoPagaPedido($pedido3));
	$fila->adiciona(new ComandoPagaPedido($pedido4));
	$fila->adiciona(new ComandoConcluiPedido($pedido5));


	$fila->executa();



 ?>