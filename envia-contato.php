<?php
session_start();
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

require_once("PHPMailerAutoload.php");

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "";
$mail->Password = "";

$mail->setFrom("", "");
$mail->addAddress("");
$mail->Subject = "Email de contato da loja";
$mail->msgHTML("<html>de: {$nome}<br>email: {$email}<br>mensagem: {$mensagem}</html>");
$mail->AltBody = "de: {$nome}\nemail: {$email}\nmensagem: {$mensagem}";

if($mail->send()) {
	$_SESSION["success"] = "Mensagem enviada com sucesso!";
	header("Location: index.php");
} else {
	$_SESSION["danger"] = "Mensagem não pode ser enviada, tente novamente... " . $mail->ErrorInfo;
	header("Location: contato.php");
} die();
