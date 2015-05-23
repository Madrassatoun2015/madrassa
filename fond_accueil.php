<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="styles/commun.css" />
	<title>Madrassatoun</title>
	<script type=text/javascript >
		function date_heure(id)
		{
				date = new Date;
				annee = date.getFullYear();
				moi = date.getMonth();
				mois = new Array('Janvier', 'F&eacute;vrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Ao&ucirc;t', 'Septembre', 'Octobre', 'Novembre', 'D&eacute;cembre');
				j = date.getDate();
				jour = date.getDay();
				jours = new Array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
				h = date.getHours();
				if(h<10)
				{
					h = "0"+h;
				}
				m = date.getMinutes();
				if(m<10)
				{
					m = "0"+m;
				}
				s = date.getSeconds();
				if(s<10)
				{
					s = "0"+s;
				}
				resultat = 'Nous sommes le<br/><font color=green size=4 >'+jours[jour]+' '+j+' '+mois[moi]+' '+annee+'</font><br/>et il est<br/><font color=green size=4 >'+h+' h '+m+' : '+s+' s.</font>';
				document.getElementById(id).innerHTML = resultat;
				setTimeout('date_heure("'+id+'");',1000);
				return true;
		}
	</script>
	<style type=text/css >
	#afficheur {
		color:#000; 
		font-size:11pt;
		width:280px;
		height:95px;
		border:1px solid grey;
		background: #e6f0a3; /* Old browsers */
		background: -moz-linear-gradient(top,  #e6f0a3 0%, #d2e638 50%, #c3d825 51%, #dbf043 100%); /* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#e6f0a3), color-stop(50%,#d2e638), color-stop(51%,#c3d825), color-stop(100%,#dbf043)); /* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top,  #e6f0a3 0%,#d2e638 50%,#c3d825 51%,#dbf043 100%); /* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top,  #e6f0a3 0%,#d2e638 50%,#c3d825 51%,#dbf043 100%); /* Opera 11.10+ */
		background: -ms-linear-gradient(top,  #e6f0a3 0%,#d2e638 50%,#c3d825 51%,#dbf043 100%); /* IE10+ */
		background: linear-gradient(to bottom,  #e6f0a3 0%,#d2e638 50%,#c3d825 51%,#dbf043 100%); /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e6f0a3', endColorstr='#dbf043',GradientType=0 ); /* IE6-9 */
		-webkit-border-radius: 7px;
		-moz-border-radius: 7px;
		border-radius: 7px;
		text-shadow:1px 1px 3px white;
		padding-top:10px;
		margin-top:30px;
	}
	</style>
</head>
<body onload = "date_heure('afficheur');" >
<center>
<img src="img/bismillahi.png" style="margin-top:100px;"/><br/>
<img src="img/logo.png" style="margin:20px 0px;" /><br/>
<div id="afficheur" ></div>
</body>
</html>