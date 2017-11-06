<?php 

class FiltroMaiorQue500MilReais extends Filtro{

	function __construct($novoFiltro = null){
		parent:: __construct($novoFiltro);
	}

	public function Filtrada($contas){
		$vetorFiltrado = array();
		
		foreach($contas->getContas() as $conta){
			if($conta->getValor() > 500000){
				$vetorFiltrado[] = $conta;
			}
		}

		//Decorator >>>
		foreach($this->novoFiltro($contas) as $conta){
             $vetorFiltrado[] = $conta;
        }
        //-------------

		return $vetorFiltrado;
	}
}


 ?>