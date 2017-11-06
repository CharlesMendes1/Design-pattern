<?php 

class FiltroMenorQue100Reias extends Filtro{

	function __construct($novoFiltro = null){
		parent:: __construct($novoFiltro);
	}

	public function Filtrada($contas){
		$vetorFiltrado = array();

		foreach($contas->getContas() as $conta){
			if($conta->getValor() < 100){
				$vetorFiltrado[] = $conta;
			}
		}

		
		
		foreach($this->novoFiltro($contas) as $conta){
			var_dump($contas);
             $vetorFiltrado[] = $conta;
        }

		return $vetorFiltrado;
	}
}

 ?>