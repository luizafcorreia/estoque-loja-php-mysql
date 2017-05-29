<?php

session_start();

function logaUsuario($email) {
	$_SESSION["usuario_logado"] = $email;
}

function usuarioEstaLogado() {
	return isset($_SESSION["usuario_logado"]);
}

function usuarioLogado() {
	return $_SESSION["usuario_logado"];
}

function verificaUsuario() {
	$_SESSION["danger"] = "Você não tem acesso a essa funcionalidade...";
	if(!usuarioEstaLogado()) {
	header("Location: index.php");
	die();
	} else {
		unset($_SESSION["danger"]);
	}
}

function logout() {
	//unset($_SESSION["usuario_logado"]);
	session_destroy();
	session_start();
}

?>