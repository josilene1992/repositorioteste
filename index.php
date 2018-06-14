<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="estilox.css"/>
  <meta charset="UTF-8"/>
  <title>PHP </title>
  <script language="JavaScript" src="funcaojs.js"></script>
</head>
 
<body>
<div id="site">
<div id="divcabecalho">
<h1><center><p> Formulário de cadastro </p></center></h1>
</div>
<div id ="divconteudo">
  <form id ="formIncluirU" method="post" action="tratamentof.php" >
  Nome: <input type="text" name="nome">	
  Senha: <input type="text" name="senha">
  Telefone: <input type="text" name="tel">
  <input type="submit" value="enviar" name="incluirU">
  </form>
  <form method="post" action="apagarcli.php">
  Digite o nome para apagar: <input type="text" name="nome">
  <input type="submit" value="enviar">
  </form>
  <form method="post" action="alterarcli.php">
  Digite o nome da pessoa que terá o tel alterado: <input type="text" name="nome">
  Novo número (telefone): <input type="text" name="tel">
  <input type="submit" value="enviar">
  </form>
  <br/>
 
 <div>
	<h3 id= "subtexto1"> Clientes cadastrados </h3>	

</div>
  <div id="divMostrarTU">
 <?php  require_once 'funcoes.php'; $mostrarUsuarios=new bancoUsuario(); $mostrarUsuarios->mostrarUsuarios(); ?>
  </div>
  
  </div>
<div id="divrodape">
</div>
</div>

</body>
</html>



