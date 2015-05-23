<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="styles/commun.css" />
	<title>Madrassatoun</title>
	<style type="text/css" >	
		#board{
			width:1200px; 
			height:800px; 
			border:5px inset lightgrey;
			margin-top:-10px;
			background:url("img/fond2.jpg");
		}
	</style>
</head>
<body style="background:url('../img/fond2.jpg');" >
	<?php include 'menu.php'; ?>
	<center>
	<iframe id=board name=board src="fond_accueil.php"></iframe>
	<br/>
	<?php 
		$fichier = 'js/params.ini';
		if (file_exists($fichier)) 
		{ 
			echo '<font color=red >Contenu du fichier existant : </font>';
			print_r(file($fichier));
		}
		else
		{
			?><script type=text/javascript > alert('fichier parametres absent');  document.getElementById("board").src='database.php';</script><?php
		}	
	?>
	</center>
</body>
</html>