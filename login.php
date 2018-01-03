<?php include("conecta.php");
include("banco-usuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
if ($usuario)
{
	header("Location:index.php?logado=1");
	setcookie("usuario_logado", $usuario["email"]);
}
else
{
	header("Location:index.php?logado=0");
}
