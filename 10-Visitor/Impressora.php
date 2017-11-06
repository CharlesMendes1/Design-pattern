<?php 
class Impressora{

	public function visitaSoma(Soma $soma) {
        echo "(";
        $soma->getEsquerdo()->aceita($this);
        echo " + ";
       $soma->getDireito()->aceita($this);
        echo ")";

    }

    public function visitaSubtracao(Subtracao $subtracao) {
    	//var_dump($subtracao);
        echo "(";
        $subtracao->getEsquerdo()->aceita($this);
        echo " - ";
        $subtracao->getDireito()->aceita($this);
        echo ")";
    }

    public function visitaNumero(Numero $numero) {
        echo $numero->getNumero();

    }
}



 ?>