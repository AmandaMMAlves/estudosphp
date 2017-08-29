<?php include("cabecalho.php") ?>
	<?php
		$nome = $_GET["nome"];
		$preco = $_GET["preco"];
		$conexao = mysqli_connect('localhost', 'root', 'root', 'loja', '3306');

		$query = "INSERT INTO produtos (nome, preco) VALUES ('{$nome}', {$preco})";
		
		if(mysqli_query($conexao, $query)){ ?>
			<p class="alert-success">Produto <?php echo $nome?>, <?php echo $preco ?> adicionado com sucesso!</p>

		<?php } else { ?>

			<p class="alert-danger">Produto <?php echo $nome?>, não foi adicionado com sucesso!</p>
		<?php 	} ?>
	
<?php include("rodape.php") ?>
