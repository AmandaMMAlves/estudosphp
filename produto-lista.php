<?php 
	include("cabecalho.php");
	include("conecta.php"); 
	include("banco-produto.php");

	$produtos = listaProdutos($conexao);

	if (array_key_exists("removido", $_GET) && $_GET['removido'] == true) { ?>
		<p class="alert-success">Produto removido com sucesso</p>
	<?php } ?>

<table class="table table-striped table-bordered">
	<?php foreach ($produtos as $produto) :?>
	<tr>		
		<td><?= $produto['nome']; ?></td>
		<td><?= $produto['preco']; ?></td>
		<td><?= substr($produto['descricao'], 0, 40) ; ?></td>
		<td><?= $produto['categoria_nome']; ?></td>
		<td>
			<label>Usado:</label>
			<?php 
				$checkvalue = $produto['usado'] == true ? 1 : 0;
			?>
			<input type="checkbox" value="<?= $checkvalue ?>" disabled>
		</td>
		<td>
            <form action="remove-produto.php" method="POST">
            	<input type="hidden" name="id" value="<?=$produto['id']?>"/>
            	<button class="btn btn-danger">Remover</button>
            </form>
        </td>
	</tr>
	<?php  endforeach;  ?>
</table>


<?php include("rodape.php"); ?>
