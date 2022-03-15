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


			
	$produto = isset($_POST['produto'])?$_POST['produto']:'Não deu certo';
	$funcionario = isset($_POST['funcionario'])?$_POST['funcionario']:'Não deu certo';
	$data = isset($_POST['data-saida'])?$_POST['data-saida']:'Não deu certo';
	$hora = isset($_POST['hora-saida'])?$_POST['hora-saida']:'Não deu certo';

		if(isset($_POST['acao'])){
		if($insert = mysqli_query($conn,"INSERT INTO registrosaida (nome_produto_emprestado,nome_funcionario_emprestado,data_emprestado,hora_emprestado) VALUES('$produto','$funcionario','$data','$hora')")){
			echo "<p class='sucesso'>Registrado com Sucesso</p>";
		}
		else{
			echo "<p class='erro'>$produto&nbsp;ja&nbsp;está&nbsp;sendo&nbsp;utilizado!</p>";
		}

	}
	else{
		echo "";
	}

		

	?>
</body>
</html>