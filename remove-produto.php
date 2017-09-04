<?php 
	include("cabecalho.php");
	include("conecta.php"); 
	include("banco-produto.php");

	$id = $_POST['id'];
	removeProduto($conexao,$_POST['id']);

	header("Location: produto-lista.php?removido=true");
	die();

include("rodape.php") ?>