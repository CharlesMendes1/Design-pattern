<?php 
class ComandoPagaPedido implements Comando{
	private $pedido;

	public function __construct(Pedido $pedido){
		$this->pedido = $pedido;
	}

	public function executa(){
		$this->pedido->Pago();
		echo"Pedido Pago de ".$this->pedido->getCliente()."<br />";
	}


}

 ?>