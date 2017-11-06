<?php 
class EmAndamento implements TemplateContrato{
	public function avanca(Contrato $contrato){
		$contrato->setTipo(new Acertado());
	}
}


 ?>