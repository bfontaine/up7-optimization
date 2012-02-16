<?php 
    // Don't send cookies for static content
    session_set_cookie_params(1200, '/misc/up7opt/', 'labs.bfontaine.net');
    session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="fr">
        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

                <title>Accueil - Université Paris Diderot - Paris 7</title>

                <meta name="description" content="Université Paris Diderot, Paris 7, pluridisciplinaire, Sciences, Médecine, Odontologie, Lettres, Langues, Sciences Humaines">
                <meta name="keywords" content="Université,Diderot,Paris,7,enseignement supérieur,formation,continue,sciences,santé,sociales,humaines,langues">
                <link rel="icon" type="image/ico" href="images/favicon.ico" />

                <link href="css/commun.css" rel="stylesheet" type="text/css"/>
                <link href="css/site.css" rel="stylesheet" type="text/css"/>
                <link href="css/sitefr.css" rel="stylesheet" type="text/css"/>
                <link href="css/menu.css" rel="stylesheet" type="text/css"/>
                <link href="css/design.css" rel="stylesheet" media="all"/>
                <link href="css/menuA.css" rel="stylesheet" type="text/css"/>

                <script src="js/jquery-1.7.1.min.js"></script>
                <script src="js/slide.min.js"></script>
                <script src="js/menu.min.js"></script>
</head>
        <?php flush(); ?>
        <body>

        <div id="cadre">
        <div id="logo">
        <a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=accueil&np=accueil&g=sm&h=o">
        <img src="http://static1.bfontaine.net/up7opt/logo-P7.png" height="320" width="124" />
        </a>
        </div>

        <div id="bandeau"><?php echo('<img src="http://static1.bfontaine.net/up7opt/accueil_'.mt_rand(1,5).'.png" height="160" width="900" />'); ?></div> 
        <div id="bandeau_2">

        <div id="deroulant">

        <div style="float:left">
        <ul id="menu">

        <li style="margin-top:8px">
        <a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=universite&np=ACCUEIL" class="trans"><div style="height:18px; width:159px; padding-top:5px; padding-left:2px;">
        PARIS DIDEROT   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></a>
        <ul style="margin-top:0px; margin-left:5px">
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=universite&np=ACCUEIL">L'université</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=universite&np=Direction">Le président et son équipe</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=universite&np=Conseils">Conseils</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=universite&np=Composantes">Les composantes</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=universite&np=Services">Les services</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=universite&np=contrat">Contrat/Bilan</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=universite&np=DevDurable">Diderot Développement Durable</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=universite&np=PRES">PRES Sorbonne Paris Cité</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=universite&np=PRG">Les sites Paris Diderot</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=universite&np=HistoriqueUPD">Historique</a>
        </li>
        </ul>
        </li>

        <li>
        <a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=formations&np=ACCUEIL" class="trans"><div style="height:18px; width:159px; padding-top:5px; padding-left:2px; ">
        FORMATIONS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></a>
        <ul style="margin-top:-2px; margin-left:5px">
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=formations&np=ACCUEIL">Formations</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=formations&np=LICENCES">LICENCES</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=formations&np=MASTERS">MASTERS</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=formations&np=FICHEED">DOCTORATS</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=formations&np=LISTEMED">Médecine &amp; odontologie</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=formations&np=DIPLINGENIEUR">Ecole d'Ingénieur</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=formations&np=CURSPRPOF">Cursus professionnels</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=formations&np=LSTDIPEUR">Cursus internationaux</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=formations&np=CURSAPP">Cursus en apprentissage</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=formations&np=PREPAS">Préparation aux concours</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=formations&np=FORMAITRE">Formation des enseignants</a>
        </li>
        </ul>
        </li>   

        <li>
        <a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=recherche&np=ACCUEIL" class="trans"><div style="height:18px; width:159px; padding-top:5px; padding-left:2px; ">RECHERCHE   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></a>
        <ul style="margin-top:-2px; margin-left:5px">
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=recherche&np=ACCUEIL">La recherche à Paris Diderot</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=recherche&np=EQUPRECH">Les équipes de recherche</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=recherche&np=EDOCT">Les études doctorales</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=recherche&np=Publications_Diderot">Les publications</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=recherche&np=ResDOC">Les ressources documentaires</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=recherche&np=CONGCOLL">Congrès et colloques</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=recherche&np=APPOFFRE">Appels d'offre</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=recherche&np=ACTUS">Actualités de la recherche</a>
        </li>
        </ul>
        </li>     

        <li>
        <a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=vivre_universite&np=ACCUEIL" class="trans"><div style="height:18px; width:159px; padding-top:5px;  padding-left:2px;">VIE DU CAMPUS   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></a>
        <ul style="margin-top:-2px; margin-left:5px">
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=vivre_universite&np=ACCUEIL">Actualités</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=vivre_universite&np=culture">Culture</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=vivre_universite&np=medecine_preventive">Médecine préventive</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=vivre_universite&np=relais_handicap">Relais handicap</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=vivre_universite&np=sport">Sport</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=vivre_universite&np=vie_etudiante">Vie étudiante</a>
        </li>
        </ul>
        </li>

        <li>
        <a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=international&np=ACCUEIL" class="trans"><div style="height:18px; width:159px; padding-top:5px; padding-left:2px; ">INTERNATIONAL   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></a>
        <ul style="margin-top:-2px; margin-left:5px">
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=international&np=ACCUEIL">Relations Internationales</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=international&np=EtudiantsSortants">Etudiants Paris Diderot</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=international&np=EtudiantsEntrants">Etudiants étrangers</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=international&np=EnseignantsSortants">Enseignants Paris Diderot</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=international&np=EnseignantsEntrants">Enseignants étrangers</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=international&np=cooperationsinternationales">Coopération Internationale</a>
        </li>
        </ul>
        </li>

        <li>
        <a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=documentation&np=bibliotheque" class="trans"><div style="height:18px; width:159px; padding-top:5px; padding-left:2px; ">DOCUMENTATION   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></a>
        <ul style="margin-top:-2px; margin-left:5px">
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=documentation&np=bibliotheque">Bibliothèque</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=documentation&np=videotheque">Videothèque</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=documentation&np=phototheque">Photothèque </a>
        </li>
        </ul>
        </li>

        </ul>
        </div>
        <div style="float:right; margin-top:5px; margin-right:5px; ">
        <a class="flag" id="french" href="http://www.univ-paris-diderot.fr/index.php"></a>
        <a class="flag" id="english" href="http://www.univ-paris-diderot.fr/english/sc/site.php?bc=accueil&np=accueil&g=m/"></a>
        <a class="flag" id="spanish" href="http://www.univ-paris-diderot.fr/spanish/sc/site.php?bc=accueil&np=accueil&g=m/"></a>
        <a class="flag" id="chinese" href="http://www.univ-paris-diderot.fr/chinese/sc/site.php?bc=accueil&np=accueil&g=m/"></a>
        </div>
        <form name="form1" method="get" action="http://cherche.univ-paris-diderot.fr/search">	
        <div class="boutonRech">	

        <input name="q" class="saisieRech" size="50" maxlength="150" type="text">	
        <input type="hidden" name="client" value="default_frontend">
        <input type="hidden" name="output" value="xml_no_dtd">
        <input type="hidden" name="filter" value="0">
        <input type="hidden" name="proxystylesheet" value="default_frontend">
        <input name="Submit" type="submit" class="clickRech" value="rechercher">      
        </div>

        </form>
        <div style="float:right; margin-top:100px; margin-right:5px; margin-left:50px; width:250px; width:600px; text-align:right; padding:0px; font-family: Helvetica; font-size:14px; color:#fff; letter-spacing:2; ">
        PARIS DIDEROT, VOTRE UNIVERSITE
        </div>

        </div>
        </div>
        <div id="spacer"></div>
        <div class="bg_gauche">
        <div class="bg_droite">
        <div id="page1">
        <div id="navigation">
        <div id="menuEspace">
        <div class="menuEspace">Vos espaces</div>
        <div class="cadreEspace">
        <a class="espace" href="http://www.univ-paris-diderot.fr/sc/site.php?bc=espace&np=etudiant">&#9658; Etudiants</a>
        <a class="espace" href="http://www.univ-paris-diderot.fr/sc/site.php?bc=espace&np=personnel">&#9658; Personnels</a>
        <a class="espace" href="http://www.univ-paris-diderot.fr/sc/site.php?bc=espace&np=entreprise">&#9658; Entreprises</a>
        <a class="espace" href="http://www.univ-paris-diderot.fr/sc/site.php?bc=espace&np=presse">&#9658; Presse</a>
        <a class="espace" href="https://cas.sc.univ-paris-diderot.fr/index.jsp?service=http://portail.univ-paris-diderot.fr/Login">&#9658; Portail ENT/Intranet</a>
        </div>
        </div>

        <div style="margin-top:20px; margin-left:auto; margin-right:auto; width:150px">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="ligne" href="http://fr-fr.facebook.com/univparisdiderot" title="page FaceBook Paris Diderot"><img src="http://static1.bfontaine.net/up7opt/faceBook.png" alt="FaceBook" align="middle" width="18" height="18" /></a>
        <a class="ligne" href="http://twitter.com/#ParisDiderot" title="Twitter">
        <img src="http://static1.bfontaine.net/up7opt/twitter.png" alt="Suivez Paris Diderot sur Twitter" align="middle" height="20" width="20" /></a>

        <a class="ligne" href="http://www.univ-paris-diderot.fr/universite/rssActu1.php" title="Syndiquer tout le site">
        <img src="http://static1.bfontaine.net/up7opt/feed.png" alt="Fil Rss du site" align="middle" height="24" width="24"/></a>
        </div>

        <div style="margin-top:10px; margin-bottom:0px; font-size:13px; padding-left:36px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; letter-spacing:0.5; color:#D6003D; line-height:18px;">Université Paris Diderot</div>
        <div style=" font-size:13px;  padding-left:36px;  font-family:Arial, Helvetica, sans-serif; letter-spacing:0.5; color:#827D82; text-decoration:none; line-height:18px;">
        5 rue Thomas-Mann<br/>
        75013 Paris<br/>
        Tél. +33 (0)1 57 27 57 27<br/>
        </div>
        <div style="margin-top:20px; margin-left:auto; margin-right:auto; width:150px">
        <a href="http://www.sorbonne-paris-cite.fr/"><img src="http://static1.bfontaine.net/up7opt/logo-Sorbonne-Paris-Cite.png" width="140" height="117" /></a>
        </div>

        <div class="encadre"><br/>
        <p align="center">
        <a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=recrutement&np=ACCUEIL&g=m"><img src="http://static1.bfontaine.net/up7opt/stickerrecrutement_3.png" border="1" alt="recrutement" width="140" height="119" /></a>
        </p></div>
        <div class="cleardiv"></div><br/> 
        <div class="cleardiv"></div>
        </div>

        <div id="content">   
        <div id="page">

        <div id="slideshow">
        <div id="slidesContainer" style="overflow-x: hidden; overflow-y: hidden; ">

        <div id="slideInner" style="width: 3360px; "><div class="slide" style="float: left; width: 560px; ">
        <h2> Appel à initiatives étudiantes</h2>
        <p><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=accueil&np=pageActu&ref=3909" class="ui-link-inherit">
        <img src="http://static2.bfontaine.net/up7opt/illu_appelpres2.jpg" alt="project thumbnail" width="120" height="112" /></a>
        Cet appel à projets encourage les projets associatifs et favorise des actions communes avec d’autres membres des établissements du Pres Sorbonne Paris Cité.<a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=accueil&np=pageActu&ref=3909"><span class="suite">Lire la suite</span></a> </p> 

        </div><div class="slide" style="float: left; width: 560px; ">
        <h2> Journée portes ouvertes 2012</h2>
        <p><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=accueil&np=pageActu&ref=3910" class="ui-link-inherit">
        <img src="http://static1.bfontaine.net/up7opt/Sticker-JPO2.png" alt="project thumbnail" width="120" height="120" /></a>
        Nos prochaines Portes ouvertes concernent les futurs étudiants en médecine et ceux de licence : Sciences, Technologie; Arts, Lettres, Langues ; Economie, Gestion ; Sciences Humaines et Sociales<a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=accueil&np=pageActu&ref=3910"><span class="suite">Lire la suite</span></a> </p> 

        </div><div class="slide" style="float: left; width: 560px; ">
        <h2> Cycle de cinéma chinois: De l'écrit à l'écran &#20013;&#22269;&#30005;&#24433;:&#20889;&#20316;&#21040;&#38134;&#24149;</h2>
        <p><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=accueil&np=pageActu&ref=3955" class="ui-link-inherit">
        <img src="http://static2.bfontaine.net/up7opt/confucius_cycle_cinema_chinois.jpg" alt="project thumbnail" width="120" height="91" /></a>
        de novembre 2011 à juin 2012. 2e saison du cycle de cinéma chinois à l'institut Confucius. 16 films seront projetés entre novembre 2011 et juin 2012 et exploreront, des années 1931 à la décennie 2006, les rapports entre le cinéma et la littérature. Chaque film sera introduit par Luisa Prudentino, spécialiste du cinéma chinois et la projection sera suivi d’un débat. <a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=accueil&np=pageActu&ref=3955"><span class="suite">Lire la suite</span></a> </p> 

        </div><div class="slide" style="float: left; width: 560px; ">
        <h2> Publication</h2>
        <p><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=accueil&np=pageActu&ref=3953" class="ui-link-inherit">
        <img src="http://static2.bfontaine.net/up7opt/illu_oikos_120.jpg" alt="project thumbnail" width="120" height="146" /></a>
        "L'oikos en fête. Célébrations familiales et sociabilité en Grèce ancienne". 
        Comment définir la famille en Grèce ancienne ? Qui invite-t-on chez soi ? Suivant quelles modalités ? Pourquoi ? Le livre de Florence Gherchanoc, maître de conférences en histoire grecque à l’université Paris Diderot, vient de paraître.   
        &nbsp;<a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=accueil&np=pageActu&ref=3953"><span class="suite">Lire la suite</span></a> </p> 

        </div><div class="slide" style="float: left; width: 560px; ">
        <h2> Publication</h2>
        <p><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=accueil&np=pageActu&ref=3964" class="ui-link-inherit">
        <img src="http://static2.bfontaine.net/up7opt/couv_communisme150.jpg" alt="project thumbnail" width="120" height="128" /></a>
        "Le Communisme primitif n’est plus ce qu’il était" : ce  livre, actuellement en cours de réédition, a été écrit par Christophe  Darmangeat, docteur en sciences économiques à l’université Paris  Diderot.<a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=accueil&np=pageActu&ref=3964"><span class="suite">Lire la suite</span></a> </p> 

        </div></div>

        </div>
        </div>

        <div id="colloques"> 
        <div class="titre">
        <h2 class="titre1"><a class="titre1" href="http://www.univ-paris-diderot.fr/sc/site.php?bc=recherche&np=CONGCOLL">Colloques <br/><br/>Congrès<br/><br/>Séminaires</a></h2>
        </div>

        <div class="contenu">

        <h2> <a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=accueil&np=pageActu&ref=3959">Colloque international de linguistique japonaise</a></h2>
        <h3> du 13/02/12<br/>au 10/03/12</h3>

        </div>
        <div class="contenu">

        <h2> <a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=accueil&np=pageActu&ref=3906">Conférence Monod-Diderot</a></h2>
        <h3> le 17/02/12</h3>

        </div>
        <div class="contenu">

        <h2> <a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=accueil&np=pageActu&ref=3912">Conférence en finance quantitative et statistique</a></h2>
        <h3> du 01/03/12<br/>au 02/03/12</h3>

        </div>
        <div class="contenu">

        <h2> <a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=accueil&np=pageActu&ref=3942"> Colloque international transdisciplinaire</a></h2>
        <h3> du 15/03/12<br/>au 17/03/12</h3>

        </div>

        </div>  
        <div id="gaucheN">	
        <div class="listeActuasG">

        <div class="encadreActu">
        <div class="titreActu">Elections des personnels</div>
        <div class="nouvelle"><div class="paragraph5">
        <table cellspacing="0" cellpadding="1" align="left" style="width: 303px; height: 186px;">
        <tbody>
        <tr>
        <td><img width="120" height="133" src="http://static2.bfontaine.net/up7opt/elections.gif" alt=""/></td>
        <td>&nbsp;</td>
        <td>
        <div class="paragraph5"><span style="color:black;"><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=elections&np=ELEC_16_02_12&g=m"><span style="color:black;"><strong><span style="font-size: small;">Candidats aux <br/>
        élections des <br/>
        personnels aux <br/>
        CA,&nbsp;CEVU, CS</span></strong></span></a></span><span style="font-size: small;"><br/>
        <br/>
        </span></div>
        <div class="paragraph5"><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=elections&np=ELEC_16_02_12_MED&g=m"><span style="color:black;"><strong><span style="font-size: small;">Candidats aux <br/>
        élections des<br/>
        personnels <br/>
        UFR&nbsp;de Médecine</span></strong></span></a><span style="font-size: small;"><br/>
        </span><a href="http://www.univ-paris-diderot.fr/DocumentsFCK/elections/File/ETUD_USAGERS_2012/resultats/IUH%20pers.pdf"><strong><span style="font-size: x-small;"><br/>
        </span></strong></a></div>
        </td>
        </tr>
        </tbody>
        </table>
        </div>
        <p>&nbsp;</p></div>

        <div class="cleardiv"></div>    
        </div>
        <div class="cleardiv"></div>

        </div> 

        <div class="cleardiv"></div>
        </div>

        <div id="droitet">
        <div></div>
        <div></div>
        <div></div>
        <div class="cleardiv"></div>
        <div class="cleardiv"></div>
        <div class="cleardiv"></div>

        <div class="FlashInfos"></div>
        <div class="choix_infos">
        <ul id="menuA">
        <li>
        <a href="http://www.univ-paris-diderot.fr/scf/site.php?bc=accueil&np=ACCUEIL" class="trans">Toutes les infos &#9660;</a>
        <ul>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=accueil&np=actualites&ref=UNIVERSITE">L'université</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=accueil&np=actualites&ref=FORMATIONS">Formation</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=accueil&np=actualites&ref=CULTURE">Culture</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=accueil&np=actualites&ref=VIE_ETUDIANTE">Vie étudiante</a>
        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=accueil&np=actualites&ref=RECHERCHE">Recherche</a>

        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=recherche&np=CONGCOLL">Séminaires et colloques</a>

        </li>
        <li><a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=accueil&np=actualites&ref=INTERNATIONAL">International</a>
        </li>

        </ul>
        </li>
        </ul>

        </div><div class="cleardiv"></div>
        <div id="listeActuas">

        <div class="encadreActu">
        <div class="titreActu">Site web : nouvelle ergonomie, nouveau graphisme</div>
        <div class="nouvelle"><p>Le site internet rénové de l’université Paris Diderot a été lancé jeudi 9 février à 12h00.

        <a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=accueil&np=pageActu&ref=3949" class="lirelasuite">lire la suite</a>

        </p></div>
        <div class="cleardiv"></div>    
        </div>
        <div class="cleardiv"></div>
        <div class="encadreActu">
        <div class="titreActu">Autisme</div>
        <div class="nouvelle"><p>De nouveaux résultats soulignent l’importance des gènes synaptiques dans l’autisme.

        <a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=accueil&np=pageActu&ref=3950" class="lirelasuite">lire la suite</a>

        </p></div>
        <div class="cleardiv"></div>    
        </div>
        <div class="cleardiv"></div>
        <div class="cleardiv"></div>
        <div class="cleardiv"></div>
        <div class="encadreActu">
        <div class="titreActu">Médaille d'argent</div>
        <div class="nouvelle"><p style="text-align: justify;">Louca Mendy, étudiant en 1<sup>re</sup> année de licence de Sciences économiques et sociales à    l'université Paris Diderot, a décroché la médaille d'argent aux    championnats de France universitaire d'athlétisme.

        <a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=accueil&np=pageActu&ref=3962" class="lirelasuite">lire la suite</a>

        </p></div>
        <div class="cleardiv"></div>    
        </div>
        <div class="cleardiv"></div>
        <div class="cleardiv"></div>
        <div class="encadreActu">
        <div class="titreActu">Diversité du japonais et dialectes</div>
        <div class="nouvelle"><div class="paragraph5"><strong><span style="font-weight: bold;">Ce colloque se tiendra en japonais par le Professeur</span></strong><span style="font-weight: bold;"> </span>Haruo Kubozono &#31402;&#34199;&#26228;&#22827;, chercheur invité par l’Université Paris Diderot</div>
        <p>&nbsp;

<a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=accueil&np=pageActu&ref=3958" class="lirelasuite">lire la suite</a>

        </p></div>
        <div class="cleardiv"></div>    
        </div>
        <div class="cleardiv"></div>
        </div> 

        <div>
        </div>

        </div>                     

        <br/>
        <div class="cleardiv"></div>

        </div>

        </div> 
        <div class="cleardiv"></div>

        <div id="menuLien">		

        <div class="boiter">

        <ul> <li><img src="http://static2.bfontaine.net/up7opt/couv_guide_etu_11-12.jpg" width="120" height="85"/><a class="legende" href="http://www.univ-paris-diderot.fr/guides/guide_etudiant/index.html">Guide de l'étudiante<br/> et de l'étudiant<br/>Edition 2011-2012</a></li></ul>

        <ul> <li><img src="http://static2.bfontaine.net/up7opt/couv_guide_i10l_en.jpg" width="120" height="85"/><a class="legende" href="http://www.univ-paris-diderot.fr/guides/guide_inter_ang/index.html">Guide international de l'étudiant<br/>version anglaise</a></li></ul>

        <ul> <li><img src="http://static2.bfontaine.net/up7opt/couv_guide_i10l_fr.jpg" width="120" height="85"/><a class="legende" href="http://www.univ-paris-diderot.fr/guides/guide_inter_fra/index.html">Guide international de l'étudiant<br/>version française</a></li></ul>

        </div>

        <div class="cleardiv"></div></div>

        <div id="footer">
        <div id="menu_footer">
        <a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=annuaire&np=ACCUEIL">Annuaire</a>
        <a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=accueil&np=contact&g=sm">Contact</a>
        <a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=implantations&np=ACCUEIL">Venir</a>
        <a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=accueil&np=plan_site&g=sm">Plan du site</a>
        <a href="https://cas.sc.univ-paris-diderot.fr/index.jsp?service=http://portail.univ-paris-diderot.fr/Login">Portail ENT/Intranet</a>
        <a href="http://www.univ-paris-diderot.fr/sc/site.php?bc=accueil&np=mentions_legales&g=sm#">Informations légales</a>
        <a href="mailto:communic@univ-paris-diderot.fr">Université Paris Diderot - 2012</a>
        </div>
        </div>
        <div id="spacer"></div>
        <div id="finpage"></div>
        </div> 

        </div> 

        </div>
        </div>
        <!--<script type="text/javascript">
        var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script><script src="js/ga.js" type="text/javascript"></script>
<script type="text/javascript">
try {_gat._getTracker("UA-15158667-2")._trackPageview();} catch(e) {}</script>-->

</body>
        </html>
