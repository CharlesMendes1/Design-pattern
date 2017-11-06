<?php 
class Acertado implements TemplateContrato{
	public function avanca(Contrato $contrato){
		$contrato->setTipo(new Concluido());
	}
}

 ?>