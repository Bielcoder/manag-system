<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
			p.sucesso{
				color: #34d334;
				margin: 0;
				position: relative;
				top: -20px;}

			p.erro{
				
			color: red;
			margin: 0;
			position: relative;
			top: -20px;
		
			}

	</style>
</head>
<body>
		<?php
				require_once('config.php');
				$matricula = isset($_POST['matricula'])?$_POST['matricula']:'';
				$acesso = isset($_POST['nivel-acesso'])?$_POST['nivel-acesso']:'';
				if(isset($_POST['acao'])){

						$delete = mysqli_query($conn,"DELETE FROM nivelacesso WHERE matricula = '$matricula' and acesso ='$acesso'");
						
						header('location:remocaoCadastroFuncionario.php');
						
						

					}		
			
		


					
					
				

					
				
			


				
						
						

					
			

		?>


</body>
</html>