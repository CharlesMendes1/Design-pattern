<?php 
class Formato{
	public static $XML = 1;
    public static $CSV = 2;
    public static $PORCENTO = 3;

    private $escolhido;

    function __construct($escolhido){
    	$this->escolhido = $escolhido;
    	return $escolhido;
    }


}

?>