<?php 
require_once("cabecalho.php");
require_once("logica-usuario.php");
require_once("mostra-alerta.php");
?>

<?php 
mostraAlerta("success");
mostraAlerta("danger");
?>


	<h1> Seja bem vindo! </h1>

<?php if(usuarioEstaLogado()) { ?>
		<br><p class="text-success">Você está logado como <?=usuarioLogado()?></p>
		<br><a href="logout.php" class="btn btn-primary">SAIR</a>
<?php	} else { ?>
	
	<h4 style="margin-top: 20px;">Faça o login para acesso ao sistema</h4>
	
	<form action="login.php" method="post">
		<table>
			<tr>
				<td>
					<div class="form-group">
						<label for="email">Email</label>
						<input class="form-control" type="email" name="email" id="email">	
					</div>
				</td>
			</tr>

			<tr>
				<td>
					<div class="form-group">	
						<label for="senha">Senha</label>	
						<input class="form-control" type="password" name="senha" id="senha">	
					</div>
				</td>
			</tr>

			<tr>
				<td>
					<div class="form-group">
						<button class="btn btn-primary">Entrar</button>
					</div>
				</td>
			</tr>
		</table>		
	</form>
	

<?php } ?>


<?php require_once("rodape.php") ?>	