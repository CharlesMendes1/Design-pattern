<?php 
class Concluido implements TemplateContrato{
	public function avanca(Contrato $contrato){
		throw new Exception("Contrato Concluido não a mais tipos");
	}
}

 ?>