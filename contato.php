<?php require_once("cabecalho.php"); ?>

<h1>Contato</h1>

<form action="envia-contato.php" method="POST">
	<table class="table">
		<tr>
			<td>Nome: </td>
			<td> <input class="form-control" type="text" name="nome"/> </td>
		</tr>
		<tr>
			<td>Email: </td>
			<td> <input class="form-control" type="email" name="email"/> </td>
		</tr>
		<tr>
			<td>Mensagem: </td>
			<td> <textarea class="form-control" name="mensagem"></textarea> </td>
		</tr>
		<tr>
			<td>
				<button class="btn btn-primary" type="submit">Enviar</button>
			</td>
		</tr>
	</table>

</form>

<?php require_once("rodape.php"); ?>