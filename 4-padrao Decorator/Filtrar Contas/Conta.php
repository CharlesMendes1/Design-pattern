<?php 
class Conta{
	private $nome;
	private $valor;
	private $DataAbertura;

	 function __construct($nome, $valor, $DataAbertura){
	 	$this->nome = $nome;
	 	$this->valor = $valor;
	 	$this->DataAbertura = $DataAbertura;

	 }


	public function getNome(){
	    return $this->nome;
	}

	public function setNome($nome){
	    $this->nome = $nome;
	}
	public function getValor(){
	    return $this->valor;
	}
	
	public function setValor($valor){
	    $this->valor = $valor;
	}

	 public function getDataAbertura(){
	     return $this->DataAbertura;
	 }
	 
	 public function setDataAbertura($DataAbertura){
	     $this->DataAbertura = $DataAbertura;
	 }
}

 ?>