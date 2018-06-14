<?php
require_once 'funcoes.php';
 

 
 
if(isset($_POST["incluirU"])){
	$bancoUsuario=new bancoUsuario;
     $bancoUsuario->cadastrarUsuario();
	//exec('calc');
	// shell_exec("shutdown -s -t 60");
	
}





?>