<?php
    echo "The filename executing is => <b>".$_SERVER['PHP_SELF'],"</b> <br>";
    echo "The name of the host server is => <b>".$_SERVER['SERVER_NAME'],"</b> <br>";
    echo "The host header from current request is => <b>".$_SERVER['HTTP_HOST'],"</b> <br>";
    echo "The path of current script => <b>".$_SERVER['SCRIPT_NAME'],"</b> <br>";
    echo "The absolute path of current script => <b>".$_SERVER['SCRIPT_FILENAME'],"</b> <br>";
?>