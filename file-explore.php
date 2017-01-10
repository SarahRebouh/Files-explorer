<?php
 
// -------------------------- TEST
<<<<<<< HEAD
//-------------- Fonction qui cherche les dossiers et les affiche
$scan = scandir('/home/sarahr/');

  foreach($scan as $file)
  {
      if (is_dir("/home/sarahr/$file"))
      {
          echo '<img src="images/dossier.png">'. $file.'<br>';
      }
      else {
          
        echo '<img src="images/file.png">'. $file.'<br>';
      }
  }


//--------- Fonction à appeler pour chercher dans un dossier précis et sortir les fichiers

//
//$scan = scandir('/home/sarahr/jeu-de-la-fourchette/');
//  foreach($scan as $file)
//  {
//      if (!is_dir("/home/sarahr/jeu-de-la-fourchette/$file"))
//      {
//          echo $file.'<br>';
//      }
//      
//      else {
//          
//        echo $file.'<br>';
//          
//      }
//  }
//---------------- Fonction pour scanner les dossiers
//$vrar = $_GET['/home/sarahr/'];
//if(strlen($var)==0){
//$var='.';
//}
//$ar = scandir($var);
//while (list ($key, $val) = each ($ar)) {
//if (is_dir($val)){
//echo "<a href=scandir.php?/home/sarahr/=$val>$val</a><br>";
//}else {
//echo "$val<br>";
//}
//}
=======


//-------------- Fonction qui cherche les dossiers et les affiche

$scan = scandir('/home/sarahr/');

  foreach($scan as $file)
  {
      if (!is_dir("/home/sarahr/sarahr/$file"))
      {
          echo $file.'<br>';
      }
      else {
          
        echo $file.'<br>';
      }
  }

//--------- Fonction à appeler pour chercher dans un dossier précis et sortir les fichiers

$scan = scandir('/home/sarahr/jeu-de-la-fourchette/');

  foreach($scan as $file)
  {
      if (!is_dir("/home/sarahr/jeu-de-la-fourchette/$file"))
      {
          echo $file.'<br>';
      }
      
      else {
          
        echo $file.'<br>';
          
      }
  }

//---------------- Fonction pour scanner les dossiers

$vrar = $_GET['/home/sarahr/'];

if(strlen($var)==0){

$var='.';

}

$ar = scandir($var);

while (list ($key, $val) = each ($ar)) {

if (is_dir($val)){
echo "<a href=scandir.php?/home/sarahr/=$val>$val</a><br>";

}else {

echo "$val<br>";
>>>>>>> master

}

}

?>
