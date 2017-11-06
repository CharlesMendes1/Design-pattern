<?php 
class CriadorDeNotaFiscal{
	private $razaoSocial;
	private $cnpj;
	private $valorBruto;
	private $impostos;
	private $dataEmissao;
	private $observacao;
	private $itens;

	private $acoesNotaFiscal;

	function __construct($lista){
		 $this->itens = array();
	     $this->valorBruto = 0;
	     $this->impostos = 0;
	     $this->acoesNotaFiscal = $lista;
	}

	public function getRazaoSocial(){
	    return $this->razaoSocial;
	}
	
	public function AddRazaoSocial($razaoSocial){
	    $this->razaoSocial = $razaoSocial;
	}

	public function getCnpj(){
	    return $this->cnpj;
	}
	
	public function AddCnpj($cnpj){
	    $this->cnpj = $cnpj;
	}

	public function getValorBruto(){
	    return $this->valorBruto;
	}
	

	public function getImpostos(){
	    return $this->impostos;
	}
	
	public function setImpostos($impostos){
	    $this->impostos = $impostos;
	}
	public function getDataEmissao(){
	    return $this->dataEmissao;
	}
	
	public function AddDataEmissao($dataEmissao = null){
		if($dataEmissao == null){
			$this->dataEmissao = date('d-m-Y h:m:s');
		}else{
			$this->dataEmissao = $dataEmissao;
		}
	    
	}

	public function getObservacao(){
	    return $this->observacao;
	}
	
	public function AddObservacao($observacao){
	    $this->observacao = $observacao;
	}

	public function AddIten(Item $item){
		$this->itens[] = $item;
		$this->valorBruto += $item->getValor();
		$this->impostos += $item->getValor() * 0.05;

	}
	/*
	public function AddAcoesNotaFiscal(AcoesNotaFiscal $acoesNotaFiscal){
	    $this->acoesNotaFiscal[] = $acoesNotaFiscal;
	}
	*/
	public function Build(){
		$nf = new NotaFiscal($this->razaoSocial, $this->cnpj, $this->valorBruto,
							 $this->impostos, $this->dataEmissao, $this->observacao, 
							 $this->itens);

		foreach($this->acoesNotaFiscal as $acao){
			$acao->executa($nf);
		}

		return $nf;
	}
}	

?>
