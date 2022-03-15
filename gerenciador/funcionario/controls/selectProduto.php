	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inventário</title>
	<link rel="stylesheet" href="css/selectProduto.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
</head>
<body> 



		<?php

	require_once('config.php');
	

echo "<form method='get' action='index.php'>";
		
		echo "</form></br>";

	$select = mysqli_query($conn,"SELECT * FROM equipamento");
		
		

	while ($linha = mysqli_fetch_array($select)){

		
	
	echo "<p class='produto' id='produto'>".$linha['nome_produto']."<br></p>";
		if(isset($_GET['mostrar'])){
		echo "<div id='esconder'>";
		echo $linha['codigo_produto'];
		echo "<br>----------------------------";
		echo "</div>";

		}
	}	



?>

</body>
</html>