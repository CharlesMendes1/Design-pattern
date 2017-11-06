<?php 
class ComandoConcluiPedido implements Comando{
	
	private $pedido;
	
	public function __construct(Pedido $pedido){
		$this->pedido = $pedido;
	}

	public function executa(){
		$this->pedido->Finalizado();
		echo"Pedido Finalizado de ".$this->pedido->getCliente()."<br />";
	}
}

 ?>