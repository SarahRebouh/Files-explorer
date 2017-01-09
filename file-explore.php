<?php
 
    echo $_SERVER['DOCUMENT_ROOT'];
    echo "<br>";

    $dir = "/home/sarahr/";

// Open a directory, and read its contents

    if (is_dir($dir)){
    if ($dh = opendir($dir)){
        while (($file = readdir($dh)) !== false){
            echo "filename:" . $file . "<br>";
    }
    closedir($dh);
  }
}

?>

