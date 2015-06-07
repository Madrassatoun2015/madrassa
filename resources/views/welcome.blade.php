<html>
<head>
    <title>Madrassatoun</title>
    <link href="{{ asset('./css/styles.css') }}" rel="stylesheet" />
	<style type="text/css">
		fieldset { width: 350px; margin: auto; text-align: center;}

	</style>
</head>
<body>
<center>
<p style="margin-top:50px;" ><img src="img/bismillahi.png" /></p>
<p><img src="img/logo.png" /></p>
 </center>
 <form name=Form id=Form action="index.php/creer-adulte" method="POST" >
	<fieldset>
		<legend>Identification : </legend>
		<table align=center >
			<tr><td align=right >Nom : </td><td><input type="text" name=id maxlength="25" /></td></tr>
			<tr><td>Mot de passe : </td><td><input type="password" name=pass maxlength="25" /></td></tr>
		</table>
		<hr width="250px" />
		<div class="Button1" id='ButSubmit' onclick="document.getElementById('Form').submit();" ><img src="img/connect.png" align=absmiddle /> Connexion</div>
		<div class="Button1" onclick="document.location.href='visiteur.php'" /><img src="img/user.png" align=absmiddle /> Visiteur</div>
	</fieldset>
</form>
</body>
</html>
