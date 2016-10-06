<?php
/////Ajouter un atelier /////////////////////////////////////////////////////////////////////////
// on se connecte à MySQL
$db = mysql_connect('localhost', 'root', 'root');

// on sélectionne la base
mysql_select_db('CDP',$db);


// On récupére les données du formulaire et on les ajoutes dans la BDD

$titre=$_GET['titre'];
$theme=$_GET['theme'];
$type=$_GET['type'];
$laboratoire=$_GET['laboratoire'];
$lieu=$_GET['lieu'];
$duree=$_GET['duree'];
$capacite=$_GET['capacite'];
$animateur=$_GET['animateur'];
$contenu=$_GET['contenu'];

// Tests sur le formulaire 

if(!empty($titre) and !empty($theme) and !empty($type) and !empty($laboratoire) and !empty($lieu) and !empty($duree) and !empty($capacite) and !empty($animateur) and !empty($contenu)){
	
			$sql = 'INSERT INTO workshop VALUES("NULL","'.$titre.'","'.$theme.'","'.$type.'","'.$laboratoire.'","'.$lieu.'","'.$duree.'","'.$capacite.'","'.$animateur.'","'.$contenu.'")'; 
			mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error()); 
			mysql_close();
		echo '<p style="color:green;"> Votre ajout a ete bien effectue </p>';

	echo '<p style="color:red;"><a href=./ajouter_atelier.html> Retour </a></p>'; 	
				}



	else {
		echo '<p style="color:red;"> Veuillez completer la saisie des champs par des valeurs valides! veuillez cliquer <a href=./ajouter_atelier.html> ici </a> pour recommencer </p>'; 	
			   }



?>
