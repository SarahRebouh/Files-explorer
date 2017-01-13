<?php

$url = $_GET["donnees"]; //Je récupère les données dans index.php
$exp = explode(".", $url); //Je récupère l'adresse découpée'
$exp =  array_reverse($exp); //J'inverse le découpage de l'adresse

$extension = ".".$exp[0]; //Je crée une variable  = .jpg.png...

    if ($url !==null){
        
        if ($extension == ".png" || $extension == ".jpg" || $extension == ".jpeg" || $extension == ".gif" || $extension == ".svg"){
        echo "<img src='".$url."'>";    
        }
        
        else{
            echo "<p class='salut'>Ce type de fichier n'est pas supporté. Veuillez le télécharger.</p>";
        }
    }
