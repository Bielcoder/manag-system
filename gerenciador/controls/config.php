<?php
	$dbhost = 'localhost';
	$dbuserName = 'root';
	$dbpassword = '';
	$dbname = 'produtos';

	$conn = new mysqli($dbhost,$dbuserName,$dbpassword,$dbname);

	// if($conn -> connect_errno){
	// 	echo "Erro de conexão!";
	// }
	// else{
	// 	echo "Conectado com Sucesso!";
	// }
?>