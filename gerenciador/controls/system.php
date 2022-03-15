
<?php session_start(); ?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Inventário</title>
	<link rel="stylesheet" href="../css/login.css">
	<style type="text/css">
		p.incorreto{
			z-index: 9999;
			color: red;
			font-weight: bold;
			position: relative;
			top: 50px;
			left: 0px;
			text-align: center;
		}
	</style>
</head>
<body>

</body>
</html>


<div class="container">
	<div class="screen">
		<div class="screen__content">

			<h1>Inventário de Multimídia</h1>
			
			

			<?php
	
	require_once('config.php');



	if(isset($_POST['acao'])){


if(isset($_POST['login'])&&isset($_POST['senha'])){

//funcionario
	$sql = mysqli_query($conn,"SELECT * FROM nivelacesso WHERE acesso = 0");
	while ($correr = mysqli_fetch_array($sql)) {
		$usuario = array($correr['matricula'],$correr['senha']);
		if($_POST['login'] == $usuario[0] && $_POST['senha'] == $usuario[1]){

 			
			$_SESSION['acesso'] = array($_POST['login'],$_POST['senha']);
			header('location:../funcionario/index.php');}
		}
		if($_POST['login'] != $usuario[0] && $_POST['senha'] != $usuario[1]){
			echo "<p class='incorreto'>Matrícula ou Senha Inválida!</p>";
		}

		$sql = mysqli_query($conn,"SELECT * FROM nivelacesso WHERE acesso = 1");
		while ($correr = mysqli_fetch_array($sql)) {
			$usuario = array($correr['matricula'],$correr['senha']);
			if($_POST['login'] == $usuario[0] && $_POST['senha'] == $usuario[1]){
				$_SESSION['acessodois'] = array($_POST['login'],$_POST['senha']);
				header('location:../index.php');}
			}
		}
	}

	if(isset($_GET['logout'])){
		unset($_SESSION['acesso']);
		session_destroy();
		header('location:login.php');
		
	}


























	

?>

			<form class="login" method="post" action="system.php">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" name="login" class="login__input" placeholder="Matrícula" required>
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" name="senha" class="login__input" placeholder="Password" required>
				</div>
				<button class="button login__submit" name="acao">
					<span class="button__text">Entrar</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
			
		</div>
		<div class="screen__background">
		
		
	
			
		</div>		
	</div>
</div>
		