<?php 
	class RealizadorDeInvestimentos{
		function investimento(Conta $conta, Investimento $tipoDeInvestimento){
			$resultado = $tipoDeInvestimento->calcular($conta);
			$saldoDoInvestimento = $resultado - ($resultado * 0.25);
			$conta->depositar($saldoDoInvestimento);
		}



	}



?>