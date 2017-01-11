<?php

 
// -------------------------- Fonction


//--- L'adresse est le point de départ 
$adresse = '/home/sarahr/';


//--- Si le dossier est set (pas null donc trouvé), l'adresse devient l'adresse de départ suivi du dossier
if (isset($_GET['dossier'])) {
  $adresse = $adresse.$_GET['dossier'];
 }


//--- Contenu de l'adresse, scandir récupère dans un tableau toutes les données
$dirs = scandir($adresse);


//--- Chaque ligne du tableau = $folder. Après le "as", c'est la valeur de la cellule, donc d'une ligne du tableau
  foreach ($dirs as $folder) {
      
      
//--- Si l'adresse visée n'est pas un dossier, donc est un fichier     
      if (!is_dir($adresse.$folder)) {
          
          
//--- Si la ligne est ".." alors on affiche une image dossier et on crée un lien vers  A REVOIR        
          if ($folder ==".."){
                echo "<img src='images/dossier.png'><a href='index.php?dossier='".$_GET['dossier'].">$folder</a><br>";
          } 
          

//--- Sinon
          else {
  
//--- Si ma varibale est définie, si elle existe, donc si elle transmet une adresse, on affiche une image dossier et on fait un lien vers l'adresse du dossier en ajoutant le nom du dossier à la fin de l'URL
                    if (isset($_GET['dossier'])){
                        echo "<a href='index.php?dossier='".$_GET['dossier']."$folder/><img src='images/file.png'>$folder</a><br>";
                    }

//--- Et sinon, on reste sur la même adresse
                    else {
                        echo "<a href='index.php?dossier='$folder/><img src='images/file.png'>$folder</a><br>";
                    }
          
            }
    }

//--- Sinon on reste sur la même adresse
      
      else {
        echo "<a href='index.php?dossier=$folder/'><img src='images/dossier.png'>$folder</a><br>";
    }
  }

