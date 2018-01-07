<?php 
	include("cabecalho.php");
	include("conecta.php"); 
	include("banco-produto.php");
	include("logica-usuario.php");

	$id = $_POST['id'];
	removeProduto($conexao,$_POST['id']);
	$_SESSION["success"] = "Produto removido com sucesso!";
	header("Location: produto-lista.php");
	die();

include("rodape.php") ?>