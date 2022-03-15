<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inventário</title>
	<style type="text/css">
	p.sucesso{
				color: #34d334;
				margin: 0;
				position: relative;
				top: -20px;
		}
	</style>
</head>
<body>
		<?php
			require_once('config.php');

			$matricula = isset($_POST['matricula'])?$_POST['matricula']:"";
			
			if(isset($_POST['acao'])){
			$delete = mysqli_query($conn,"DELETE FROM funcionario WHERE matricula_funcionario ='$matricula'");

			if($delete){
				echo "<p class='sucesso'>Funcionário removido com Sucesso!</p>";
			}
		}
			

		?>

</body>
</html>