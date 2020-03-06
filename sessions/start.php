<?php

session_start();

$_SESSION['firstname'] = "lorem";
$_SESSION['lastname'] = "ipsum";

print_r($_SESSION);

echo "<br>";

echo session_status();

// session_destroy();

?>