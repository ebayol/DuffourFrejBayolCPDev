<?php


echo'
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Formulaire pour Ajouter un Atelier 
-->



<html>
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="fr" />

 
<title>
  Ajouter un atelier
</title>

</head>



<body>


           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html">Acceuil</a>
                    </li>
                    <li>
                        <a href="ajouter_atelier.html">Ajouter un atelier</a>
                    </li>
                </ul>
            </div>



<H1> Gestion des ateliers </H1>
<p> Ici vous avez la possibilite de consulter ou supprimer un atelier </p>
    </P>
 </FORM>



</body>
</html>';


// on se connecte à MySQL
$db = mysql_connect('localhost', 'root', 'root');

// on sélectionne la base
mysql_select_db('CDP',$db);


// On récupére les champs de la table workshop 


$sql = "SELECT id_workshop,title FROM workshop"; 
// on envoie la requête
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());  




$sql2 = mysql_query("SELECT id FROM workshop"); 


echo '<table  border="1">'; 
while($data = mysql_fetch_array($req)) 
    {
    // on affiche les informations de l'enregstrement en cours
    echo '<tr>';
    echo '<td>';
    echo '<b>'.$data['title'].'</b>'; 
    $id_worshop=$data['id_workshop'];
    echo '</td>';
    echo '<td>';
    echo '<a href="consulter_atelier.php?param='.$id_worshop.'">Consulter</a>';
    echo '</td>';
    echo '<td>';
    echo '<a href="supprimer_atelier.php?param='.$id_worshop.'">Supprimer</a>';
    echo '<td>';
    echo '</tr>';
    } 
 echo '</table>';
// on ferme la connexion à mysql
mysql_close();  




?>
