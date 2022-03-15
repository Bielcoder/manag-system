<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="css/selectProdutoFaltando.css">
	<style type="text/css">
		/*Responsividade Contador*/

		@media screen and (max-width: 1322px){
			div.item1{
				margin: 0px 455px 0px 0px;
			}
		}

		@media screen and (max-width: 1210px){
			div.item1{
				margin: 0px 418px 0px 0px;
			}
		}


		@media screen and (max-width: 1094px){
			div.item1{
				margin: 0px 380px 0px 0px;
			}
		}

		@media screen and (max-width: 978px){
			div.item1{
				margin: 0px 340px 0px 0px;
			}
		}

		@media screen and (max-width: 858px){
			div.item1{
				margin: 0px 300px 0px 0px;
			}
		}

		@media screen and (max-width: 740px){
			div.item1{
				margin: 0px 260px 0px 0px;
			}
		}

			@media screen and (max-width: 622px){
			div.item1{
				margin: 0px 222px 0px 0px;
			}
		}

			@media screen and (max-width: 507px){
			div.item1{
				margin: 0px 185px 0px 0px;
			}
		}

		

	</style>
</head>
<body>
	<?php

		require_once('config.php');
		require_once('selectProdutoEmprestado.php');
		require_once('selectProdutoDisponivel.php');

	
		$contadorum = $contadorum;
		$contadordois = $contadordois;

		$contadorum = $contadorum - $contadordois;

	


		echo "<div class='container-contador'>";
		echo"<div class='item1'>".$contadorum."</div>";
		echo "<div class='item2'>".$contadordois."</div>";
	
		echo "</div>";
		?>

</body>
</html>