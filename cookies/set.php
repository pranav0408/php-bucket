<?php

// it takes 6 parameters.
// any amount of time can be given.
// below is name,value,time of life

setcookie("zeus","lorem ipsum",time()+1*60);

    if( isset($_COOKIE['zeus']) ){
        echo "Cookie set for user: zeus";
    }
    else{
        echo "Cookie not set for user: zeus";
    }

?>