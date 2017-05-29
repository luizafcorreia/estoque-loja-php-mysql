<?php 
require_once("cabecalho.php");
require_once("logica-usuario.php");
require_once("mostra-alerta.php");

mostraAlerta("danger");
?>

<h1 style="margin-bottom: 25px;">Formulário de contato</h1>

<div class="container">
	<form action="envia-contato.php" method="post">
		<table class="table">
			<tr>
				<td>Nome</td>
				<td><input type="text" name="nome" class="form-control"></td>
			</tr>
			<tr>
				<td>E-mail</td>
				<td><input type="email" name="email" class="form-control"></td>
			</tr>
			<tr>
				<td>Mensagem</td>
				<td><textarea name="mensagem" class="form-control"></textarea></td>
			</tr>
			<tr>
				<td style="border-top-width: 0px;">
					<button class="btn btn-primary">Enviar</button>
				</td>
			</tr>
		</table>
	</form>
</div>




<?php require_once("rodape.php") ?>	