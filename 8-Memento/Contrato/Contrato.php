<?php 
class Contrato{
	private $nome;
	private $data;
	private $tipo;

	function __construct($nome,$data,$tipo = null){
		$this->nome = $nome;
		$this->data = $data;

		if($tipo == null){
			$this->tipo = new Novo();
		}else{
			$this->tipo = $tipo;
		}
		
	}
	public function getNome(){
	    return $this->nome;
	}
	
	public function setNome($nome){
	    $this->nome = $nome;
	}

	public function getTipo(){
	    return $this->tipo;
	}

	public function setTipo($tipo){
	    $this->tipo = $tipo;
	}

	public function getData(){
	    return $this->data;
	}
	
	public function setData($data){
	    $this->data = $data;
	}

	public function avanca(){
		$this->tipo->avanca($this);
	}

	public function salvarEstadoDoContrato(){
		return new Estado(new Contrato($this->nome,$this->data,$this->tipo));
		
	}

	public function restaura(Estado $estado){
		$this->nome = $estado->getContrato()->getNome();
        $this->data = $estado->getContrato()->getData();
        $this->tipo = $estado->getContrato()->getTipo();
    }
	


}

 ?>