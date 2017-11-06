<?php 
class Historico{
	private $estadosSalvos;

	function __construct(){
		$this->estadosSalvos = array();
	}

	public function adiciona(Estado $estado) {
        $this->estadosSalvos[] = $estado;
    }

    public function getEstadosSalvos(){
        return $this->estadosSalvos;
    }
    
    public function setEstadosSalvos($estadosSalvos){
        $this->estadosSalvos = $estadosSalvos;
    }

    public function pega($index) {
        return $this->estadosSalvos[$index];
    }
}

 ?>