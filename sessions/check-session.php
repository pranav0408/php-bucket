<?php

    session_start();

    echo "Hi, " . $_SESSION['firstname']; 

    // deleting entry from session
    unset($_SESSION['lastname']);

?>