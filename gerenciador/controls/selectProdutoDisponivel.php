<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inventário</title>

	<style>
		p.contador{
			display: flex;
			flex-direction: column;
			align-items: center;
			position: relative;
			top: 5px;
			font-size: 18pt;
			text-align: center;

		}
	</style>	

	
</head>
<body> 	
	
	<?php
	require_once('insertSaida.php');
	require_once('config.php');

	$selecao = mysqli_query($conn,"SELECT * FROM equipamento");
	
	$contadorum = mysqli_num_rows($selecao);
	$insert = mysqli_query($conn,"INSERT INTO registrosaida (nome_produto_emprestado,nome_funcionario_emprestado,data_emprestado,hora_emprestado) VALUES('$produto','$funcionario','$data','$hora')");

	
	
	
	

?>
</body>
</html>