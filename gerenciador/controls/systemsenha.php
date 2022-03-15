
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		p.funcionario{
			font-size: 30pt;
			z-index: 9999;
		}
	</style>
</head>
<body>


<?php

			$funcionario = isset($_GET['funcionario'])?$_GET['funcionario']:'';
			
			
			
			
				if($funcionario){
					header("location:alterasenhafuncionario.php?funcionario=$funcionario");
				}			
				
			
					
				
			
		

?>

</body>
</html>

