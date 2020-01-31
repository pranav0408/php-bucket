<?php 

    $filename = "writeme.txt";
    $file = fopen($filename, "rw");

    // read character by character
    echo fgetc($file);
    echo fgetc($file);
    echo fgetc($file);
    echo fgetc($file);
    echo fgetc($file); 

    echo "<br>";
    // read line by line as a whole string
    echo fgets($file);
?>