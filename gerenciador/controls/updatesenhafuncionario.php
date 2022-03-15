<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		require_once('config.php');

		$matricula = isset($_POST['matricula-funcionario'])?$_POST['matricula-funcionario']:"";
		$senha = isset($_POST['senha-funcionario'])?$_POST['senha-funcionario']:"";
		$acesso = isset($_POST['nivel-acesso'])?$_POST['nivel-acesso']:"";

							
								if(mysqli_query($conn,"UPDATE nivelacesso SET senha = '$senha' WHERE matricula = '$matricula'")){

					
					header('location:reset-senha.php');
							}
					

			
		


	?>

</body>
</html>