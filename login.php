<?php include("conecta.php");
include("banco-usuario.php");
include("logica-usuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
if ($usuario)
{
	header("Location:index.php?logado=1");
	logaUsuario($usuario["email"]);
	die();
}
else
{
	header("Location:index.php?logado=0");
	die();
}
