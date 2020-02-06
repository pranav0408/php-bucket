<!-- insert at given position in array-->

<?php

    $orig = array(1,2,3,4,5,6);
    $ins = array('$');

    array_splice($orig,3,0,$ins);
    
    foreach( $orig as $k ){
        echo $k." ";
    }

?>