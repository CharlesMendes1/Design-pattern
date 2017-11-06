<?php 
interface InterfaceDesconto{
	public function setProximoDesconto(InterfaceDesconto $proximoDesconto);
	public function desconto(Orcamento $orcamento);
	

}

 ?>