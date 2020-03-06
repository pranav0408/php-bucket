<?php

    session_start();

    echo "<h2>Hello ".$_SESSION['name']."</h2>";

?>

<br>

<form action="destroy.php">
    <button type="submit" style="cursor:pointer;
                                background: tomato;
                                color: white;
                                border: none;
                                padding: 10px 50px;">   Logout 
    </button>
</form>