<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inventário</title>
	<style>
		p.sucesso{
				color: #34d334;
				margin: 0;
				position: relative;
				top: -20px;
		}

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

			$codigo = isset($_POST['codigo'])?$_POST['codigo']:'';
			
			if(isset($_POST['acao'])){	
				$delete = mysqli_query($conn,"DELETE FROM equipamento WHERE codigo_produto = '$codigo'");
				if($delete){
				echo "<p class='sucesso'>Produto removido com Sucesso!</p>";
				}
				else{
					echo"<p class='erro'>Produto sendo utilizado!</p>";
				}
		}
							
		?>

</body>
</html>