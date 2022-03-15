<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
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

			$produto = isset($_POST['produto'])?$_POST['produto']:'';
			
			if(isset($_POST['acao'])){	
				$delete = mysqli_query($conn,"DELETE FROM registrosaida WHERE nome_produto_emprestado = '$produto'");
				if($delete){
				echo "<p class='sucesso'>Devolução efetuada com sucesso!</p>";
				}
				else{
					echo"<p class='erro'>Produto não foi emprestado!</p>";
				}
		}
							
		?>




</body>
</html>