<?php 
class Novo implements TemplateContrato{
	public function avanca(Contrato $contrato){
		$contrato->setTipo(new EmAndamento());
	}
}

 ?>