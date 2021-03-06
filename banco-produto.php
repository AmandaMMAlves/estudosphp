<?php 

require_once("conecta.php"); 
	
function listaProdutos($conexao)
{
	$produtos = array();
	$resultado = mysqli_query($conexao, "select produtos.*,categorias.nome as categoria_nome from produtos inner join categorias on produtos.categoria_id = categorias.id;");

	while($produto = mysqli_fetch_assoc($resultado)) {
	    array_push($produtos, $produto);
	}

	return $produtos;
}

function buscaProduto($conexao,$id)
{
	$resultado = mysqli_query($conexao, "select * from produtos where id = {$id}");
	return mysqli_fetch_assoc($resultado);
}

function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado) 
{
	$query = "UPDATE produtos SET nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}', categoria_id = {$categoria_id}, usado = {$usado} WHERE id = {$id}";
	return mysqli_query($conexao, $query);
}

function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado) {
    $nome = mysqli_real_escape_string($conexao, $nome);
    $descricao = mysqli_real_escape_string($conexao, $descricao);

    $query = "insert into produtos (nome, preco, descricao, categoria_id, usado) values ('{$nome}', {$preco}, '{$descricao}', {$categoria_id}, {$usado})";
    return mysqli_query($conexao, $query);
}

function removeProduto($conexao, $id) {
	$query = "delete from produtos where id= {$id}";
	return mysqli_query($conexao, $query);	
}