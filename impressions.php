<?php




?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="styles/commun.css" />
	<title>Impressions</title>
</head>
<body>
<center>
<div class=titre_page ><img src="img/printer.png" align=absmiddle />IMPRESSIONS DE DOCUMENTS</div>
<hr/>
<table border=0 cellpadding=0 cellspacing=0 >
	<tr>
		<td valign=top align=center > 
			<div id=Menu_Impression >
				<div><img src="img/folder.png" align=absmiddle />ADMINISTRATIF</div>
				<select id=docs_admin >
					<option>test</option>
					<option>test</option>
					<option>test</option>
				</select>
				<hr/>
				<div><img src="img/case.png" align=absmiddle />SCOLAIRE</div>
				<select id=docs_scol >
					<option>Carnet de notes</option>
					<option>Bulletin</option>
					<option>Emploi du temps</option>
					<option>Absences</option>
				</select>
				<hr/>
				<div><img src="img/letter.png" align=absmiddle />AUTORISATIONS</div>
				<select id=docs_autor >
					<option>Sortie d'établissement</option>
					<option>Sortie pédagogique</option>
					<option>test</option>
				</select>
			</div>
			<hr/>
			<button style="width:150px;height:50px;" ><img src="img/printer.png" height=30 align=absmiddle /> Imprimer</button>
		</td>
		<td valign=top > 
		<iframe style="margin-left:5px;background:#fff;width:950px;height:710px;overflow:auto;" ></iframe>
		</td>
	</tr>
</table>
</center>
</body>
</html>