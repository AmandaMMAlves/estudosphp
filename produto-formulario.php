<?php include("cabecalho.php"); 
    include("conecta.php");
    include("banco-categoria.php");
    $categorias = listaCategorias($conexao)
?>

<h1>Formulário de cadastro</h1>
<form action="adiciona-produto.php" method="POST">
    <table class="table">
        <tr>
            <td>Nome: </td>
            <td><input class="form-control" type="text" name="nome" /></td>
        </tr>
        <tr>
            <td>Preço: </td>
            <td><input class="form-control" type="number" name="preco" min="0" step="0.01"/></td>
        </tr>
        <tr>
            <td>Descrição: </td>
            <td><textarea name="descricao" class="form-control"></textarea></td>
        </tr>
        <tr>
            <td>Categoria: </td>
            <td>
            <?php            
            foreach ($categorias as $categoria) : ?>
                <input type="radio" name="categoria_id" value='<?= $categoria['id'] ?>'><?= $categoria['nome']?></br>
            <?php endforeach; ?>
            </td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
        </tr>
    </table>
</form>

<?php include("rodape.php"); ?>
