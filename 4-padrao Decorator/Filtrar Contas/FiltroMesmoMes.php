<?php 

class FiltroMesmoMes extends Filtro{

	function __construct( $novoFiltro = null) {
        	parent::__construct($novoFiltro);
    }

	public function filtrada($contas) {
        $vetorFiltrado = array();
        foreach($contas->getContas() as $conta) {
          if($conta->getDataAbertura()->get("month") == date("m") && $conta->getDataAbertura()->get("year") == date("Y")) {
              $vetorFiltrado[] = $conta;
          }
        }

        foreach($this->novoFiltro($contas) as $conta)  {
             $vetorFiltrado[] = $conta;
        }
        return $vetorFiltrado;
	}

}



 ?>