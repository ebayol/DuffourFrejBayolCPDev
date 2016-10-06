<?php



/////Consulter un atelier /////////////////////////////////////////////////////////////////////////


// on se connecte à MySQL
$db = mysql_connect('localhost', 'root', 'root');

// on sélectionne la base
mysql_select_db('CDP',$db);


$val=$_GET["param"] ; 



$sql = 'SELECT id_workshop, title, theme, type, laboratory, place, time, capicity, animator, contents FROM workshop WHERE id_workshop = '.$val.''; 
$req=mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error()); 

$data = mysql_fetch_array($req);



			mysql_close();



echo '<table  border="1">'; 
 		echo '<tr>';
				echo '<td>';
    				echo '<b>Titre</b>'; 
    				echo '</td>';

   

				echo '<td>';
    				echo '<b>Theme</b>'; 
    				echo '</td>';



				echo '<td>';
    				echo '<b>Type</b>'; 
    				echo '</td>';



				echo '<td>';
    				echo '<b>Laboratoire</b>'; 
    				echo '</td>';



				echo '<td>';
    				echo '<b>Lieu</b>'; 
    				echo '</td>';



				echo '<td>';
    				echo '<b>Duree de l atelier</b>'; 
    				echo '</td>';


				echo '<td>';
    				echo '<b>Capacite</b>'; 
    				echo '</td>';

				echo '<td>';
    				echo '<b>Animateur</b>'; 
    				echo '</td>';


				echo '<td>';
    				echo '<b>Contenu pedagogique</b>'; 
    				echo '</td>';



 		echo '</tr>';


 		echo '<tr>';
  

				echo '<td>';
    				echo '<b>'.$data['title'].'</b>'; 
    				echo '</td>';
    				
  	
				echo '<td>';
    				echo '<b>'.$data['theme'].'</b>'; 
    				echo '</td>';


				echo '<td>';
    				echo '<b>'.$data['type'].'</b>'; 
    				echo '</td>';


				echo '<td>';
    				echo '<b>'.$data['laboratory'].'</b>'; 
    				echo '</td>';



				echo '<td>';
    				echo '<b>'.$data['place'].'</b>'; 
    				echo '</td>';



				echo '<td>';
    				echo '<b>'.$data['time'].'</b>'; 
    				echo '</td>';



				echo '<td>';
    				echo '<b>'.$data['capicity'].'</b>'; 
    				echo '</td>';



				echo '<td>';
    				echo '<b>'.$data['animator'].'</b>'; 
    				echo '</td>';
  


				echo '<td>';
    				echo '<b>'.$data['contents'].'</b>'; 
    				echo '</td>';
  
  
  

		  echo '</tr>';
 


echo '</table>';


echo '<p style="color:red;"><a href=./gestion_atelier.php> Retour </a></p>'; 	
?>
