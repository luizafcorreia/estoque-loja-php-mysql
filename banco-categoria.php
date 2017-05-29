<?php
require_once("conecta.php");
require_once("class/Categoria.php");


header('Content-Type: text/html; charset=utf-8');

function insereCategoria($conexao, $categoria) {
	$query = "insert into categorias (nome) values ('{$categoria->getNome()}')";
	return mysqli_query($conexao, $query);
}

function listaCategorias($conexao) {

	$categorias = array();
	$resultado = mysqli_query($conexao, "select * from categorias");

	while($categoria_array = mysqli_fetch_assoc($resultado)) {

		$categoria = new Categoria();
		$categoria->setId ($categoria_array['id']);
		$categoria->setNome ($categoria_array['nome']);
		array_push($categorias, $categoria);
	}
	return $categorias;

}

function removeCategoria($conexao, $id) {
	$query = "delete from categorias where id = {$id}";
	return mysqli_query($conexao, $query);
}