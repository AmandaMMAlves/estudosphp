<?php 
	include("cabecalho.php");
	include("conecta.php"); 
	include("banco-produto.php");?>

<?php

$produtos = listaProdutos($conexao);?>

<table class="table table-striped table-bordered	">
	<?php foreach ($produtos as $produto) :?>
	<tr>		
		<td><?= $produto['nome']; ?></td>
		<td><?= $produto['preco']; endforeach; ?></td>
	</tr>
</table>


<?php include("rodape.php"); ?>
