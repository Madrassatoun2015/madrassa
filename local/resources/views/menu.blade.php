<!DOCTYPE html>
<html>
<head>
    <title>Menu Madrassatoun</title>
     <script type="text/javascript">
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
            resultat = 'Nous sommes le<br/><font color=green size=4 >'+jours[jour]+' '+j+' '+mois[moi]+' '+annee+'</font><br/>et il est<br/><font color=green size=4 >'+h+' h '+m+' : '+s+' sec.</font>';
            document.getElementById(id).innerHTML = resultat;
            setTimeout('date_heure("'+id+'");',1000);
            return true;
        }
    </script>
    <style type="text/css">
        .bs-example{
            margin: 5px 20px;
            padding:2px;
            background: #d2dfed; /* Old browsers */
            background: -moz-linear-gradient(top,  #d2dfed 0%, #c8d7eb 26%, #bed0ea 51%, #a6c0e3 51%, #afc7e8 62%, #bad0ef 75%, #99b5db 88%, #799bc8 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#d2dfed), color-stop(26%,#c8d7eb), color-stop(51%,#bed0ea), color-stop(51%,#a6c0e3), color-stop(62%,#afc7e8), color-stop(75%,#bad0ef), color-stop(88%,#99b5db), color-stop(100%,#799bc8)); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top,  #d2dfed 0%,#c8d7eb 26%,#bed0ea 51%,#a6c0e3 51%,#afc7e8 62%,#bad0ef 75%,#99b5db 88%,#799bc8 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top,  #d2dfed 0%,#c8d7eb 26%,#bed0ea 51%,#a6c0e3 51%,#afc7e8 62%,#bad0ef 75%,#99b5db 88%,#799bc8 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(top,  #d2dfed 0%,#c8d7eb 26%,#bed0ea 51%,#a6c0e3 51%,#afc7e8 62%,#bad0ef 75%,#99b5db 88%,#799bc8 100%); /* IE10+ */
            background: linear-gradient(to bottom,  #d2dfed 0%,#c8d7eb 26%,#bed0ea 51%,#a6c0e3 51%,#afc7e8 62%,#bad0ef 75%,#99b5db 88%,#799bc8 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d2dfed', endColorstr='#799bc8',GradientType=0 ); /* IE6-9 */
        }
        .image_menu {
          height:25px;
          margin-right: 5px;
        }
        #afficheur {
            color:#000; 
            font-size:11pt;
            width:280px;
            height:115px;
            border:1px solid grey;
            background: #e6f0a3; /* Old browsers */
            background: -moz-linear-gradient(top,  #e6f0a3 0%, #d2e638 50%, #c3d825 51%, #dbf043 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#e6f0a3), color-stop(50%,#d2e638), color-stop(51%,#c3d825), color-stop(100%,#dbf043)); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top,  #e6f0a3 0%,#d2e638 50%,#c3d825 51%,#dbf043 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top,  #e6f0a3 0%,#d2e638 50%,#c3d825 51%,#dbf043 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(top,  #e6f0a3 0%,#d2e638 50%,#c3d825 51%,#dbf043 100%); /* IE10+ */
            background: linear-gradient(to bottom,  #e6f0a3 0%,#d2e638 50%,#c3d825 51%,#dbf043 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e6f0a3', endColorstr='#dbf043',GradientType=0 ); /* IE6-9 */
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            text-shadow:1px 1px 3px white;
            padding-top:10px;
            margin-top:30px;
        }
    </style>
</head>

<body onload = "date_heure('afficheur');" >
<div class="bs-example">
    <ul class="nav nav-pills" >
        <li><a href="#"><img src="img/home.png" class="image_menu" /></a></li>
        <li class="dropdown">            
            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><img src="img/profils.png" class="image_menu" /> Profils</a>
            <ul class="dropdown-menu">
                <li><a href="#"><img src="img/user.png" class="image_menu" /> Utilisateurs</a></li>
                <li><a href="#"><img src="img/employes.png" class="image_menu" /> Employés</a></li>
                <li><a href="#"><img src="img/profs.png" class="image_menu" /> Enseignants</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><img src="img/inscriptions.png" class="image_menu" /> Inscriptions <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#"><img src="img/stud.png" class="image_menu" /> Étudiant</a></li>
                <li><a href="index.php/creer/adulte"><img src="img/adulte.png" class="image_menu" /> Adulte</a></li>
                <li class="divider"></li>
                <li><a href="#"><img src="img/cotise.png" class="image_menu" /> Cotisations</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><img src="img/organisation.png" class="image_menu" /> Organisations<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#"><img src="img/filiere.png" class="image_menu" /> Filières</a></li>
                <li><a href="#"><img src="img/emploi.png" class="image_menu" /> Cours</a></li>
                <li class="divider"></li>
                <li><a href="#"><img src="img/calendar.png" class="image_menu" /> Evènements</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><img src="img/absences.png" class="image_menu" /> Vie Scolaire <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#"><img src="img/notes.png" class="image_menu" /> Carnet de notes</a></li>
                <li><a href="#"><img src="img/bulletin.png" class="image_menu" /> Bulletins</a></li>
                <li class="divider" ></li>
                <li style="margin-left:15px; color:blue;" >Gestion des Abscences</li>
                <li class="divider" ></li>
                <li><a href="#"><img src="img/profs.png" class="image_menu" /> Enseignants</a></li>
                <li><a href="#"><img src="img/stud.png" class="image_menu" /> Étudiants</a></li>
            </ul>
        </li>
        <li><a href="#"><img src="img/printer.png" class="image_menu" /> Impressions</a></li>
        <li class="dropdown" >
            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><img src="img/progs.png" class="image_menu" /> Programmes <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#"><img src="img/cours.png" class="image_menu" /> Cours</a></li>
                <li><a href="#"><img src="img/exos.png" class="image_menu" /> Exercices</a></li>
                <li><a href="#"><img src="img/tp.png" class="image_menu" /> TP</a></li>
                <li><a href="#"><img src="img/supports.png" class="image_menu" /> Supports</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><img src="img/inscriptions.png" class="image_menu" /> Règlages <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#"><img src="img/ecole.png" class="image_menu" /> Etablissement</a></li>
                <li class="divider"></li>
                <li><a href="#"><img src="img/bdd.png" class="image_menu" /> Base de donnée</a></li>
            </ul>
        </li>
        <li><a href="#"><img src="img/disconnect.png" class="image_menu" /> Déconnexion</a></li>
    </ul>
</div>
<center>
    <img src="img/bismillahi.png" style="margin-top:50px;"/><br/>
    <img src="img/logo.png" style="margin:20px 0px;" /><br/>
    <div id="afficheur" ></div>
</center>
</body>
</html>