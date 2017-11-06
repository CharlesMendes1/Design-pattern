<?php 

function carregaClasse($nomeClass){
	require_once $nomeClass.".php";
}
spl_autoload_register("carregaClasse");
	//para somar 1 + 1 ;
	/*
		$esquerdo = new Numero(1);
		$direito = new Numero(2);
		$soma = new Soma($esquerdo,$direito);
		echo $soma->executa();
	*/
	//para somar 2 + 2 -  2 + 3 
	$esquerdo = new Soma(new Numero(2),new Numero(500));
	$direito = new Soma(new Numero(1),new Numero(100));
	$subtracao = new Subtracao($esquerdo,$direito);
	echo $subtracao->executa();
?>