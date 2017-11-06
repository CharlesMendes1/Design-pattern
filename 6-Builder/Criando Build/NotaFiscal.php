<?php 

class NotaFiscal{
	private $razaoSocial;
	private $cnpj;
	private $valorBruto;
	private $impostos;
	private $dataEmissao;
	private $observacao;
	private $itens;


	function __construct($razaoSocial, $cnpj, $valorBruto, $impostos, $dataEmissao, $observacao, $itens){
		$this->razaoSocial = $razaoSocial;
		$this->cnpj = $cnpj;
		$this->valorBruto = $valorBruto;
		$this->impostos = $impostos;
		$this->dataEmissao = $dataEmissao;
		$this->observacao = $observacao;
		$this->itens = $itens;
	}




}

?>