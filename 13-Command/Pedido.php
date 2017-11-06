<?php 
 class Pedido{
	private $cliente;
	private $valor;
	private $status;
	private $dataFinalizacao;

	public function __construct($novoCliente,$novoValor){
		$this->cliente = $novoCliente;
		$this->valor = $novoValor;
		$this->status = new Novo();
	}

	public function Pago(){
		$this->status = New Pago();
	}

	public function Finalizado(){
		$this->dataFinalizacao = date("Y-m-d");
		$this->status = New Finalizado();
	}

	public function getCliente(){
	    return $this->cliente;
	}
	
}

 ?>