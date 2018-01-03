<?php include("cabecalho.php"); 
    include("conecta.php");
    include("banco-categoria.php");
    $categorias = listaCategorias($conexao)
?>

<h1>Cadastro de produto</h1>
<?php if(isset($_COOKIE["usuario_logado"])){ ?>
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
            <td></td>
            <td>
                <input type="checkbox" name="usado" value="true">  Usado
            </td>
        </tr>
        <tr>
            <td>Descrição: </td>
            <td><textarea name="descricao" class="form-control"></textarea></td>
        </tr>
        <tr>
            <td>Categoria: </td>
            <td>
                <select class="form-control" name="categoria_id">
                    <?php  foreach ($categorias as $categoria) : ?>
                    <option value="<?= $categoria['id'] ?>">
                        <?= $categoria['nome']?>
                    </option>
                    <?php endforeach; ?>
                </select>          
            </td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
        </tr>
    </table>
</form>
<?php } else { ?>
<h3>Tá tudo errado! É preciso fazer o login, para adicionar produtos</h3>
<?php } ?>
<?php include("rodape.php"); ?>
