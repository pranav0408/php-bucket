<?php

for($a=1;$a<=20;$a++){

    if( $a%3==0 && $a%5==0 ){
        echo "Number is $a : Hi KM038 <br>";
    }
    else if( $a%3==0){
        echo "Number is $a : Hi <br>";
    }
    else if( $a%5==0 ){
        echo "Number is $a : KM038 <br>";
    }

}

?>