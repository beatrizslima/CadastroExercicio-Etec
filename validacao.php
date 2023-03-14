<?php
session_start();
require_once 'conexao_bd.php';   

$sql = mysqli_query("SELECT Usuario, Senha FROM Usuario WHERE Usuario = '$usuario' AND Senha = '$senha");
$resposta = mysqli_fetch_row($sql);
if ($resposta) {
    header('location: inicio.php');
}else {
    echo "Usuário ou senha inválidos!";
}

if(!$usuario || !$senha)
{
	echo "Você deve digitar sua senha e login!";
	exit;
}

?>