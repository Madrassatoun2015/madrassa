<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="styles/commun.css" />
	<title>Base des données</title>
	<style type=text/css >
		td { text-align:right; }	
	</style>
</head>
<body>
<center>
<div class=titre_page ><img src="img/bdd.png" align=absmiddle />GESTION DE LA BASE DES DONNÉES</div>
<hr/></center>
<div style="width:500px; margin:50px auto;" >
	<fieldset>
		<legend>Connexion</legend>
			<center><table border=0 >
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
			<div class=Button1 onclick="document.getElementById('CadreDataBase').style.visibility='visible';" ><img src="img/connect.png" align=absmiddle />Connexion</div>		
			</center>
	</fieldset>
	<div id=CadreDataBase style="visibility:hidden" >
	<hr/>
		<fieldset>
			<legend>Paramètres de connexion</legend>
			<table align=center >
				<tr>
					<td>Serveur :</td>
					<td><input type=text class=input_text style="text-transform:none;" /></td>
				</tr>
				<tr>
					<td>Nom de la BDD :</td>
					<td><input type=text class=input_text style="text-transform:none;" /></td>
				</tr>
				<tr>
					<td>Identifiant :</td>
					<td><input type=text class=input_text style="text-transform:none;" /></td>
				</tr>
				<tr>
					<td>Mot de passe :</td>
					<td><input type=password class=input_text style="text-transform:none;" /></td>
				</tr>
			</table>
			<br/>
			<div align=right >
				<div class=Button1 onclick="" style="width:170px;"><img src="img/tester.png" align=absmiddle />Tester la connexion</div>
				<div class=Button1 onclick=""><img src="img/enregistrer.png" align=absmiddle />Enregistrer</div>
			</div>
		</fieldset>
	<hr/>
	<fieldset>
		<legend>Options de gestion</legend>
		<center>
			<div class=Button2 onclick="" ><img src="img/bdd.png" /><br/>SAUVEGARDE</div>
			<div class=Button2 onclick="" ><img src="img/import.png" /><br/>IMPORTER</div>
			<div class=Button2 onclick="" ><img src="img/export.png" /><br/>EXPORTER</div>
		</center>
	</fieldset>
	</div>
</div>
</body>
</html>