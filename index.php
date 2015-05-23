<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="styles/commun.css" />
	<link rel="apple-touch-icon" sizes="57x57" href="img/icons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/icons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/icons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/icons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/icons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/icons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/icons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="img/icons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/icons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/icons/favicon-16x16.png">
	<link rel="manifest" href="img/icons/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<title>Madrassatoun</title>
	<style type=text/css >
		legend { color:white; font-size:11px; }
	</style>
</head>
<body style="background:url('../img/fond2.jpg');">
<center>
	<p><img src="img/bismillahi.png" /></p>
	<div style="width:620px; height:405px; background:url('img/board.jpg');color:white;padding-top:60px;" >
		<img src="img/titre2.png" />
		<form id=form_connect style="border:1px;width:300px;" method=POST action=accueil.php >
			<fieldset>
				<legend>Identification</legend>
				<table border=0 >
					<tr>
						<td align=right >Nom : </td>
						<td align=left ><input class=champ1 type=text name=login maxlength=25 /></td>
					</tr>
					<tr>
						<td align=right >Mot de passe : </td>
						<td align=left ><input class=champ2 type=password name=mdp /></td>
					</tr>
				</table>
				<br/>
				<div style="text-align:right">
					<div class=Button1 onclick="window.location.href='visiteur.php';"><img src="img/visitor.png" align=absmiddle /> Visiteur</div>
					<div class=Button1 onclick="document.getElementById('form_connect').submit()" ><img src="img/connect.png" align=absmiddle />Connexion</div>
				</div>
			</fieldset>
		</form>
		<p><img src="img/cadena.png" /></p>
	</div>
	<hr width=400px />
	<big>APPLICATION DE GESTION POUR LES ÉCOLES</big><br/>
	<small><font color=blue>&#169; Copyright - </font><font color=red>2016</font></small>
</center>
</body>
</html>