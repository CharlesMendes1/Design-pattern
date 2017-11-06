<?php 
class FilaDeComandos{
	private $filaDeComandos;

	public function __construct(){
		$filaDeComandos = array();
	}

	public function adiciona(Comando $comando){
		$this->filaDeComandos[] = $comando;
	}

	public function executa(){
		foreach($this->filaDeComandos as $comando){
			$comando->executa();
		}
	}
}

 ?>