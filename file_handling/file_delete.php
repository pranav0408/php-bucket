<?php

    $file = "dumpme.txt";
    unlink($file) or die("File: <b>$file</b> is not avaliable");
    echo "<br> File Deleted <br>";

?>