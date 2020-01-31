<?php

    $filename = "readme.txt";
    $file = fopen($filename,"r") or die("<b>Error 404 <br> </b>File <b>$filename</b> is not available to read");

    while(!feof($file)){
        echo fgetc($file);
    }

    fclose($file);

?>