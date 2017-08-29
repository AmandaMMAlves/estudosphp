<?php include("cabecalho.php") ?>
	<?php

		function InsereProduto($conexao, $nome, $preco){
			$query = "INSERT INTO produtos (nome, preco) VALUES ('{$nome}', {$preco})";	
			return mysqli_query($conexao, $query);
		}

		$nome = $_GET["nome"];
		$preco = $_GET["preco"];
		$conexao = mysqli_connect('localhost', 'root', 'root', 'loja', '3306');		
		
		if(InsereProduto($conexao, $nome, $preco)){ ?>
			<p class="text-success">Produto <?php echo $nome?>, <?php echo $preco ?> adicionado com sucesso!</p>

		<?php } else { $msg = mysqli_error($conexao); ?>

			<p class="text-danger">Produto <?php echo $nome?>, não foi adicionado: <?= $msg ?></p>
		<?php 	} ?>
	
<?php include("rodape.php") ?>
