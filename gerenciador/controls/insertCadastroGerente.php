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

		$matricula = isset($_POST['matricula-gerente'])?$_POST['matricula-gerente']:"";
		$senha = isset($_POST['senha-gerente'])?$_POST['senha-gerente']:"";
		$acesso = isset($_POST['nivel-acesso'])?$_POST['nivel-acesso']:"";


		if(isset($_POST['acao'])){
		if($insert = mysqli_query($conn,"INSERT INTO nivelacesso(matricula,senha,acesso)VALUES('$matricula','$senha','$acesso')")){
			echo "<p class='sucesso'>Acesso&nbsp;cadastrado&nbsp;com&nbsp;sucesso!</p>";
		}else{
			echo "<p class='erro'>Funcionário&nbsp;já&nbsp;possui&nbsp;acesso!</p>";
		}
	}

	?>

</body>
</html>