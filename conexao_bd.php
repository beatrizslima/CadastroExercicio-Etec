<?php 

	$server_name = 'localhost';
	$user_name = 'biju';
	$password = 'biju';
	$db_name = 'dBform';

	$connection = mysqli_connect($server_name,$user_name,$password,$db_name); //creating a conection

	mysqli_set_charset($connection,"utf8");

	if (mysqli_connect_error()) {
		echo "Erro ao conectar com o banco de dados" .mysqli_connect_error();
	}
?>