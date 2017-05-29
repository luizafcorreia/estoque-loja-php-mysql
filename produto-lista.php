<?php 
require_once("cabecalho.php");
require_once("banco-produto.php");
require_once("mostra-alerta.php");


mostraAlerta("success");
?>

<h1 style="margin-bottom: 40px;">Produtos cadastrados</h1>
<table class="table table-bordered table-hover">
	<thead>
		<td>#ID</td>
		<td>Nome do produto</td>
		<td>Preço (R$)</td>
		<td>Preço com desconto(R$)</td>
		<td>Descrição</td>
		<td>Categoria</td>
		<td>Estado</td>
		<td>Alterar</td>
		<td>Remover</td>
	</thead>

	<?php 
		$produtos = listaProdutos($conexao);
		foreach($produtos as $produto) :
	?>
		<tr>
			<td><?= $produto->getId() ?></td>
			<td><?= $produto->getNome() ?></td>
			<td><?= $produto->getPreco() ?></td>
			<td><?= $produto->precoComDesconto(5) //valor do desconto em porcentagem ?></td>
			<td><?= substr($produto->getDescricao(), 0, 100) ?></td>
			<td><?= $produto->getCategoria()->getNome() ?></td>
			<td><?php if($produto->isUsado()){echo "Usado";} else {echo "Novo";}?></td>
			<td>
				<a href="altera-produto-formulario.php?id=<?=$produto->getId()?>" class="btn btn-primary" style="margin-bottom: 5px;">alterar</a>
			</td>
			<td>	
				<form action="remove-produto.php" method="post">
					<input type="hidden" name="id" value="<?=$produto->getId()?>">
					<button class="btn btn-danger">remover</button>
				</form>
			</td>
		</tr>	
	<?php	
		endforeach	
	?>

</table>


<?php include("rodape.php") ?>