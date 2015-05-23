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
	<title>Gestion des évènements</title>
</head>
<script type="text/javascript" >

	function Ajouter_Type()
	{
		document.getElementById("divAdd_Type").style.display = "inline-block";
		document.getElementById("libelle").focus();	
	}

	function Modifier_Type()
	{
		var a = document.getElementById("affDonnees").value;
		if ( a )
		{
			
		}
		else
		{
			alert("Il faut choisir un type d'évènement !...");
		}
	}

	function Supprimer_Type()
	{
		var a = document.getElementById("affDonnees").value;
		if ( a ) 
		{
			if (confirm("Êtes-vous sure de vouloir supprimer l'évènement : \n\n'"+a+"' de cette table ?" )) 
			{
				$a = a;
				<?php
					try { $bdd->exec('DELETE FROM type_evenement WHERE type = $a'); } catch (Exception $e) {?>alert('no');<?php }
				?>
				window.location.reload();
			}
		}
		else
		{
			alert("Il faut choisir un type d'évènement !...");
		}
	}
	
</script>

<body style="background:white;">
<fieldset>
	<legend>Liste des évènements</legend>
	<table border=0 cellpadding=0 cellspacing=0  width=100% >
		<tr>
			<td valign=top width=60% >
				<select id=affDonnees id=type_evenement name=type_evenement size=8 >
					<?php 
						$sql = $bdd->query('SELECT type FROM type_evenement');
						while ($donnees = $sql->fetch())
						{
							echo '<option>'.$donnees['type'].'</option>';
						}
						$sql->closeCursor(); 
					?>
				</select>
			</td>
			<td valign=bottom align=right >
				<div class=Button1 onclick="Ajouter_Type()" ><img src="img/ajouter.png" align=absmiddle />Ajouter</div><br/>
				<div class=Button1 onclick="Modifier_Type()" ><img src="img/modifier.png" align=absmiddle />Modifier</div><br/>
				<div class=Button1 onclick="Supprimer_Type()" ><img src="img/supprimer.png" align=absmiddle />Supprimer</div><br/>
			</td>
	</table>
</fieldset>
<div id=divAdd_Type style="display:none; position:absolute; top:0px; left:0px; background:#fff; height:200px; width:100%; " >
	<div style="width:270px; margin:30px auto; " >
		<form id=form_fonction name=form_fonction action="types_evenement.php" method=POST >
			<fieldset>
				<legend>Ajouter un Nouvel Évènement</legend>
				<input id=libelle  name=libelle  type=text 
				class="input_text upChar" onKeyPress="return ControlChars(event,1);" 
				maxlength=20 style="width:230px; margin-top:10px;" />
				<hr/>
				<div class=Button1 onclick="document.getElementById('divAdd_Type').style.display = 'none'" ><img src="img/annuler.png" align=absmiddle />Annuler</div>
				<div class=Button1 onclick="document.getElementById('form_fonction').submit();"><img src="img/valider.png" align=absmiddle />Valider</div>
			</fieldset>
		</form>
	</div>
</div>
</body>
</html>