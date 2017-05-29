<?php require_once("cabecalho.php");
 require_once("banco-categoria.php"); ?>


<?php
$id = $_POST['id'];
removeCategoria($conexao, $id);
header("Location: categoria-formulario.php?removido=true");
die(); //Sempre chamar die() após um Location
?>
