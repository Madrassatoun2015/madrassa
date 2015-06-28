<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Madrassatoun</title>

	<link href="{{ asset('/css/styles.css') }}" rel="stylesheet" />

</head>
<body>
<!--
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Laravel</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">Home</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
-->
<nav>
	<li class='ButHome' ><a href="{{ url('/') }}" style="cursor:pointer;" ><img src="../img/home.png" /></a></li>
	<ul class='ButNav'>
		<li><a href="#" ><img src="../img/profils.png" />Profils</a>
			<ul>
				<a href="{{ url('/profils-utilisateurs') }}" ><li class='SubMenu' ><img src="../img/user.png" />Utilisateurs</li></a>
				<a href="{{ url('/profils-employes') }}" ><li class='SubMenu' ><img src="../img/employes.png" />Employés</li></a>
				<a href="{{ url('/profils-enseignants') }}" ><li class='SubMenu' ><img src="../img/profs.png" />Enseignants</li></a>
			</ul>
		</li>
	</ul>
	<ul class='ButNav'>
		<li><a href="#" ><img src="../img/inscriptions.png" />Inscriptions</a>
			<ul>
				<a href="{{ url('/creer-adulte') }}" ><li class='SubMenu' ><img src="../img/adulte.png" />Adultes</li></a>
				<a href="#" ><li class='SubMenu' ><img src="../img/child.png" />Enfants</li></a>
				<a href="#" ><li class='SubMenu' ><img src="../img/coins.png" />Cotisations</li></a>
			</ul>
		</li>
	</ul>
	<ul class='ButNav'>
		<li><a href="#" ><img src="../img/organisation.png" />Organisation</a>
			<ul>
				<li class='SubMenu' ><a href="#" ><img src="../img/filiere.png" />Filières</a></li>
				<li class='SubMenu' ><a href="#" ><img src="../img/emploi.png" />Cours</a></li>
				<li class='SubMenu' ><a href="#" ><img src="../img/calendar.png" />Évènements</a></li>
			</ul>
		</li>
	</ul>
	<ul class='ButNav'>
		<li><a href="#" ><img src="../img/absences.png" />Vie scolaire</a>
			<ul>
				<li class='SubMenu' ><a href="#" ><img src="../img/profs.png" /> Carnet de notes</a></li>
				<li class='SubMenu' ><a href="#" ><img src="../img/child.png" /> Bulletin</a></li>
				<hr/>
				<div style='color:blue;height:25px;line-height:25px;text-align:center;background: #eee;;' >Gestion des absences</div>
				<li class='SubMenu' ><a href="#" ><img src="../img/profs.png" /> Étudiant</a></li>
				<li class='SubMenu' ><a href="#" ><img src="../img/child.png" /> Enseignants</a></li>
			</ul>
		</li>
	</ul>
	<ul class='ButNav'>
		<li><a href="#" style="cursor:pointer;" ><img src="../img/printer.png" />Impressions</a></li>
	</ul>
	<ul class='ButNav'>
		<li><a href="#" ><img src="../img/progs.png" />Programmes</a>
			<ul>
				<li class='SubMenu' ><a href="#" ><img src="../img/cours.png" />Cours</a></li>
				<li class='SubMenu' ><a href="#" ><img src="../img/exos.png" />Exercices</a></li>
				<li class='SubMenu' ><a href="#" ><img src="../img/tp.png" />TP</a></li>
				<li class='SubMenu' ><a href="#" ><img src="../img/supports.png" />Supports</a></li>
			</ul>
		</li>
	</ul>
	<ul class='ButNav'>
		<li><a href="#" ><img src="../img/tools.png" />Réglages</a>
			<ul>
				<li class='SubMenu' ><a href="#" ><img src="../img/ecole.png" />Établissement</a></li>
				<li class='SubMenu' ><a href="#" ><img src="../img/bdd.png" />Gestion BDD</a></li>
			</ul>
		</li>
	</ul>
	<a href="{{ url('/auth/logout') }}" class="Disconnect" >Déconnexion</a>
</nav>

	@yield('content')

</body>
</html>
