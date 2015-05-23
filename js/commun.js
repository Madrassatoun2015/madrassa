function codeTouche(evenement)
{
	for (prop in evenement)
	{
		if(prop == 'which') return(evenement.which);
	}
	return(evenement.keyCode);
}
function ControlChars(evenement,a)
{
	switch(a) 
	{
		case 1:		// tous les caractères valides
			var reCarValides = /[\w\séèçàùâêîôûäëïöü-]/;
			break;
		case 2:		// que les lettres
			var reCarValides = /[\w]/ ;
			break;
		case 3:		// que les chifres
			var reCarValides = /[\d]/ ;
			break;
		case 4:		// decimal
			var reCarValides = /[\d\.]/
			break;
		case 5:		// telephone + fax
			var reCarValides = /[\d()+\s]/
			break;
		case 6:		// email
			var reCarValides = /[\w-_@.]/;
			break;
		case 7:		// web
			var reCarValides = /[\w:/._-]/;
			break;
		case 8:		// horaires
			var reCarValides = /[\dhH]/;
			break;
	}
	var reCarSpeciaux = /[\x00\x08\x0D]/;
	var codeDecimal  = codeTouche(evenement);
	var car = String.fromCharCode(codeDecimal);
	var autorisation = reCarValides.test(car) || reCarSpeciaux.test(car);
	return autorisation;
}
function OpenPopupModale(titre,page)
{
	var maDiv = document.createElement("div");	
	maDiv.setAttribute("id", "oModal");
	maDiv.setAttribute("class", "oModal");
	maDiv.innerHTML = 	"<div><h2>"+titre.toUpperCase()+"</h2>"+
						"<iframe src='"+page+"' /></iframe>"+
						"<footer><div class=Button1 onclick=\"window.location.href='#fermer'\" ><img src='img/close.png' align=absmiddle />FERMER</div></footer></div>";
	document.body.appendChild(maDiv);
	window.location.href='#oModal';
}