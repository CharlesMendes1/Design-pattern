<?php 
	abstract class Filtro{
		protected $novoFiltro;

		function __construct($novoFiltro = null){
			$this->novoFiltro = $novoFiltro;
		}

		public abstract function Filtrada($contas);

		public function novoFiltro($contas){
	        if(!is_null($this->novoFiltro)) 
				return $this->novoFiltro->Filtrada($contas);
	        else return Array();
	    }
	}
 ?>