<?php 
interface Expressao{
	public function executa();
	public function aceita(Impressora $visitor);
}

 ?>