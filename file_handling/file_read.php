<?php 

    $filename = "readme.txt";
    echo "Reading content of file without opening it first: <br>";
    echo readfile($filename);
    echo "<br><br>";

    echo "Printing content of file by opening it first: <br>";
    $file = fopen($filename,'r');
    $size = filesize($filename);
    echo fread($file,$size);

?>