<?php 

class enviarBancoDeDados implements AcoesNotaFiscal{
	public function executa(NotaFiscal $notaFiscal){
		echo "Nota  enviado para o banco <br />";
	}
}


 ?>