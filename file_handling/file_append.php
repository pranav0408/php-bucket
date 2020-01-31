<?php

    $filename = "writeme.txt";
    $file = fopen( $filename, 'a' );
    $text = "Lorem Ipsum Doler Sit\n";
    fwrite( $file, $text);
    fclose( $file );

?>