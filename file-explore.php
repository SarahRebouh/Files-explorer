<?php

 
// -------------------------- Fonction


//--- L'adresse est le point de départ url de base
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
        
  
//--- Si ma variable transmet une adresse, on affiche une image dossier et on fait un lien vers l'adresse du dossier en ajoutant le nom du dossier à la fin de l'URL
            if (isset($_GET['dossier'])){

                echo "<p class='style'><a class='link' href=http://sarahr.marmier.codeur.online/".$_GET['dossier'].$folder."><img src='images/file.png'> $folder</a><br><p>"; 
                
                echo "<p class='style'><a download='$folder' href=http://sarahr.marmier.codeur.online/".$_GET['dossier'].$folder."><button type='button' class='btn btn-outline-primary col-lg-12 btn_sm'>Télécharger</button></a></p>";
                
            }
        }

//--- Si c'est un dossier, il nous envoie sur le dossier
      
      else {
          
 //--- Si la ligne est == ".." alors on affiche une image retour et on remonte                          
            if ($folder == ".."){
                
                
                if (isset($_GET['dossier'])){
                    echo "<p class='style'><a href='index.php?dossier=".$_GET['dossier'].$folder."/'><img src='images/retour.png'> Retour</a><br></p>";
                    }
                

             } 
          
            else if ($folder == "."){
//--- si la ligne est égale à .. 

                echo "<p class='style'><a href='index.php'><img src='images/home.png'> HOME</a><br></p>";
 //---- on affiche : imagedossier + lien     
            }
                
            

          
            else {
                if (isset($_GET['dossier'])){
                    echo "<p class='style'><a href='index.php?dossier=".$_GET['dossier'].$folder."/'><img src='images/dossier.png'> $folder</a><br></p>";
                    }
                else {
                    
                echo "<p class='style'><a href='index.php?dossier=$folder/'><img src='images/dossier.png'> $folder</a><br></p>";
                }
            }
        }
      }


