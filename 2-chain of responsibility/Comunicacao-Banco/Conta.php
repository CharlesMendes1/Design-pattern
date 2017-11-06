<?php 
class Conta{
	private $nome;
	private $saldo;

	function __construct($nome, $saldo){
		$this->nome = $nome;
		$this->saldo = $saldo;
	}

	public function getNome(){
	    return $this->nome;
	}
	
	public function setNome($nome){
	    $this->nome = $nome;
	}

	public function getSaldo(){
	    return $this->saldo;
	}
	
	public function setSaldo($saldo){
	    $this->saldo = $saldo;
	}

}

 ?>