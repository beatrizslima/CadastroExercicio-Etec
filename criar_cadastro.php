<?php

session_start();

require_once 'conexao_bd.php';

if (isset($_POST['btn-cadastrar'])) {

    $nome = mysqli_escape_string($connection, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connection, $_POST['sobrenome']);
    $email = mysqli_escape_string($connection, $_POST['email']);
    $idade = mysqli_escape_string($connection, $_POST['idade']);
    $cpf = mysqli_escape_string($connection, $_POST['cpf']);
    //$sexo = mysqli_escape_string($connection, $_POST['sexo']);
    $usuario = mysqli_escape_string($connection, $_POST['usuario']);
    $senha = mysqli_escape_string($connection, $_POST['senha']);



    $sql = "INSERT INTO Usuario(Nome,Sobrenome,Email, Idade, CPF, Usuario, Senha)VALUES('$nome','$sobrenome','$email','$idade', $cpf, $usuario, $senha)";

     if (mysqli_query($connection, $sql)) {

        header('Location: login.php');
    } 

    mysqli_report();
}
