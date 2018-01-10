<?php

require_once("conecta.php"); 

function listaCategorias($conexao){
	$categorias = array();
	$resultado = mysqli_query($conexao, "select * from categorias");
	while($categoria = mysqlI_fetch_assoc($resultado))
	{
		array_push($categorias, $categoria);
	}
	return $categorias;
}