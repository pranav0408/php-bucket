<?php

$a=5;
// function fun1(){
//     $a++;
//     echo "local 'a': $a <br> ";
//     global $a;
//     $a++;
//     echo "global 'a': $a <br> ";
// }

function fun2(){

    $GLOBALS['a'] += 1;

}

// fun1();

fun2();

echo "'a' out side function: $a <br>";

?>