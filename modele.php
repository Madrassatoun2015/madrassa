<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=madrassatoun;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}



?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="styles/commun.css" />
	<script type="text/javascript" src="js/commun.js"></script>
	<title>Gestion des fonctions</title>
</head>
<body>
<center>
<div class=titre_page ><img src="img/.png" align=absmiddle />TITRE</div>
<hr/>
</center>
</body>
</html>