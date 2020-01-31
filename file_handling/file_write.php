<?php

    $filename = "writeme.txt";
    $file = fopen( $filename, 'w' ) or die("Unable to write into file") ;
    $text = "Lorem Ipsum Doler Sit\n";
    fwrite( $file, $text );
    fclose( $file );

?>