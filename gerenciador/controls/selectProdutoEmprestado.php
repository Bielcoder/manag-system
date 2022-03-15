<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		p.contador2{
			display: flex;
			flex-direction: column;
			align-items: center;
			position: relative;
			top: 7px;
			font-size: 18pt;
			text-align: center;
}
	</style>
</head>
<body>
	<?php

		require_once('config.php');
		$select = mysqli_query($conn,"SELECT * FROM registrosaida");
	
		$contadordois = mysqli_num_rows($select);
		
		

	?>

</body>
</html>