<?php require_once("cabecalho.php"); 
    require_once("banco-categoria.php");
    require_once("logica-usuario.php");
    verificaUsuario();
    
    $categorias = listaCategorias($conexao);
    $produto = array("nome" => "", "preco" => "", "descricao" => "", "categoria-id" => "1");
    $usado = "";
?>

<h1>Cadastro de produto</h1>

<form action="adiciona-produto.php" method="POST">
    <?php include("produto-formulario-base.php"); ?>
        <tr>
            <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
        </tr>
    </table>
</form>



<?php require_once("rodape.php"); ?>
