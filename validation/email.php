<?php

    // print_r(filter_var());

    $email = "someone@email.comÆ";
    echo "My email is: $email<br>";

    $email = filter_var($email,FILTER_SANITIZE_EMAIL);
    echo "My email after filtering is: $email<br>";

    if( filter_var($email,FILTER_VALIDATE_EMAIL)) {
        echo "<br>The email is valid<br>";
    }else{
        echo "<br>The email is invalid<br>";
    }

?>