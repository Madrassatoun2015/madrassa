<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="styles/commun.css" />
	<script type="text/javascript" src="js/commun.js"></script>
	<title>Etablissement</title>
	<script type="text/javascript" >
	
	function Dupliquer()
	{
		for ( i=1; i<8 ; i++ )
		{
			document.getElementById("ama"+i).value = document.getElementById("ama0").value;
			document.getElementById("amb"+i).value = document.getElementById("amb0").value;
			document.getElementById("pma"+i).value = document.getElementById("pma0").value;
			document.getElementById("pmb"+i).value = document.getElementById("pmb0").value;
		}
	}
	
	function ChangeLogo()
	{
		document.getElementById('ImgLogo').src = document.getElementById('fileInput').value;
	}
	
	function VerifeTime(id)
	{
		val = document.getElementById(id).value;
		if ( val.length == 5 )
		{
			var reg = new RegExp("^[0-9]{2}[hH]{1}[0-9]{2}$","g");
			if ( !reg.test(val) ) 
			{ 
				alert("Il faut respecter le format : 00h00");
				document.getElementById(id).focus();
			}
			else
			{				
				g = val.split('h');
				heure = parseInt(g[0]);
				minute = parseInt(g[1]);
				if ( id.substring(0,2) == "am" )
				{
					if ( heure < 0 || heure > 12 ) { alert("L'heure du matin est incorrecte !"); document.getElementById(id).focus(); }
					else if ( minute < 0 || minute > 59 ) { alert("Les minutes du matin sont incorrectes !"); document.getElementById(id).focus(); }
				}
				else 
				{
					if ( heure < 12 || heure > 23 ) { alert("L'heure du midi est incorrecte !"); document.getElementById(id).focus(); }
					else if ( minute < 0 || minute > 59 ) { alert("Les minutes du midi sont incorrectes !"); document.getElementById(id).focus(); }	
				}
			}
		}
	}
	</script>
</head>
<body>
<center><div class=titre_page ><img src="img/ecole.png" align=absmiddle />ÉTABLISSEMENT</div></center>
<hr/>
<form name=form_etablissement id=form_etablissement action=etablissement.php methode=POST >
	<table border=0px >
		<tr>
			<td>
				<fieldset>
					<legend>Domiciliation</legend>
					<table>
						<tr><td align=right width=100px >Nom : </td><td><input name=nom id=Nom class=input_text type=text onKeyPress="return ControlChars(event,1);" maxlength= 45 /></td></tr>
						<tr><td align=right >Adresse 1 :</td><td><input name=adresse_1  class=input_text type=text onKeyPress="return ControlChars(event,1);" maxlength= 45 /></td></tr>
						<tr><td align=right >Adresse 2 :</td><td><input name=adresse_2  class=input_text type=text onKeyPress="return ControlChars(event,1);" maxlength= 45 /></td></tr>
						<tr><td align=right >CP : 		</td><td><input name=cp  		class=input_text type=text onKeyPress="return ControlChars(event,3);" maxlength= 5 /></td></tr>
						<tr><td align=right >Ville : 	</td><td><input name=ville  	class=input_text type=text onKeyPress="return ControlChars(event,2);" maxlength= 45 /></td></tr>
					</table>
				</fieldset>
				<fieldset>
					<legend>Contacts</legend>
					<table>
						<tr><td align=right width=100px >Téléphone 1 :	</td><td><input name=telephone_1 	class=input_text type=text onKeyPress="return ControlChars(event,5);" maxlength= 20 /></td></tr>
						<tr><td align=right >Téléphone 2 :	</td><td><input name=telephone_2	class=input_text type=text onKeyPress="return ControlChars(event,5);" maxlength= 20 /></td></tr>
						<tr><td align=right >Fax :			</td><td><input name=fax			class=input_text type=text onKeyPress="return ControlChars(event,5);" maxlength= 20 /></td></tr>
						<tr><td align=right >Email : 		</td><td><input name=email			class=input_text type=text onKeyPress="return ControlChars(event,6);" maxlength= 45 style="text-transform: none;" /></td></tr>
						<tr><td align=right >Site Web : 	</td><td><input name=site_web		class=input_text type=text onKeyPress="return ControlChars(event,7);" maxlength= 45 style="text-transform: none;" /></td></tr>
					</table>
				</fieldset>
				<fieldset>
					<legend>Horaires</legend>
					<table border=0px cellpadding=3px cellspacing=2px >
						<tr>
							<th style="background:#dadfd7; height:25px; border:1px dotted grey;" >Jours</th>
							<th style="background:#dadfd7; height:25px; border:1px dotted grey;" >Matin</th>
							<th style="background:#dadfd7; height:25px; border:1px dotted grey;" >Midi</th>
						</tr>
						<tr>
							<td class=jour >Dimanche</td>
							<td>
								de <input id=ama1 class=input_clock type=text maxlength=5 onKeyPress="return ControlChars(event,8);" onkeyup="VerifeTime(this.id)" />
								à  <input id=amb1 class=input_clock type=text maxlength=5 onKeyPress="return ControlChars(event,8);" onkeyup="VerifeTime(this.id)" />
							</td>
							<td>
								de <input id=pma1 class=input_clock type=text maxlength=5 onKeyPress="return ControlChars(event,8);" onkeyup="VerifeTime(this.id)" />
								à  <input id=pmb1 class=input_clock type=text maxlength=5 onKeyPress="return ControlChars(event,8);" onkeyup="VerifeTime(this.id)" />
							</td>
						</tr>
						<tr>
							<td class=jour >Lundi</td>
							<td>
								de <input id=ama2 class=input_clock type=text maxlength=5 onKeyPress="return ControlChars(event,8);" onkeyup="VerifeTime(this.id)" />
								à  <input id=amb2 class=input_clock type=text maxlength=5 onKeyPress="return ControlChars(event,8);" onkeyup="VerifeTime(this.id)" />
							</td>
							<td>
								de <input id=pma2 class=input_clock type=text maxlength=5 onKeyPress="return ControlChars(event,8);" onkeyup="VerifeTime(this.id)" />
								à  <input id=pmb2 class=input_clock type=text maxlength=5 onKeyPress="return ControlChars(event,8);" onkeyup="VerifeTime(this.id)" />
							</td>
						</tr>
						<tr>
							<td class=jour >Mardi</td>
							<td>
								de <input id=ama3 class=input_clock type=text maxlength=5 onKeyPress="return ControlChars(event,8);" onkeyup="VerifeTime(this.id)" />
								à  <input id=amb3 class=input_clock type=text maxlength=5 onKeyPress="return ControlChars(event,8);" onkeyup="VerifeTime(this.id)" />
							</td>
							<td>
								de <input id=pma3 class=input_clock type=text maxlength=5 onKeyPress="return ControlChars(event,8);" onkeyup="VerifeTime(this.id)" />
								à  <input id=pmb3 class=input_clock type=text maxlength=5 onKeyPress="return ControlChars(event,8);" onkeyup="VerifeTime(this.id)" />
							</td>
						</tr>
						<tr>
							<td class=jour >Mercredi</td>
							<td>
								de <input id=ama4 class=input_clock type=text maxlength=5 onKeyPress="return ControlChars(event,8);" onkeyup="VerifeTime(this.id)" />
								à  <input id=amb4 class=input_clock type=text maxlength=5 onKeyPress="return ControlChars(event,8);" onkeyup="VerifeTime(this.id)" />
							</td>
							<td>
								de <input id=pma4 class=input_clock type=text maxlength=5 onKeyPress="return ControlChars(event,8);" onkeyup="VerifeTime(this.id)" />
								à  <input id=pmb4 class=input_clock type=text maxlength=5 onKeyPress="return ControlChars(event,8);" onkeyup="VerifeTime(this.id)" />
							</td>
						</tr>
						<tr>
							<td class=jour >Jeudi</td>
							<td>
								de <input id=ama5 class=input_clock type=text maxlength=5 onKeyPress="return ControlChars(event,8);" onkeyup="VerifeTime(this.id)" />
								à  <input id=amb5 class=input_clock type=text maxlength=5 onKeyPress="return ControlChars(event,8);" onkeyup="VerifeTime(this.id)" />
							</td>
							<td>
								de <input id=pma5 class=input_clock type=text maxlength=5 onKeyPress="return ControlChars(event,8);" onkeyup="VerifeTime(this.id)" />
								à  <input id=pmb5 class=input_clock type=text maxlength=5 onKeyPress="return ControlChars(event,8);" onkeyup="VerifeTime(this.id)" />
							</td>
						</tr>
						<tr>
							<td class=jour ><font color=red>Vendredi</font></td>
							<td>
								de <input id=ama6 name=ven_am_1 class=input_clock type=text maxlength=5 onKeyPress="return ControlChars(event,8);" onkeyup="VerifeTime(this.id)" />
								à  <input id=amb6 name=ven_am_1 class=input_clock type=text maxlength=5 onKeyPress="return ControlChars(event,8);" onkeyup="VerifeTime(this.id)" />
							</td>
							<td>
								de <input id=pma6 name=ven_am_1 class=input_clock type=text maxlength=5 onKeyPress="return ControlChars(event,8);" onkeyup="VerifeTime(this.id)" />
								à  <input id=pmb6 name=ven_am_1 class=input_clock type=text maxlength=5 onKeyPress="return ControlChars(event,8);" onkeyup="VerifeTime(this.id)" />
							</td>
						</tr>
						<tr>
							<td class=jour >Samedi</td>
							<td>
								de <input id=ama7 name=sam_am_1 class=input_clock type=text maxlength=5 onKeyPress="return ControlChars(event,8);" onkeyup="VerifeTime(this.id)" />
								à  <input id=amb7 name=sam_am_1 class=input_clock type=text maxlength=5 onKeyPress="return ControlChars(event,8);" onkeyup="VerifeTime(this.id)" />
							</td>
							<td>
								de <input id=pma7 name=sam_pm_1 class=input_clock type=text maxlength=5 onKeyPress="return ControlChars(event,8);" onkeyup="VerifeTime(this.id)" />
								à  <input id=pmb7 name=sam_pm_2 class=input_clock type=text maxlength=5 onKeyPress="return ControlChars(event,8);" onkeyup="VerifeTime(this.id)" />
							</td>
						</tr>
						<tr>
							<td><div class=Button1 onclick="Dupliquer();" ><img src="img/duplicate.png" align=absmiddle /> Dupliquer</div></td>
							<td style="border-top:1px solid grey;" >
								de <input id=ama0 class=input_clock type=text maxlength=5 onKeyPress="return ControlChars(event,8);" onkeyup="VerifeTime(this.id)" />
								à  <input id=amb0 class=input_clock type=text maxlength=5 onKeyPress="return ControlChars(event,8);" onkeyup="VerifeTime(this.id)" />
							</td>
							<td style="border-top:1px solid grey;" >
								de <input id=pma0 class=input_clock type=text maxlength=5 onKeyPress="return ControlChars(event,8);" onkeyup="VerifeTime(this.id)" />
								à  <input id=pmb0 class=input_clock type=text maxlength=5 onKeyPress="return ControlChars(event,8);" onkeyup="VerifeTime(this.id)" />
							</td>
						</tr>
					</table>
				</fieldset>			
			</td>
			<td valign=top style="padding:0px 20px;" >
				<fieldset>
					<legend>Logo</legend>
					<center>
						<img id=ImgLogo src="img/logo.jpg" alt="fichier image manquant" 
						style="width:200px; height:200px; border : 3px groove lightgrey; margin-bottom : 5px; padding:1px;" /><br/>
						<input type="file" id=fileInput style="display : none" accept="image/*" onchange="ChangeLogo();" />
						<div class=Button1 onclick="document.getElementById('fileInput').click()" ><img src="img/icon.png" align=absmiddle />Changer</div>
					</center>
				</fieldset>
				<hr/>
				<div class=Button1 onclick="document.getElementById('form_etablissement').reset();document.getElementById('Nom').focus()" >
				<img src="img/effacer.png" align=absmiddle /> Effacer</div>
				<div class=Button1 onclick="submit()"><img src="img/save.png" align=absmiddle />Enregistrer</div>
			</td>
		</tr>
	</table>
</form>
</body>
</html>



