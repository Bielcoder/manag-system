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

			

		$nome = isset($_POST['produto'])?$_POST['produto']:"";
		$codigo = isset($_POST['codigo'])?$_POST['codigo']:"";

		if(isset($_POST['acao'])){		
			
	if($insert = mysqli_query($conn,"INSERT INTO equipamento(nome_produto,codigo_produto)VALUES('$nome','$codigo')")){
		echo "<p class='sucesso'>Produto&nbsp;cadastrado&nbsp;com&nbsp;Sucesso!</p>";
	}else{echo "<p class='erro'>Produto&nbsp;já&nbsp;registrado!</p>";}
	}
	




		


	?>

</body>
</html>