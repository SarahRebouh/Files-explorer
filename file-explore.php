<?php
 
// -------------------------- TEST

//-------------- Fonction qui cherche les dossiers et les affiche



 


$adresse = '/home/sarahr/';

if (isset($_GET['dossier'])) {
  $adresse = $adresse.$_GET['dossier'];
 }

$dirs = scandir($adresse);

  foreach($dirs as $folder) {
      
      if (!is_dir($adresse.$folder)) {
          
          if ($folder ==".."){
          echo "<img src='images/dossier.png'><a href='index.php?dossier='".$_GET['dossier'].">$folder</a><br>";
          } 
      
          else {
          
                if (isset($_GET['dossier'])){
              echo "<img src='images/file.png'><a href='index.php?dossier='".$_GET['dossier']."$folder/>$folder</a><br>";
                }
      
            else {
                echo "<img src='images/file.png'><a href='index.php?dossier='$folder/>$folder</a><br>";
            }
          
        }
    }
      
      else {
        echo "<img src='images/dossier.png'><a href='index.php?dossier=$folder/'>$folder</a><br>";
    }
  }
