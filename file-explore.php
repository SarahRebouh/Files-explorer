<?php

 
// -------------------------- Fonction


//--- L'adresse est le point de départn url de base
$adresse = '/home/sarahr/';


//--- Si le dossier est set (pas null donc trouvé), l'adresse devient l'adresse de départ suivi du dossier
if (isset($_GET['dossier'])) {
  $adresse = $adresse.$_GET['dossier'];
 }


//--- Contenu de l'adresse, scandir récupère dans un tableau toutes les données
$dirs = scandir($adresse);


//--- Chaque ligne du tableau = $folder. Après le "as", c'est la valeur de la cellule, donc d'une ligne du tableau
  foreach ($dirs as $folder) {
      
      
//--- Si l'adresse visée n'est pas un dossier, alors c'est un fichier     
      if (!is_dir($adresse.$folder)) {
        
  
//--- Si ma varibale transmet une adresse, on affiche une image dossier et on fait un lien vers l'adresse du dossier en ajoutant le nom du dossier à la fin de l'URL
                    if (isset($_GET['dossier'])){
                        echo "<a href='index.php?dossier='".$_GET['dossier']."$folder/><img src='images/file.png'>$folder</a><br>";
                    }

//--- Et sinon, il nous envoie sur le dossier écrit dans l'adresse
                    else {
                        echo "<a href='index.php?dossier='$folder/><img src='images/file.png'>$folder</a><br>";
                    }
            }

//--- Si c'est un dossier, il nous envoie sur le dossier
      
      else {
          
 //--- Si la ligne est == ".." alors on affiche une image retour et on remonte                          
            if ($folder == ".."){
                
                
                if (isset($_GET['dossier'])){
                    echo "<img src='images/retour.png'><a href='index.php?dossier=".$_GET['dossier'].$folder."/'>$folder</a><br>";
                    }
                
                else{
                    echo "<img src='images/retour.png'><a href='index.php'>$folder</a><br>";
                }
            } 

          
            else {
                if (isset($_GET['dossier'])){
                    echo "<img src='images/dossier.png'><a href='index.php?dossier=".$_GET['dossier'].$folder."/'>$folder</a><br>";
                    }
                else {
                    
                echo "<a href='index.php?dossier=$folder/'><img src='images/dossier.png'>$folder</a><br>";
                }
            }
        
      }
  }

