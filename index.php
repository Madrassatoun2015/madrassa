<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="divers/styles.css" />
	<title>Madrassatoun</title>
	<style type=text/css >
		legend { color:orange; font-size:11px; }
		.champ1 {
			font-family: 'open_sansregular';
		}
		.champ1, .champ2 {
			width:150px;
			font-size:15px; 
		}
		.but {
			width:100px;
			height:40px;
			cursor:pointer;
		}
	</style>
</head>
<body style="background:url('../img/fond2.jpg');">
<center>
	<p><img src="img/bismillahi.png" /></p>
	<div style="width:620px; height:405px; background:url('img/board.jpg');color:white;padding-top:60px;" >
		<img src="img/titre2.png" />
		<form style="border:1px;width:300px;" method=POST action=accueil.php >
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
					<input class=but type=button value=Visiteur onclick="window.location.href='visiteur.php';"/>
					<input class=but type=submit value=Connexion />
				</div>
			</fieldset>
		</form>
		<p><img src="img/key.png" /></p>
	</div>
	<hr width=400px />
	<big>APPLICATION DE GESTION POUR LES ÉCOLES</big><br/>
	<font color=blue><small>&#169; Copyright - </font><font color=red>2016</small></font>
</center>
</body>
</html>