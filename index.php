<?php include("cabecalho.php");
      include("logica-usuario.php"); ?>
            <h1>Bem vindo!</h1>
            <?php if(isset($_GET["logout"]) && $_GET["logout"] == true) {
            ?>
            <p class="alert-success">Usuario deslogado com sucesso!</p>
            <?php } if(isset($_GET["falha_seguranca"]) && $_GET["falha_seguranca"] == true)
            { ?>

            <p class="alert-danger">Tá tudo errado! É preciso fazer o login, para adicionar produtos</p>

            <?php } if(usuarioEstaLogado()) { ?>
            <p class="text-success"> 
                  Usuario logado como: <?= usuarioLogado(); ?>
                  <a href="logout.php">Deslogar</a>
            </p> <?php } else { ?>
            <?php
            if(isset($_GET['logado'])&& $_GET['logado'] == true) { ?>
            <p class="alert-success">Usuario logado com sucesso</p> 
            <?php } if(isset($_GET['logado'])&& $_GET['logado'] == false) { ?>
            <p class="alert-danger">Login ou senha do usuario inválido(s) </p> <?php } ?>

            <h2>Login</h2>
            <form action="login.php" method="post">            
            <table class="table">
            	<tr>
            		<td>Email</td>
            		<td><input class="form-control" type="email" name="email"></td>
            	</tr>
            	<tr>
            		<td>Senha</td>
            		<td><input class="form-control" type="password" name="senha"></td>
            	</tr>
            	<tr>
            		<td> <button class="btn btn-primary" type="submit">Login</button> </td>
            	</tr>
            </table>
            </form>
            <?php } ?>
<?php include("rodape.php"); ?>
