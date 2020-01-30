<!-- Do Form Validations -->
<!-- Do sanitize -->

<?php
    $comment = "<h1>Hey There!! How are you doing today?</h1>";
    $s = filter_var($comment, FILTER_SANITIZE_STRING);
    echo $s."<br>";

    $int = 20.1;
    if( filter_var($int,FILTER_VALIDATE_INT)){
        echo "The <b>$int</b> is a valid integer <br>";
    }else{
        echo "The <b>$int</b> is not a valid integer <br>";
    }
?>