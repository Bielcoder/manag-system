<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
	
	</style>
</head>
<body>
	<?php

		require_once('config.php');
		require_once('selectProduto.php');
		$select = mysqli_query($conn,"SELECT * FROM registrosaida");
		while ($linha = mysqli_fetch_array($select)) {
				
				echo "Prod : ".$linha['nome_produto_emprestado'].'<br>';
				echo "Func : ".$linha['nome_funcionario_emprestado'].'<br>';
				echo "Data : ".$linha['data_emprestado'].'<br>';
				echo "Hora : ".$linha['hora_emprestado'].'<br>';
				echo "-------------------------------".'<br>';

			
		}


		
		

	?>

</body>
</html>