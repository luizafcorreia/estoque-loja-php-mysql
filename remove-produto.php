<?php 
require_once("cabecalho.php");
require_once("banco-produto.php"); 
require_once("logica-usuario.php");

verificaUsuario();

$id = $_POST['id'];
removeProduto($conexao, $id);
$_SESSION["success"] = "Produto removido com sucesso!";
header("Location: produto-lista.php");
die(); //Sempre chamar die() após um Location

