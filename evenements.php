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
	<title>Évènements</title>
</head>
<body>
<center>
<div class=titre_page ><img src="img/calendar.png" align=absmiddle />ORGANISATION D'ÉVÈNEMENT</div>
<hr/></center>
<table border=0 width=100% cellpadding=0 cellspacing=5 >
	<tr>
		<td valign=top width=730 >
				<fieldset>
					<legend>Liste des Évènements</legend>
					<div>
						<p>...</p>
						<p>...</p>
						<p>...</p>
						<p>...</p>
					</div>
				</fieldset>
		</td>
		<td valign=top >
			<fieldset>
				<legend>Nouvel Évènement</legend>
				<form id=new_evenement name=new_evenement action=evenement.php method=POST >
					<table border=0 >
						<tr>
							<td align=right width=100px >Type :	</td>
							<td>
								<select onchange="document.getElementById('theme').focus(); " id=type_evenement name=type_evenement class=input_text style="width:235px;" >
									<?php 
										$reponse = $bdd->query('SELECT type FROM type_evenement');
										while ($donnees = $reponse->fetch())
										{
											echo '<option>'.$donnees['type'] . '</option>';
										}
										$reponse->closeCursor(); 
									?>
								</select>
								<div class=Button3 onclick="OpenPopupModale('type d\' évènement','types_evenement.php')" >Nouveau</div>
							</td>
						</tr>
						<tr><td align=right >Thème :		</td><td><input name=theme id=theme class=input_text type=text onKeyPress="return ControlChars(event,1);" maxlength= 20 /></td></tr>
						<tr><td align=right >Adresse :		</td><td><input name=adresse		class=input_text type=text onKeyPress="return ControlChars(event,1);" maxlength= 45 /></td></tr>
						<tr><td align=right >Code Postale :	</td><td><input name=cp				class=input_text type=text onKeyPress="return ControlChars(event,3);" maxlength= 5 /></td></tr>
						<tr><td align=right >Ville :		</td><td><input name=ville			class=input_text type=text onKeyPress="return ControlChars(event,2);" maxlength= 45 /></td></tr>
						<tr><td align=right >Début :		</td><td><input name=debut_event	class=input_text type=text onKeyPress="return ControlChars(event,5);" maxlength= 45 /></td></tr>
						<tr><td align=right >Fin :			</td><td><input name=fin_event		class=input_text type=text onKeyPress="return ControlChars(event,5);" maxlength= 45 /></td></tr>
						<tr><td align=right >Places dispo. :</td><td><input name=places			class=input_text type=text onKeyPress="return ControlChars(event,5);" maxlength= 5 /></td></tr>
						<tr><td align=right >Inscription :	</td><td><input name=inscriptions	class=input_text type=text onKeyPress="return ControlChars(event,5);" maxlength= 45 /></td></tr>
						<tr><td align=right >Commentaire :	</td><td><textarea name=comment		class=input_text rows=5 ></textarea></td></tr>
						<tr>
							<td valign=bottom >
								<div class=Button1 onclick="document.getElementById('new_evenement').reset();document.getElementById('type_evenement').focus()" >
								<img src="img/effacer.png" align=absmiddle /> Effacer</div><br/>
								<div class=Button1 onclick="document.getElementById('fileInput').click()" ><img src="img/icon.png" align=absmiddle />Charger</div>
								<hr/>
								<div class=Button1 onclick="submit()"><img src="img/Valider.png" align=absmiddle />Valider</div>
							</td>
							<td valign=bottom align=center >
								<img id=Illustration src="img/illustration.jpg" alt="fichier image manquant" style="width:300px; height:200px; border : 3px groove lightgrey;" /><br/>								
								<input type="file" id=fileInput style="display : none" accept="image/*" onchange="ChangeLogo();" />
							</td>
						</tr>
					</table>
				</form>					
			</fieldset>
		</td>
	</tr>
</table>
</body>
</html>