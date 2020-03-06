<?php

    function custom_error( $err_no, $err_msg, $f, $line ) {
        echo "<b>Error no:</b> [$err_no] <br>";
        echo "<b>Error msg:</b> [$err_msg] <br>";
        echo "<b>Error file:</b> [$f] <br>";
        echo "<b>Error line:</b> [$line] <br>";
        
        echo "<br><br>";

        $err_msg = "Please correct it";
        echo "<b>Custom msg:</b> [$err_msg] <br>";
    }

    set_error_handler("custom_error");
    echo $test;

?>