<?php 

class ServicoSingleton{

	private static $instancia = null;

    public function getInstancia(){
        if(!isset($instancia)) {
           $instancia = new Servicos();
           echo"criado objeto <br/>";
        }

        return $instancia;
    }

}




 ?>