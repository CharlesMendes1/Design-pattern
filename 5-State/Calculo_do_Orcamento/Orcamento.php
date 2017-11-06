<?php 
	class Orcamento{
		private $valor;
		private $itens = array();
		private $estado;

		function __construct($valor){
			$this->valor = $valor;
			$this->estado = new EmAprovacao();
		}

		public function getValor(){
		    return $this->valor;
		}
		
		public function setValor($valor){
		    $this->valor = $valor;
		}

		public function getItens(){
		    return $this->itens;
		}
		
		public function AddItens(Item $item){
		    $this->itens[] = $item;
		}

		public function getEstado(){
		    return $this->estado;
		}
		
		public function setEstado(EstadoDeUmOrcamento $estado){
		    $this->estado = $estado;
		}

		public function aplicaDescontoExtra() {
	        $this->estado->aplicaDescontoExtra($this);

	        //pega o obj que ta  guardado na var "estado"
	        // e acessa a funcão aplicaDescontoExtra() paas
	        //
      	}

	    public function aprovado() {
	        $this->estado->aprovado($this);
	    }

        public function reprova() {
         	$this->estado->reprovado($this);
        }

        public function finalizado() {
         	$this->estado->finalizado($this);
        }

	}
 ?>