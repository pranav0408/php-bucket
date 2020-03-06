<?php

    // The following commented line will throw warning if file is not present
    // $file = fopen("hello-php.txt","r");

    if( file_exists("hello-php.txt") ){
        $file = fopen("hello-php.txt","r");
    }else {
        die("Error: file not present");
    }


?>