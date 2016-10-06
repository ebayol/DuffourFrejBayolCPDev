<?php


/////Supprimer un atelier /////////////////////////////////////////////////////////////////////////


// on se connecte à MySQL
$db = mysql_connect('localhost', 'root', 'root');

// on sélectionne la base
mysql_select_db('CDP',$db);


$val=$_GET["param"] ; 



$sql = 'DELETE FROM workshop WHERE id_workshop = '.$val.''; 
mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error()); 
			mysql_close();
		echo '<p style="color:green;"> La suppression a ete effectue avec succees </p>';
	echo '<p style="color:red;"><a href=./gestion_atelier.php> Retour </a></p>'; 	

?>
