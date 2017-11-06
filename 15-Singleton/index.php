<?php 
require_once"Servicos.php";
require_once"ServicoSingleton.php";

 $simgleton = new ServicoSingleton();
 $novoServico = $simgleton->getInstancia();

 $novoServico = $simgleton->getInstancia();

  $novoServico = $simgleton->getInstancia();
//$novoServico = $simgleton.getInstancia();
 ?>