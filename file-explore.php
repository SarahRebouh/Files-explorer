<?php
 
// -------------------------- TEST


//-------------- Fonction qui cherche les dossiers et les affiche

$scan = scandir('/home/sarahr/');

  foreach($scan as $file)
  {
      if (!is_dir("/home/sarahr/sarahr/$file"))
      {
          echo $file.'<br>';
      }
      else{
        echo $file.'<br>';
      }
  }

//--------- Fonction à appeler pour chercher dans un dossier précis et sortir les fichiers

$scan = scandir('/home/sarahr/Formulaire/');

  foreach($scan as $file)
  {
      if (!is_dir("/home/sarahr/Formulaire/$file"))
      {
          echo $file.'<br>';
      }
      else{
        echo $file.'<br>';
      }
  }


?>
