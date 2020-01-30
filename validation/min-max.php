<?php

    $int = 124;
    if(filter_var($int,FILTER_VALIDATE_INT,array(
        "options" => array("min_range" => 0, "max_range" => 100)
    ))){
        echo "The <b>$int</b> is within the range of 0 to 100";
    }else{
        echo "The <b>$int</b> does not satisfies the range";
    }

?>