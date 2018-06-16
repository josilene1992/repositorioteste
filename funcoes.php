<?php
require_once 'usuario.php';
require_once 'conexaoaula.php';
require_once 'index.php';

//teste
class bancoUsuario{	
	
	public function cadastrarUsuario(){
	$conexaobd=new conexaobd();
	$usuarios=new usuario();
	$conexaobd->conectar();
	
 $usuarios->setNome($_POST["nome"]);
 $usuarios->setSenha($_POST["senha"]);
 $usuarios->setTel($_POST["tel"]); 
 $nome=$usuarios->getNome();
 $senha=$usuarios->getSenha();
 $tel=$usuarios->getTel();
 $consulta="INSERT INTO clientes (cod,nome,senha,tel) 
VALUES(NULL,'$nome','$senha' ,'$tel')";
 $conexaobd->query($consulta);
//echo $usuarios->getNome();
}



public function mostrarUsuarios(){
	
	$conexaobd=new conexaobd();
	$usuarios=new usuario();
	$conexaobd->conectar();
	
	$consulta="select * from clientes";
	$dados=$conexaobd->query($consulta);
	$numerol=$dados->num_rows;
	$linha=mysqli_fetch_assoc($dados);
//echo $numerol;	

	echo "<table id=\"tabela1\"><tr><td id=\"coluna1\">Nome</td><td id=\"coluna1\">Senha</td><td id=\"coluna1\">Tel do Usuário</td></tr>";
    if($numerol > 0) {
     do {
      echo "<tr><td id=\"coluna1\">" . $linha['nome'] . "</td><td id=\"coluna1\">" . $linha['senha'] . "</td><td id=\"coluna1\">" . $linha['tel'] . "</td></tr>";

     }while($linha = mysqli_fetch_assoc($dados));
	
	}
}
	


	

}


?>
