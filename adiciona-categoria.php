<?php require_once("cabecalho.php"); 
 require_once("banco-categoria.php");
 require_once("class/Categoria.php");
 ?>

<?php


$categoria = new Categoria();
$categoria->setNome($_POST["nome"]);


if($categoria->getNome() != "") {
	if(insereCategoria($conexao, $categoria)) { ?>

		<p class="text-success">Categoria: <?= $categoria->getNome(); ?>, adicionada com sucesso!!!</p> 

<?php	
	} else { 
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">Categoria: <?= $categoria->getNome(); ?> não foi adicionada... <br> ERRO: <?= $msg; ?></p>
	
<?php	
	}
		} else {
			header("Location: categoria-formulario.php");
			die(); //Sempre chamar die() após um Location
		}
	// mysqli_close($conexao); // Opcional pois o PHP fecha automaticamente a conexão
?>

	

<?php require_once("rodape.php") ?>